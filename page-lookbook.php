<?php
/**
 * Template Name: Athlete Lookbook & Campaigns
 * Template Post Type: page
 *
 * Dedicated Editorial Lookbook, Athlete Field Telemetry & Interactive Kit Breakdowns
 * Conforming to ISO 9241 Ergonomic Interface Principles.
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-lookbook-page">
    <div class="kinetix-container">
        <!-- Page Breadcrumb -->
        <nav class="kinetix-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'kinetix-fitness' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'kinetix-fitness' ); ?></a>
            <span class="sep">/</span>
            <span class="current"><?php esc_html_e( 'Lookbook & Campaigns', 'kinetix-fitness' ); ?></span>
        </nav>

        <!-- Editorial Hero Header -->
        <header class="kinetix-page-header lookbook-header kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'SEASON 04', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'WINTER DROP', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="page-title"><?php esc_html_e( 'Athlete Lookbook & Seasonal Drops', 'kinetix-fitness' ); ?></h1>
            <p class="page-lead">
                <?php esc_html_e( 'Field-tested apparel and gear for heavy barbell training, track conditioning, and recovery. Explore seasonal drop kits and complete setups.', 'kinetix-fitness' ); ?>
            </p>

            <!-- Campaign Series Switcher -->
            <div class="lookbook-series-nav">
                <button type="button" class="series-pill active" data-series="s4">
                    <span class="series-code">DROP 04</span>
                    <span class="series-name">Winter Competition</span>
                </button>
                <button type="button" class="series-pill" data-series="s3">
                    <span class="series-code">DROP 03</span>
                    <span class="series-name">Velocity Hyper-Track</span>
                </button>
                <button type="button" class="series-pill" data-series="s2">
                    <span class="series-code">DROP 02</span>
                    <span class="series-name">Recovery & Sanctuary</span>
                </button>
            </div>
        </header>

        <!-- LOOK 01: The Heavy Barbell Protocol -->
        <section class="kinetix-look-row kinetix-reveal" id="look-01">
            <div class="look-card doppelrand-card">
                <div class="lookbook-inner">
                    <!-- Text and Kit Inventory -->
                    <div class="look-info-col">
                        <div class="look-tag-bar">
                            <span class="look-index">LOOK 01 / 03</span>
                            <span class="look-category">STRENGTH & POWERLIFTING</span>
                        </div>
                        <h2 class="lookbook-heading"><?php esc_html_e( 'The Heavy Barbell Protocol', 'kinetix-fitness' ); ?></h2>
                        <p class="lookbook-sub">
                            <?php esc_html_e( 'Engineered for IPF competition squats, deadlifts, and high-tensile power preparation. Designed to maximize intra-abdominal pressure while maintaining uninhibited thoracic extension.', 'kinetix-fitness' ); ?>
                        </p>

                        <!-- Kit Breakdown Table -->
                        <div class="lookbook-kit-items">
                            <div class="kit-item-row" data-product="velocity-seamless-compression-tee" data-title="VELOCITY Compression Tee" data-price="68.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">VELOCITY Seamless Compression Tee</span>
                                    <span class="kit-tag">Grade-2 Compression</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$68.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/velocity-tee" data-variant="velocity-tee-black-m" data-title="VELOCITY Compression Tee" data-price="68.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="titan-competition-10mm-lever-belt" data-title="TITAN 10mm Lever Belt" data-price="129.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">TITAN Competition 10mm Lever Belt</span>
                                    <span class="kit-tag">IPF Spec Steerhide</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$129.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/titan-belt" data-variant="titan-belt-black-m" data-title="TITAN 10mm Lever Belt" data-price="129.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="vanguard-2in1-performance-shorts" data-title="VANGUARD Performance Shorts" data-price="58.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">VANGUARD 2-in-1 Performance Shorts</span>
                                    <span class="kit-tag">5-Inch Outseam</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$58.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/vanguard-shorts" data-variant="vanguard-shorts-black-m" data-title="VANGUARD Performance Shorts" data-price="58.00">
                                        ADD
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kit Bundle Summary Action -->
                        <div class="look-bundle-action">
                            <div class="bundle-pricing">
                                <span class="bundle-lbl">Full Look Bundle:</span>
                                <span class="bundle-total">$255.00</span>
                                <span class="bundle-status">In Stock &middot; Ships Within 24h</span>
                            </div>
                            <button type="button" class="kinetix-btn-primary btn-look-bundle" onclick="
                                if (window.kinetixCart) {
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/velocity-tee',variantId:'velocity-tee-black-m',title:'VELOCITY Compression Tee',price:68.00,icon:'shirt'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/titan-belt',variantId:'titan-belt-black-m',title:'TITAN 10mm Lever Belt',price:129.00,icon:'gear'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/vanguard-shorts',variantId:'vanguard-shorts-black-m',title:'VANGUARD Performance Shorts',price:58.00,icon:'short'});
                                    window.kinetixCart.open();
                                }
                            ">
                                <span>Add Complete Look to Bag</span>
                                <span class="btn-arrow">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- CAD Interactive Stage -->
                    <div class="look-stage-col">
                        <div class="stage-athlete-card" style="--stage-photo: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-athlete.jpg' ); ?>');">
                            <div class="stage-photo-scrim"></div>
                            <div class="stage-cad-grid"></div>
                            <div class="stage-telemetry-axis axis-y">SYS_Y: 42.109 // ELEV: 1840M</div>
                            <div class="stage-telemetry-axis axis-x">SYS_X: 77.034 // BARBELL_STRESS: MAX</div>

                            <!-- Athlete Silhouette SVG -->
                            <div class="athlete-graphic">
                                <svg width="260" height="380" viewBox="0 0 240 360" fill="none" stroke="currentColor" stroke-width="1.2">
                                    <circle cx="120" cy="45" r="22" stroke="currentColor" stroke-width="1.5" />
                                    <path d="M110 67 L120 72 L130 67 M120 72 L120 90" stroke="currentColor" stroke-width="1.5"/>
                                    <!-- Traps and Delts -->
                                    <path d="M85 92 C95 80, 110 75, 120 75 C130 75, 145 80, 155 92 L185 130 C190 138, 185 146, 175 144 L160 140 L165 200 L158 200 L152 145 L120 150 L88 145 L82 200 L75 200 L80 140 L65 144 C55 146, 50 138, 55 130 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.04)" />
                                    <!-- Core and Belt -->
                                    <rect x="85" y="148" width="70" height="20" rx="3" fill="rgba(56, 189, 248, 0.15)" stroke="var(--accent-primary)" stroke-width="1.5" />
                                    <circle cx="120" cy="158" r="4" fill="var(--accent-primary)" />
                                    <!-- Pelvis & Legs -->
                                    <path d="M85 170 L75 250 L65 330 L85 335 L105 255 L115 190 L125 190 L135 255 L155 335 L175 330 L165 250 L155 170 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.04)" />
                                    <!-- Biomechanical Muscle Wireframes -->
                                    <path d="M98 100 Q120 115 142 100" stroke="rgba(56,189,248,0.4)" stroke-dasharray="3 3"/>
                                    <path d="M92 125 Q120 135 148 125" stroke="rgba(56,189,248,0.4)" stroke-dasharray="3 3"/>
                                    <path d="M80 230 Q92 270 78 310" stroke="rgba(56,189,248,0.4)" stroke-dasharray="3 3"/>
                                    <path d="M160 230 Q148 270 162 310" stroke="rgba(56,189,248,0.4)" stroke-dasharray="3 3"/>
                                </svg>
                            </div>

                            <!-- Interactive Radar Pins -->
                            <div class="hotspot-pin pin-1" data-target="velocity-seamless-compression-tee" tabindex="0" role="button" aria-label="Inspect VELOCITY Compression Tee">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">01</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">UPPER TORSO &middot; GRADE 2</span>
                                    <h4 class="hud-title">VELOCITY Compression Tee</h4>
                                    <p class="hud-desc">Targeted thoracic and deltoid stability. Moisture transport rate under 1.2s.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$68.00</span>
                                        <span class="hud-avail">In Stock</span>
                                    </div>
                                </div>
                            </div>

                            <div class="hotspot-pin pin-2" data-target="titan-competition-10mm-lever-belt" tabindex="0" role="button" aria-label="Inspect TITAN 10mm Lever Belt">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">02</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">LUMBAR &middot; IPF SPEC</span>
                                    <h4 class="hud-title">TITAN 10mm Lever Belt</h4>
                                    <p class="hud-desc">10mm genuine steerhide with quick-flick magnesium alloy buckle.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$129.00</span>
                                        <span class="hud-avail">Pro Certified</span>
                                    </div>
                                </div>
                            </div>

                            <div class="hotspot-pin pin-3" data-target="vanguard-2in1-performance-shorts" tabindex="0" role="button" aria-label="Inspect VANGUARD Performance Shorts">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">03</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">LOWER BODY &middot; MOBILITY</span>
                                    <h4 class="hud-title">VANGUARD 2-in-1 Shorts</h4>
                                    <p class="hud-desc">Perforated 5-inch shell with phone-sleeve compression liner.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$58.00</span>
                                        <span class="hud-avail">Best Seller</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOOK 02: Sub-Zero Conditioning & Cold Morning Track -->
        <section class="kinetix-look-row kinetix-reveal" id="look-02">
            <div class="look-card doppelrand-card">
                <div class="lookbook-inner">
                    <!-- Text and Kit Inventory -->
                    <div class="look-info-col">
                        <div class="look-tag-bar">
                            <span class="look-index">LOOK 02 / 03</span>
                            <span class="look-category">OUTDOOR TRACK & HIGH-OUTPUT CONDITIONING</span>
                        </div>
                        <h2 class="lookbook-heading"><?php esc_html_e( 'Sub-Zero Interval Conditioning', 'kinetix-fitness' ); ?></h2>
                        <p class="lookbook-sub">
                            <?php esc_html_e( 'Constructed for sub-zero morning stadium sprints, assault bike intervals, and rapid thermal insulation. Traps core body warmth while letting evaporative sweat vapor escape immediately.', 'kinetix-fitness' ); ?>
                        </p>

                        <!-- Kit Breakdown Table -->
                        <div class="lookbook-kit-items">
                            <div class="kit-item-row" data-product="apex-heavyweight-training-hoodie" data-title="APEX Heavyweight Hoodie" data-price="94.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">APEX Heavyweight Training Hoodie</span>
                                    <span class="kit-tag">480 GSM French Terry</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$94.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/apex-hoodie" data-variant="apex-hoodie-black-l" data-title="APEX Heavyweight Hoodie" data-price="94.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="vanguard-2in1-performance-shorts" data-title="VANGUARD Performance Shorts" data-price="58.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">VANGUARD 2-in-1 Performance Shorts</span>
                                    <span class="kit-tag">Built-in Phone Liner</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$58.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/vanguard-shorts" data-variant="vanguard-shorts-black-m" data-title="VANGUARD Performance Shorts" data-price="58.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="hydrate-x-steel-athlete-shaker" data-title="HYDRATE-X Steel Shaker" data-price="34.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">HYDRATE-X Stainless Steel Shaker (28oz)</span>
                                    <span class="kit-tag">Double-Wall Vacuum</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$34.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/hydrate-x-shaker" data-variant="hydrate-x-obsidian" data-title="HYDRATE-X Steel Shaker" data-price="34.00">
                                        ADD
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kit Bundle Summary Action -->
                        <div class="look-bundle-action">
                            <div class="bundle-pricing">
                                <span class="bundle-lbl">Full Look Bundle:</span>
                                <span class="bundle-total">$186.00</span>
                                <span class="bundle-status">In Stock &middot; Ships Within 24h</span>
                            </div>
                            <button type="button" class="kinetix-btn-primary btn-look-bundle" onclick="
                                if (window.kinetixCart) {
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/apex-hoodie',variantId:'apex-hoodie-black-l',title:'APEX Heavyweight Hoodie',price:94.00,icon:'hoodie'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/vanguard-shorts',variantId:'vanguard-shorts-black-m',title:'VANGUARD Performance Shorts',price:58.00,icon:'short'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/hydrate-x-shaker',variantId:'hydrate-x-obsidian',title:'HYDRATE-X Steel Shaker',price:34.00,icon:'recovery'});
                                    window.kinetixCart.open();
                                }
                            ">
                                <span>Add Complete Look to Bag</span>
                                <span class="btn-arrow">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Stage Graphic Col -->
                    <div class="look-stage-col">
                        <div class="stage-athlete-card" style="--stage-photo: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-apex-hoodie.jpg' ); ?>');">
                            <div class="stage-photo-scrim"></div>
                            <div class="stage-cad-grid"></div>
                            <div class="stage-telemetry-axis axis-y">SYS_Y: 12.89 // AMBIENT: -4&deg;C</div>
                            <div class="stage-telemetry-axis axis-x">SYS_X: 99.41 // CORE_RETENTION: 98.4%</div>

                            <div class="athlete-graphic">
                                <svg width="260" height="380" viewBox="0 0 240 360" fill="none" stroke="currentColor" stroke-width="1.2">
                                    <!-- Hooded Athlete Outline -->
                                    <path d="M100 40 C100 20, 140 20, 140 40 C148 45, 155 60, 150 85 C145 105, 135 110, 120 110 C105 110, 95 105, 90 85 C85 60, 92 45, 100 40 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.08)" stroke-width="1.5"/>
                                    <!-- Heavyweight Oversized Hoodie Torso -->
                                    <path d="M70 100 L40 160 L58 175 L80 130 L80 230 L160 230 L160 130 L182 175 L200 160 L170 100 C155 85, 85 85, 70 100 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.05)" stroke-width="1.5"/>
                                    <!-- Front Kangaroo Pocket Welt -->
                                    <path d="M92 180 L148 180 L140 215 L100 215 Z" stroke="rgba(56,189,248,0.5)" stroke-dasharray="2 2"/>
                                    <!-- Legs & Running Tights -->
                                    <path d="M85 230 L72 340 L92 342 L112 250 L120 235 L128 250 L148 342 L168 340 L155 230 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.04)" />
                                    <!-- Thermal flow arrows -->
                                    <path d="M120 125 L120 160" stroke="var(--accent-primary)" stroke-width="1.5"/>
                                    <polyline points="115 150 120 160 125 150" stroke="var(--accent-primary)" stroke-width="1.5"/>
                                </svg>
                            </div>

                            <!-- Pins for Look 2 -->
                            <div class="hotspot-pin pin-1" style="top: 28%; left: 50%;" tabindex="0" role="button" aria-label="Inspect APEX Hoodie">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">01</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">THERMAL &middot; 480 GSM</span>
                                    <h4 class="hud-title">APEX Heavyweight Hoodie</h4>
                                    <p class="hud-desc">Organic French Terry with double-lined windproof hood.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$94.00</span>
                                        <span class="hud-avail">In Stock</span>
                                    </div>
                                </div>
                            </div>

                            <div class="hotspot-pin pin-2" style="top: 65%; left: 45%;" tabindex="0" role="button" aria-label="Inspect VANGUARD Shorts">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">02</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">MOBILITY &middot; 2-IN-1</span>
                                    <h4 class="hud-title">VANGUARD 2-in-1 Shorts</h4>
                                    <p class="hud-desc">Zero thigh friction with bounce-free phone pocket compression liner.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$58.00</span>
                                        <span class="hud-avail">Popular</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOOK 03: High-Tension Hypertrophy (Women's Pro Series) -->
        <section class="kinetix-look-row kinetix-reveal" id="look-03">
            <div class="look-card doppelrand-card">
                <div class="lookbook-inner">
                    <!-- Text and Kit Inventory -->
                    <div class="look-info-col">
                        <div class="look-tag-bar">
                            <span class="look-index">LOOK 03 / 03</span>
                            <span class="look-category">WOMEN'S ACTIVE & RECOVERY</span>
                        </div>
                        <h2 class="lookbook-heading"><?php esc_html_e( 'High-Tension Hypertrophy & Recovery', 'kinetix-fitness' ); ?></h2>
                        <p class="lookbook-sub">
                            <?php esc_html_e( 'Anatomical micro-ribbed compression knit engineered for deep barbell squats, hip thrusts, and high-intensity plyometrics, combined with percussion therapy for accelerated fascial restoration.', 'kinetix-fitness' ); ?>
                        </p>

                        <!-- Kit Breakdown Table -->
                        <div class="lookbook-kit-items">
                            <div class="kit-item-row" data-product="aura-high-rise-ribbed-leggings" data-title="AURA High-Rise Leggings" data-price="78.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">AURA High-Rise Ribbed Leggings</span>
                                    <span class="kit-tag">100% Squat-Proof</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$78.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/aura-leggings" data-variant="aura-leggings-black-s" data-title="AURA High-Rise Leggings" data-price="78.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="velocity-seamless-compression-tee" data-title="VELOCITY Compression Tee" data-price="68.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">VELOCITY Seamless Compression Top</span>
                                    <span class="kit-tag">HydroShield Knit</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$68.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/velocity-tee" data-variant="velocity-tee-black-m" data-title="VELOCITY Compression Tee" data-price="68.00">
                                        ADD
                                    </button>
                                </div>
                            </div>

                            <div class="kit-item-row" data-product="kinetic-percussion-massage-gun-pro" data-title="KINETIC Massage Gun Pro" data-price="169.00">
                                <div class="kit-item-left">
                                    <span class="kit-dot"></span>
                                    <span class="kit-name">KINETIC Percussion Massage Gun Pro</span>
                                    <span class="kit-tag">16mm Deep Tissue</span>
                                </div>
                                <div class="kit-item-right">
                                    <span class="kit-price">$169.00</span>
                                    <button type="button" class="kit-quick-add" data-id="gid://shopify/Product/kinetic-gun" data-variant="kinetic-gun-black" data-title="KINETIC Massage Gun Pro" data-price="169.00">
                                        ADD
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kit Bundle Summary Action -->
                        <div class="look-bundle-action">
                            <div class="bundle-pricing">
                                <span class="bundle-lbl">Full Look Bundle:</span>
                                <span class="bundle-total">$315.00</span>
                                <span class="bundle-status">In Stock &middot; Ships Within 24h</span>
                            </div>
                            <button type="button" class="kinetix-btn-primary btn-look-bundle" onclick="
                                if (window.kinetixCart) {
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/aura-leggings',variantId:'aura-leggings-black-s',title:'AURA High-Rise Leggings',price:78.00,icon:'short'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/velocity-tee',variantId:'velocity-tee-black-m',title:'VELOCITY Compression Tee',price:68.00,icon:'shirt'});
                                    window.kinetixCart.addItem({id:'gid://shopify/Product/kinetic-gun',variantId:'kinetic-gun-black',title:'KINETIC Massage Gun Pro',price:169.00,icon:'gear'});
                                    window.kinetixCart.open();
                                }
                            ">
                                <span>Add Complete Look to Bag</span>
                                <span class="btn-arrow">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Stage Graphic Col -->
                    <div class="look-stage-col">
                        <div class="stage-athlete-card" style="--stage-photo: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-aura-leggings.jpg' ); ?>');">
                            <div class="stage-photo-scrim"></div>
                            <div class="stage-cad-grid"></div>
                            <div class="stage-telemetry-axis axis-y">SYS_Y: 64.20 // TORQUE: 180 NM</div>
                            <div class="stage-telemetry-axis axis-x">SYS_X: 18.05 // SQUAT_DEPTH: 104%</div>

                            <div class="athlete-graphic">
                                <svg width="260" height="380" viewBox="0 0 240 360" fill="none" stroke="currentColor" stroke-width="1.2">
                                    <!-- Athletic Female Posture Line -->
                                    <circle cx="120" cy="45" r="20" stroke="currentColor" stroke-width="1.5" />
                                    <!-- Athletic Torso & Crop Silhouette -->
                                    <path d="M100 80 L140 80 L135 140 L105 140 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.05)" stroke-width="1.5"/>
                                    <!-- High-Rise Ribbed Waistband Contour -->
                                    <rect x="96" y="142" width="48" height="18" rx="2" fill="rgba(56, 189, 248, 0.2)" stroke="var(--accent-primary)" stroke-width="1.5" />
                                    <!-- Compression Leggings Silhouette -->
                                    <path d="M96 160 L80 250 L68 340 L88 340 L110 250 L120 180 L130 250 L152 340 L172 340 L160 250 L144 160 Z" stroke="currentColor" fill="rgba(56, 189, 248, 0.06)" />
                                    <!-- Biomechanical Muscle Alignment Lines -->
                                    <path d="M90 200 C80 230, 85 280, 80 320" stroke="rgba(56, 189, 248, 0.4)" stroke-dasharray="3 3"/>
                                    <path d="M150 200 C160 230, 155 280, 160 320" stroke="rgba(56, 189, 248, 0.4)" stroke-dasharray="3 3"/>
                                </svg>
                            </div>

                            <!-- Pins for Look 3 -->
                            <div class="hotspot-pin pin-1" style="top: 42%; left: 50%;" tabindex="0" role="button" aria-label="Inspect AURA Leggings">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">01</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">LOWER &middot; SQUAT-PROOF</span>
                                    <h4 class="hud-title">AURA High-Rise Leggings</h4>
                                    <p class="hud-desc">Micro-ribbed 4.5-inch waistband that stays anchored through heavy volume.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$78.00</span>
                                        <span class="hud-avail">In Stock</span>
                                    </div>
                                </div>
                            </div>

                            <div class="hotspot-pin pin-2" style="top: 25%; left: 45%;" tabindex="0" role="button" aria-label="Inspect VELOCITY Top">
                                <div class="pulse-ring"></div>
                                <div class="pin-dot">02</div>
                                <div class="hotspot-hud-card">
                                    <span class="hud-category">UPPER &middot; HYDROSHIELD</span>
                                    <h4 class="hud-title">VELOCITY Compression Top</h4>
                                    <p class="hud-desc">Engineered mesh ventilation with anti-odor silver ion threads.</p>
                                    <div class="hud-price-row">
                                        <span class="hud-price">$68.00</span>
                                        <span class="hud-avail">In Stock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Athlete Field Quotes & Verification Grid -->
        <section class="kinetix-athletes-section kinetix-reveal">
            <div class="section-title-wrap text-center">
                <span class="section-eyebrow"><?php esc_html_e( 'TELEMETRY & FIELD VERIFICATION', 'kinetix-fitness' ); ?></span>
                <h2 class="section-heading"><?php esc_html_e( 'Evaluated Under Championship Conditions', 'kinetix-fitness' ); ?></h2>
                <p class="section-subtitle">
                    <?php esc_html_e( 'Every seam, blend, and buckle undergoes hundreds of hours of raw athlete load testing before production authorization.', 'kinetix-fitness' ); ?>
                </p>
            </div>

            <div class="athletes-quote-grid">
                <!-- Quote 1 -->
                <div class="athlete-quote-card doppelrand-card">
                    <div class="quote-header">
                        <div class="athlete-avatar">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div class="athlete-meta">
                            <strong>Marcus Vance</strong>
                            <span>IPF -105kg Powerlifter &middot; 780kg Total</span>
                        </div>
                    </div>
                    <p class="quote-text">
                        "The TITAN 10mm lever belt has zero break-in pain. From day one on 320kg squat sets, the lateral intra-abdominal pressure is uniform without digging violently into the floating ribs."
                    </p>
                    <div class="quote-gear-tag">
                        <span>Equipped with TITAN 10mm Lever Belt</span>
                    </div>
                </div>

                <!-- Quote 2 -->
                <div class="athlete-quote-card doppelrand-card">
                    <div class="quote-header">
                        <div class="athlete-avatar">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div class="athlete-meta">
                            <strong>Elena Rostova</strong>
                            <span>CrossFit Games Team Athlete &middot; Gymnastics Specialist</span>
                        </div>
                    </div>
                    <p class="quote-text">
                        "The AURA leggings don't roll down or require mid-workout readjustments even during 100 unbroken wall balls and barbell thrusters. The 100% opacity holds under stadium lighting."
                    </p>
                    <div class="quote-gear-tag">
                        <span>Equipped with AURA Ribbed Leggings</span>
                    </div>
                </div>

                <!-- Quote 3 -->
                <div class="athlete-quote-card doppelrand-card">
                    <div class="quote-header">
                        <div class="athlete-avatar">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div class="athlete-meta">
                            <strong>David Sterling</strong>
                            <span>Track & Sprint Coach &middot; Masters 100m Record Holder</span>
                        </div>
                    </div>
                    <p class="quote-text">
                        "In sub-zero morning track conditions, the APEX 480 GSM hoodie traps warmth immediately after explosive sprints without getting soaked in perspiration. The ergonomics are exceptional."
                    </p>
                    <div class="quote-gear-tag">
                        <span>Equipped with APEX Heavyweight Hoodie</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom CTA to Full Catalog -->
        <section class="kinetix-lookbook-cta doppelrand-card kinetix-reveal">
            <div class="cta-inner">
                <span class="cta-label"><?php esc_html_e( 'FULL ATHLETIC CATALOG', 'kinetix-fitness' ); ?></span>
                <h3 class="cta-title"><?php esc_html_e( 'Ready to Equip Your Training Roster?', 'kinetix-fitness' ); ?></h3>
                <p class="cta-desc"><?php esc_html_e( 'Browse all high-performance compression wear, heavy lifting accessories, and cold-filtered sports nutrition with live stock availability.', 'kinetix-fitness' ); ?></p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="kinetix-btn-primary">
                        <span><?php esc_html_e( 'View Complete Gear Roster', 'kinetix-fitness' ); ?></span>
                        <span class="btn-arrow">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>" class="kinetix-btn-ghost">
                        <span><?php esc_html_e( 'Consult Fit Matrix', 'kinetix-fitness' ); ?></span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
get_footer();
