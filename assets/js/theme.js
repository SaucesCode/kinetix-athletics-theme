/**
 * Kinetix Athletics — Luxury Performance Frontend Engine
 * Handles fluid scroll reveals, interactive lookbook HUD telemetry, metric counters,
 * magnetic card spotlight tracking, live catalog filtering, and size/swatch pickers.
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle (ISO 9241: Controllability & Accessibility)
    const mobileBtn = document.getElementById('kinetix-mobile-btn');
    const mobileNav = document.getElementById('kinetix-mobile-overlay');

    if (mobileBtn && mobileNav) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = mobileBtn.classList.toggle('active');
            mobileNav.classList.toggle('open', isOpen);
            mobileNav.setAttribute('aria-hidden', String(!isOpen));
            mobileBtn.setAttribute('aria-expanded', String(isOpen));
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileBtn.classList.remove('active');
                mobileNav.classList.remove('open');
                mobileNav.setAttribute('aria-hidden', 'true');
                mobileBtn.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileNav.classList.contains('open')) {
                mobileBtn.classList.remove('active');
                mobileNav.classList.remove('open');
                mobileNav.setAttribute('aria-hidden', 'true');
                mobileBtn.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });
    }

    // 2. Announcement Ticker Close
    const tickerClose = document.querySelector('.ticker-close');
    const tickerBar = document.querySelector('.kinetix-ticker-bar');
    if (tickerClose && tickerBar) {
        tickerClose.addEventListener('click', () => {
            tickerBar.style.display = 'none';
        });
    }

    // 3. Search Quick Scroll
    const searchBtn = document.getElementById('kinetix-search-btn');
    const searchInput = document.getElementById('kinetix-search-input');
    if (searchBtn && searchInput) {
        searchBtn.addEventListener('click', () => {
            const catSec = document.getElementById('catalog');
            if (catSec) {
                catSec.scrollIntoView({ behavior: 'smooth' });
                setTimeout(() => searchInput.focus(), 350);
            }
        });
    }

    // 4. Cinematic Scroll Reveal Engine (Awwwards-Tier Fluid Choreography)
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                
                // Trigger animated metric counters if present
                const metricEls = entry.target.querySelectorAll ? entry.target.querySelectorAll('.metric-val[data-target]') : [];
                metricEls.forEach(el => animateCounter(el));

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px'
    });

    function initScrollReveals() {
        document.querySelectorAll('.kinetix-reveal:not(.is-revealed)').forEach(el => {
            revealObserver.observe(el);
        });
    }
    initScrollReveals();

    // 5. High-Impact Metric Counter Interpolation
    function animateCounter(el) {
        if (el._hasAnimated) return;
        el._hasAnimated = true;

        const target = parseFloat(el.getAttribute('data-target') || '0');
        if (!target) return;

        const unit = el.querySelector('.unit') ? el.querySelector('.unit').outerHTML : '';
        const duration = 1400; // ms
        const startTime = performance.now();

        function update(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out quart
            const easeProgress = 1 - Math.pow(1 - progress, 4);
            const current = Math.round(target * easeProgress);

            el.innerHTML = `${current}${unit}`;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.innerHTML = `${target}${unit}`;
            }
        }
        requestAnimationFrame(update);
    }

    // 6. Interactive Lookbook Telemetry HUD Pins
    const hotspotPins = document.querySelectorAll('.hotspot-pin');
    const kitRows = document.querySelectorAll('.kit-item-row[data-pin-target]');

    if (hotspotPins.length) {
        hotspotPins.forEach(pin => {
            pin.addEventListener('click', (e) => {
                // If clicked inside HUD card or add-to-cart button, don't close
                if (e.target.closest('.hud-buy-btn')) return;

                const isActive = pin.classList.contains('active');
                hotspotPins.forEach(p => p.classList.remove('active'));
                if (!isActive) {
                    pin.classList.add('active');
                }
            });
        });

        // Close HUD when clicking outside the athlete stage
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.stage-athlete-card') && !e.target.closest('.kit-item-row')) {
                hotspotPins.forEach(p => p.classList.remove('active'));
            }
        });

        // Hover or click on kit list items highlights matching pin
        if (kitRows.length) {
            kitRows.forEach(row => {
                const targetIdx = row.getAttribute('data-pin-target');
                const matchingPin = document.querySelector(`.hotspot-pin.pin-${targetIdx}`);

                if (matchingPin) {
                    row.addEventListener('mouseenter', () => {
                        hotspotPins.forEach(p => p.classList.remove('active'));
                        matchingPin.classList.add('active');
                    });
                }
            });
        }
    }

    // 7. Dynamic Hardware Spotlight Tracking (Cards Cursor Glare)
    if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        document.querySelectorAll('.kinetix-card-shell').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--card-mouse-x', `${x}px`);
                card.style.setProperty('--card-mouse-y', `${y}px`);
            });
        });
    }

    // 8. Live Catalog AJAX Filters & Search
    const productGrid = document.getElementById('kinetix-products-grid');
    const catTabs = document.querySelectorAll('.catalog-cat-tabs .tab-btn');
    const sortSelect = document.getElementById('kinetix-sort-select');
    const searchClear = document.getElementById('kinetix-search-clear');
    const totalCountEl = document.getElementById('kinetix-total-count');

    let activeCategory = 'all';
    let activeSort = 'featured';
    let searchQuery = '';
    let debounceTimer = null;

    function fetchCatalog() {
        if (!productGrid) return;

        // Static Client-Side Fallback for GitHub Pages / HTML Showcases
        if (typeof kinetixConfig === 'undefined' || !kinetixConfig.ajaxUrl) {
            const cards = productGrid.querySelectorAll('.kinetix-product-card, .kinetix-card-shell');
            let visibleCount = 0;
            const q = searchQuery.toLowerCase();

            cards.forEach(card => {
                const cat = (card.getAttribute('data-category') || '').toLowerCase();
                const title = (card.querySelector('.product-title, .kinetix-card-title')?.textContent || '').toLowerCase();
                const sub = (card.querySelector('.product-subtitle, .kinetix-card-subtitle')?.textContent || '').toLowerCase();

                let matchesCat = (activeCategory === 'all');
                if (!matchesCat) {
                    if (activeCategory === 'mens-training' || activeCategory === 'men') {
                        matchesCat = cat.includes('men') && !cat.includes('women');
                    } else if (activeCategory === 'womens-activewear' || activeCategory === 'women') {
                        matchesCat = cat.includes('women');
                    } else if (activeCategory === 'gym-gear-equipment' || activeCategory === 'gear') {
                        matchesCat = cat.includes('gear') || cat.includes('belt');
                    } else if (activeCategory === 'recovery-supplements' || activeCategory === 'recovery') {
                        matchesCat = cat.includes('recovery');
                    } else {
                        matchesCat = cat.includes(activeCategory.toLowerCase());
                    }
                }

                const matchesSearch = !q || title.includes(q) || sub.includes(q) || cat.includes(q);

                if (matchesCat && matchesSearch) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (totalCountEl) {
                totalCountEl.textContent = visibleCount;
            }
            return;
        }

        productGrid.style.opacity = '0.35';
        productGrid.style.filter = 'blur(4px)';
        productGrid.style.pointerEvents = 'none';

        const data = new FormData();
        data.append('action', 'kinetix_filter_products');
        data.append('nonce', kinetixConfig.nonce);
        data.append('category', activeCategory);
        data.append('sort', activeSort);
        data.append('search', searchQuery);

        fetch(kinetixConfig.ajaxUrl, {
            method: 'POST',
            body: data,
        })
        .then(res => res.json())
        .then(res => {
            productGrid.style.opacity = '1';
            productGrid.style.filter = 'none';
            productGrid.style.pointerEvents = 'auto';

            if (res.success && res.data) {
                productGrid.innerHTML = res.data.html;
                if (totalCountEl) totalCountEl.textContent = res.data.count;

                // Re-init reveals & triggers on fresh cards
                initScrollReveals();
                if (window.kinetixCart) {
                    window.kinetixCart.bindTriggers();
                }
            }
        })
        .catch(err => {
            console.error('Kinetix catalog error:', err);
            productGrid.style.opacity = '1';
            productGrid.style.filter = 'none';
            productGrid.style.pointerEvents = 'auto';
        });
    }

    catTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            catTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            activeCategory = tab.getAttribute('data-cat');
            fetchCatalog();
        });
    });

    if (sortSelect) {
        sortSelect.addEventListener('change', (e) => {
            activeSort = e.target.value;
            fetchCatalog();
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value.trim();
            if (searchClear) searchClear.style.display = searchQuery ? 'block' : 'none';

            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                fetchCatalog();
            }, 280);
        });
    }

    if (searchClear && searchInput) {
        searchClear.addEventListener('click', () => {
            searchInput.value = '';
            searchQuery = '';
            searchClear.style.display = 'none';
            fetchCatalog();
        });
    }

    // 9. Single Product Page: Interactive Swatch & Size Selectors
    const swatchBtns = document.querySelectorAll('.pdp-swatch-btn');
    const colorLabel = document.getElementById('selected-color-name');
    const sizeBtns = document.querySelectorAll('.pdp-size-btn');
    const pdpAddBtn = document.getElementById('pdp-add-btn');

    if (swatchBtns.length && colorLabel) {
        swatchBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                swatchBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const col = btn.getAttribute('data-color-name');
                colorLabel.textContent = col;
                if (pdpAddBtn) pdpAddBtn.setAttribute('data-color', col);
            });
        });
    }

    if (sizeBtns.length) {
        sizeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                sizeBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const sz = btn.getAttribute('data-size');
                if (pdpAddBtn) pdpAddBtn.setAttribute('data-size', sz);
            });
        });
    }

    // 10. Hero Featured Product Card Size Selector
    const heroSizeChips = document.querySelectorAll('.hero-size-chip');
    const heroAddBtn = document.querySelector('.hero-quick-add-btn');
    if (heroSizeChips.length && heroAddBtn) {
        heroSizeChips.forEach(chip => {
            chip.addEventListener('click', () => {
                heroSizeChips.forEach(c => c.classList.remove('active'));
                chip.classList.add('active');
                const selectedSize = chip.getAttribute('data-size');
                heroAddBtn.setAttribute('data-size', selectedSize);
            });
        });
    }
});
