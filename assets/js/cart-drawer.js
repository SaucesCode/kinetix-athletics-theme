/**
 * Kinetix Athletics — Interactive Training Bag & Shopify Checkout Bridge
 * Handles real-time cart state, free shipping progress meter, and direct Shopify checkout redirection.
 */

class KinetixCartManager {
    constructor() {
        this.storageKey = 'kinetix_fitness_cart_v1';
        this.items = this.loadCart();
        this.initDOM();
        this.bindEvents();
        this.render();
    }

    initDOM() {
        this.drawer       = document.getElementById('kinetix-cart-drawer');
        this.backdrop     = document.getElementById('kinetix-drawer-backdrop');
        this.openBtn      = document.getElementById('kinetix-open-bag');
        this.closeBtn     = document.getElementById('kinetix-close-bag');
        this.container    = document.getElementById('kinetix-drawer-items-list');
        this.subtotalEl   = document.getElementById('kinetix-cart-subtotal');
        this.drawerCount  = document.getElementById('kinetix-drawer-count');
        this.navCount     = document.getElementById('kinetix-cart-count');
        this.checkoutBtn  = document.getElementById('kinetix-checkout-btn');
        this.meterMsg     = document.getElementById('kinetix-meter-msg');
        this.meterPct     = document.getElementById('kinetix-meter-pct');
        this.meterBar     = document.getElementById('kinetix-meter-bar');
        this.toast        = document.getElementById('kinetix-toast');
        this.toastMsg     = document.getElementById('kinetix-toast-msg');
    }

    loadCart() {
        try {
            const data = localStorage.getItem(this.storageKey);
            return data ? JSON.parse(data) : [];
        } catch (e) {
            return [];
        }
    }

    saveCart() {
        try {
            localStorage.setItem(this.storageKey, JSON.stringify(this.items));
        } catch (e) {}
    }

    bindEvents() {
        if (this.openBtn) this.openBtn.addEventListener('click', () => this.open());
        if (this.closeBtn) this.closeBtn.addEventListener('click', () => this.close());
        if (this.backdrop) this.backdrop.addEventListener('click', () => this.close());

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isOpen()) this.close();
        });

        if (this.checkoutBtn) {
            this.checkoutBtn.addEventListener('click', () => this.proceedToShopifyCheckout());
        }

        this.bindTriggers();
    }

    bindTriggers() {
        document.querySelectorAll('.kinetix-add-to-cart-trigger').forEach(btn => {
            if (btn._hasKinetixListener) return;
            btn._hasKinetixListener = true;

            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();

                const id = btn.getAttribute('data-product-id') || Date.now().toString();
                const title = btn.getAttribute('data-title') || 'Kinetix Athletic Gear';
                const price = parseFloat(btn.getAttribute('data-price') || '68');
                const size = btn.getAttribute('data-size') || 'M';
                const color = btn.getAttribute('data-color') || 'Onyx Black';
                const shopifyId = btn.getAttribute('data-shopify-id') || '';
                const variantId = btn.getAttribute('data-variant-id') || 'kinetix-default-variant';

                this.addItem({
                    id: `${id}-${size}-${color}`.toLowerCase(),
                    productId: id,
                    title,
                    price,
                    size,
                    color,
                    shopifyId,
                    variantId,
                    quantity: 1
                });

                this.showToast(`Added "${title}" (${size} / ${color}) to your bag`);
                this.open();
            });
        });
    }

    addItem(item) {
        const existing = this.items.find(i => i.id === item.id);
        if (existing) {
            existing.quantity += 1;
        } else {
            this.items.push(item);
        }
        this.saveCart();
        this.render();
    }

    removeItem(id) {
        this.items = this.items.filter(i => i.id !== id);
        this.saveCart();
        this.render();
    }

    updateQty(id, delta) {
        const item = this.items.find(i => i.id === id);
        if (!item) return;

        item.quantity += delta;
        if (item.quantity <= 0) {
            this.removeItem(id);
        } else {
            this.saveCart();
            this.render();
        }
    }

    getSubtotal() {
        return this.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    }

    getItemCount() {
        return this.items.reduce((sum, item) => sum + item.quantity, 0);
    }

    isOpen() {
        return this.drawer && this.drawer.classList.contains('open');
    }

    open() {
        if (!this.drawer) return;
        this.drawer.classList.add('open');
        this.drawer.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    close() {
        if (!this.drawer) return;
        this.drawer.classList.remove('open');
        this.drawer.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    showToast(msg) {
        if (!this.toast || !this.toastMsg) return;
        this.toastMsg.textContent = msg;
        this.toast.classList.add('show');
        clearTimeout(this.toastTimer);
        this.toastTimer = setTimeout(() => {
            this.toast.classList.remove('show');
        }, 2800);
    }

    render() {
        const count = this.getItemCount();
        const subtotal = this.getSubtotal();
        const symbol = (typeof kinetixConfig !== 'undefined') ? kinetixConfig.currencySymbol : '$';
        const threshold = (typeof kinetixConfig !== 'undefined') ? kinetixConfig.freeShippingThreshold : 75.00;

        // Counter Badges
        if (this.navCount) this.navCount.textContent = count;
        if (this.drawerCount) this.drawerCount.textContent = `(${count})`;

        // Subtotal
        if (this.subtotalEl) {
            this.subtotalEl.textContent = `${symbol}${subtotal.toFixed(2)}`;
        }

        // Free Shipping Progress Meter
        if (this.meterBar && this.meterMsg && this.meterPct) {
            const pct = Math.min(100, Math.round((subtotal / threshold) * 100));
            this.meterBar.style.width = `${pct}%`;
            this.meterPct.textContent = `${pct}%`;

            if (subtotal >= threshold) {
                this.meterMsg.innerHTML = `<strong>COMPLIMENTARY EXPRESS SHIPPING UNLOCKED</strong>`;
            } else {
                const diff = (threshold - subtotal).toFixed(2);
                this.meterMsg.innerHTML = `Add <strong>${symbol}${diff}</strong> more for <strong>Complimentary Express Shipping</strong>`;
            }
        }

        // Render Cart Items
        if (!this.container) return;

        if (this.items.length === 0) {
            this.container.innerHTML = `
                <div class="kinetix-bag-empty">
                    <span class="empty-bolt">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#0c1b33" stroke-width="1.75"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    </span>
                    <h4 class="empty-title">Your Training Bag is Empty</h4>
                    <p class="empty-sub">Explore our latest performance drops in compression apparel, lifting gear, and athlete recovery.</p>
                    <a href="${typeof kinetixConfig !== 'undefined' ? kinetixConfig.shopUrl : '#catalog'}" class="kinetix-btn-secondary" onclick="window.kinetixCart.close();">
                        Shop Performance Drops
                    </a>
                </div>
            `;
            if (this.checkoutBtn) {
                this.checkoutBtn.disabled = true;
                this.checkoutBtn.style.opacity = '0.5';
                this.checkoutBtn.style.cursor = 'not-allowed';
            }
            return;
        }

        if (this.checkoutBtn) {
            this.checkoutBtn.disabled = false;
            this.checkoutBtn.style.opacity = '1';
            this.checkoutBtn.style.cursor = 'pointer';
        }

        let html = '';
        this.items.forEach(item => {
            html += `
                <div class="kinetix-cart-item" data-id="${item.id}">
                    <div class="item-gear-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <div class="item-meta-col">
                        <h4 class="cart-item-title">${item.title}</h4>
                        <span class="cart-item-variants">Size: ${item.size} · Color: ${item.color}</span>
                        <span class="cart-item-price">${symbol}${(item.price * item.quantity).toFixed(2)}</span>
                        <div class="cart-qty-stepper">
                            <button type="button" class="stepper-btn" onclick="window.kinetixCart.updateQty('${item.id}', -1)" aria-label="Decrease quantity">-</button>
                            <span class="stepper-val">${item.quantity}</span>
                            <button type="button" class="stepper-btn" onclick="window.kinetixCart.updateQty('${item.id}', 1)" aria-label="Increase quantity">+</button>
                        </div>
                    </div>
                    <button type="button" class="cart-remove-btn" onclick="window.kinetixCart.removeItem('${item.id}')" aria-label="Remove item">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            `;
        });

        this.container.innerHTML = html;
    }

    proceedToShopifyCheckout() {
        if (this.items.length === 0) return;

        const shopDomain = (typeof kinetixConfig !== 'undefined' && kinetixConfig.shopifyDomain)
            ? kinetixConfig.shopifyDomain
            : 'kinetix-fitness.myshopify.com';

        // Construct direct Shopify checkout permalink:
        // https://{shop}.myshopify.com/cart/{variant_id}:{qty},{variant_id}:{qty}?channel=buy_button
        const cartPermalinks = this.items.map(item => {
            const vId = item.variantId || 'kinetix-default-variant';
            return `${encodeURIComponent(vId)}:${item.quantity}`;
        }).join(',');

        const checkoutUrl = `https://${shopDomain}/cart/${cartPermalinks}?channel=buy_button`;

        // Interactive visual feedback
        if (this.checkoutBtn) {
            const orig = this.checkoutBtn.innerHTML;
            this.checkoutBtn.innerHTML = `<span>Connecting to Shopify Checkout...</span>`;
            this.checkoutBtn.style.pointerEvents = 'none';

            setTimeout(() => {
                this.checkoutBtn.innerHTML = orig;
                this.checkoutBtn.style.pointerEvents = 'auto';

                if (shopDomain.includes('kinetix-fitness.myshopify.com')) {
                    alert(`[Kinetix Shopify Checkout Bridge]\n\nRedirecting to Shopify Storefront: ${shopDomain}\n\nCart Items:\n` +
                        this.items.map(i => `• ${i.title} (${i.size} / ${i.color}) x${i.quantity} = $${(i.price * i.quantity).toFixed(2)}`).join('\n') +
                        `\n\nSubtotal: $${this.getSubtotal().toFixed(2)}\n\nIn Appearance > Customize > Kinetix Brand Settings, configure your active Shopify Store Domain to link real customer checkouts directly!`);
                } else {
                    window.location.href = checkoutUrl;
                }
            }, 600);
        }
    }

    directBuy(item) {
        this.addItem({
            id: `${item.id}-${item.size}-${item.color}`.toLowerCase(),
            productId: item.id,
            title: item.title,
            price: item.price,
            size: item.size,
            color: item.color,
            variantId: item.variantId || 'kinetix-default-variant',
            quantity: item.quantity || 1
        });
        this.open();
    }
}

window.addEventListener('DOMContentLoaded', () => {
    window.kinetixCart = new KinetixCartManager();
});
