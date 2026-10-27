<?php
/**
 * Front Page Template: Kinetix Athletics
 * Authentic, grounded athletic apparel storefront without marketing clichés or emojis.
 * Conforms to ISO 9241 Ergonomic Interface Standards.
 *
 * @package Kinetix_Fitness
 */

get_header();

// Fetch products for catalog
$catalog_query = new WP_Query( array(
    'post_type'      => 'fitness_product',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'orderby'        => 'menu_order date',
    'order'          => 'DESC',
) );
?>

<!-- ATHLETIC HERO SECTION -->
<section class="kinetix-hero-section">
    <!-- Cinematic Athlete Hero Photo Background -->
    <div class="hero-bg-media" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-athlete.jpg' ); ?>');" aria-hidden="true">
        <div class="hero-scrim-overlay"></div>
    </div>

    <div class="kinetix-container">
        <div class="kinetix-hero-grid kinetix-reveal">
            <!-- Left Editorial Column: Masthead & Direct Actions -->
            <div class="hero-editorial-col">
                <div class="hero-editorial-eyebrow">
                    <span class="eyebrow-item"><?php esc_html_e( 'SERIES 04', 'kinetix-fitness' ); ?></span>
                    <span class="eyebrow-sep">/</span>
                    <span class="eyebrow-item"><?php esc_html_e( 'WINTER COLLECTION', 'kinetix-fitness' ); ?></span>
                    <span class="eyebrow-bullet" aria-hidden="true">&bull;</span>
                    <span class="eyebrow-status"><?php esc_html_e( 'IN STOCK', 'kinetix-fitness' ); ?></span>
                </div>

                <h1 class="hero-masthead-title">
                    <span>ENGINEERED FOR</span>
                    <span class="title-em">HEAVY DAYS.</span>
                </h1>

                <p class="hero-statement">
                    <?php esc_html_e( 'Grade-2 compression apparel, 10mm tournament lever belts, and 480 GSM French Terry warmups. Built for athletes who train with relentless intent.', 'kinetix-fitness' ); ?>
                </p>

                <!-- Direct Category Routing Pills -->
                <div class="hero-category-pills">
                    <a href="<?php echo esc_url( home_url( '/shop/?cat=mens-training' ) ); ?>" class="hero-pill-btn">
                        <span><?php esc_html_e( "Men's Apparel", 'kinetix-fitness' ); ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/shop/?cat=womens-activewear' ) ); ?>" class="hero-pill-btn">
                        <span><?php esc_html_e( "Women's Active", 'kinetix-fitness' ); ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/shop/?cat=gym-gear-equipment' ) ); ?>" class="hero-pill-btn">
                        <span><?php esc_html_e( 'Belts & Gear', 'kinetix-fitness' ); ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/lookbook/' ) ); ?>" class="hero-ghost-btn">
                        <span><?php esc_html_e( 'View Lookbook', 'kinetix-fitness' ); ?></span>
                    </a>
                </div>

                <!-- Minimalist Spec Anchors -->
                <div class="hero-spec-strip">
                    <div class="spec-anchor">
                        <strong>180 GSM</strong>
                        <span>Seamless Knit</span>
                    </div>
                    <div class="spec-sep">/</div>
                    <div class="spec-anchor">
                        <strong>10 MM</strong>
                        <span>IPF Steerhide</span>
                    </div>
                    <div class="spec-sep">/</div>
                    <div class="spec-anchor">
                        <strong>480 GSM</strong>
                        <span>French Terry</span>
                    </div>
                    <div class="spec-sep">/</div>
                    <div class="spec-anchor">
                        <strong>Shop Pay</strong>
                        <span>1-Click Checkout</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Featured Product Hero Card -->
            <div class="hero-product-col">
                <div class="hero-featured-card doppelrand-card">
                    <div class="card-inner-box">
                        <div class="featured-card-header">
                            <span class="featured-kicker"><?php esc_html_e( 'FLAGSHIP DROP', 'kinetix-fitness' ); ?></span>
                            <span class="featured-stock-status"><?php esc_html_e( 'Ships in 24h', 'kinetix-fitness' ); ?></span>
                        </div>

                        <div class="featured-card-media">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-velocity-tee.jpg' ); ?>" alt="VELOCITY Seamless Compression Tee" class="featured-photo" loading="eager">
                            <div class="featured-media-scrim"></div>
                        </div>

                        <div class="featured-card-info">
                            <div class="featured-title-line">
                                <h3>VELOCITY Compression Tee</h3>
                                <span class="featured-price">$68.00</span>
                            </div>
                            <p class="featured-tagline"><?php esc_html_e( 'Grade-2 thoracic compression &middot; Zero friction flatlock seams', 'kinetix-fitness' ); ?></p>

                            <!-- Size Selector Buttons -->
                            <div class="featured-size-row">
                                <span class="size-lbl"><?php esc_html_e( 'Size:', 'kinetix-fitness' ); ?></span>
                                <div class="size-chips-wrap">
                                    <button type="button" class="hero-size-chip active" data-size="S">S</button>
                                    <button type="button" class="hero-size-chip" data-size="M">M</button>
                                    <button type="button" class="hero-size-chip" data-size="L">L</button>
                                    <button type="button" class="hero-size-chip" data-size="XL">XL</button>
                                </div>
                            </div>

                            <!-- 1-Click Quick Add Button -->
                            <button 
                                type="button" 
                                class="hero-quick-add-btn kinetix-add-to-cart-trigger"
                                data-product-id="hero-featured-tee"
                                data-shopify-id="gid://shopify/Product/velocity-tee"
                                data-variant-id="velocity-tee-black-m"
                                data-title="VELOCITY Compression Tee"
                                data-size="M"
                                data-color="Onyx Black"
                                data-price="68.00"
                            >
                                <span><?php esc_html_e( 'Add to Bag &mdash; $68.00', 'kinetix-fitness' ); ?></span>
                                <span class="btn-arrow-circle">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CATEGORY BENTO GRID -->
<section class="kinetix-category-section">
    <div class="kinetix-container">
        <div class="kinetix-section-header kinetix-reveal">
            <span class="header-eyebrow">EQUIPMENT & APPAREL DIVISIONS</span>
            <h2 class="header-title">Performance Categories</h2>
        </div>

        <div class="category-bento-grid">
            <!-- Men's Training -->
            <div class="cat-bento-card bento-span-7 kinetix-reveal delay-100" style="--bento-bg: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-mens.jpg' ); ?>');">
                <div class="cat-card-inner">
                    <div class="cat-info">
                        <span class="cat-pill">DIVISION 01</span>
                        <h3 class="cat-heading">Men's Training & Base Layers</h3>
                        <p class="cat-desc">Seamless compression shirts, lined workout shorts with device sleeves, and heavyweight cotton French Terry warmups.</p>
                        <a href="<?php echo esc_url( home_url( '/shop/?cat=mens-training' ) ); ?>" class="cat-link">View Men's Apparel &rarr;</a>
                    </div>
                    <div class="cat-graphic-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.5a2 2 0 0 0 1.25 1.55L7 12v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-9l2.89-1.26a2 2 0 0 0 1.25-1.55l.58-3.5a2 2 0 0 0-1.34-2.23z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Women's Activewear -->
            <div class="cat-bento-card bento-span-5 kinetix-reveal delay-200" style="--bento-bg: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-womens.jpg' ); ?>');">
                <div class="cat-card-inner">
                    <div class="cat-info">
                        <span class="cat-pill">DIVISION 02</span>
                        <h3 class="cat-heading">Women's Activewear</h3>
                        <p class="cat-desc">High-rise ribbed leggings, compressive sports bras, and supportive training tights.</p>
                        <a href="<?php echo esc_url( home_url( '/shop/?cat=womens-activewear' ) ); ?>" class="cat-link">View Women's Active &rarr;</a>
                    </div>
                    <div class="cat-graphic-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16l-2 16H6L4 4zM10 4v8M14 4v8"/></svg>
                    </div>
                </div>
            </div>

            <!-- Gear & Lifting Belts -->
            <div class="cat-bento-card bento-span-5 kinetix-reveal delay-100" style="--bento-bg: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-gear.jpg' ); ?>');">
                <div class="cat-card-inner">
                    <div class="cat-info">
                        <span class="cat-pill">DIVISION 03</span>
                        <h3 class="cat-heading">Strength Equipment</h3>
                        <p class="cat-desc">IPF-specification 10mm lever belts, wrist wraps, and stainless steel shaker bottles.</p>
                        <a href="<?php echo esc_url( home_url( '/shop/?cat=gym-gear-equipment' ) ); ?>" class="cat-link">View Strength Gear &rarr;</a>
                    </div>
                    <div class="cat-graphic-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect width="20" height="8" x="2" y="8" rx="2"/><line x1="6" x2="6" y1="8" y2="16"/><line x1="18" x2="18" y1="8" y2="16"/></svg>
                    </div>
                </div>
            </div>

            <!-- Supplements & Recovery -->
            <div class="cat-bento-card bento-span-7 kinetix-reveal delay-200" style="--bento-bg: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-recovery.jpg' ); ?>');">
                <div class="cat-card-inner">
                    <div class="cat-info">
                        <span class="cat-pill">DIVISION 04</span>
                        <h3 class="cat-heading">Nutrition & Percussion Therapy</h3>
                        <p class="cat-desc">Micro-filtered whey protein isolate formulated with digestive enzymes and high-amplitude deep tissue percussion devices.</p>
                        <a href="<?php echo esc_url( home_url( '/shop/?cat=recovery-supplements' ) ); ?>" class="cat-link">View Recovery &rarr;</a>
                    </div>
                    <div class="cat-graphic-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 2v7.31M14 9.3V1.99M8.5 2h7M14 9.3a6.5 6.5 0 1 1-4 0"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCT CATALOG SECTION -->
<section id="catalog" class="kinetix-catalog-section">
    <div class="kinetix-container">
        <!-- Catalog Header -->
        <div class="catalog-top-bar kinetix-reveal">
            <div>
                <span class="header-eyebrow">COMPETITION ROSTER</span>
                <h2 class="header-title">The Complete Collection</h2>
            </div>
            <div class="catalog-counter-badge">
                <span id="kinetix-total-count"><?php echo esc_html( $catalog_query->found_posts ); ?></span> Items Available
            </div>
        </div>

        <!-- Filter Controls -->
        <div class="catalog-filter-controls kinetix-reveal delay-100">
            <!-- Category Tabs -->
            <div class="catalog-cat-tabs" role="tablist">
                <button type="button" class="tab-btn active" data-cat="all">All Products</button>
                <button type="button" class="tab-btn" data-cat="mens-training">Men's Apparel</button>
                <button type="button" class="tab-btn" data-cat="womens-activewear">Women's Active</button>
                <button type="button" class="tab-btn" data-cat="compression">Compression</button>
                <button type="button" class="tab-btn" data-cat="gym-gear-equipment">Strength Belts</button>
                <button type="button" class="tab-btn" data-cat="recovery-supplements">Recovery</button>
            </div>

            <!-- Search & Sort Row -->
            <div class="catalog-aux-row">
                <!-- Search Box -->
                <div class="kinetix-search-input-wrap">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    <input type="text" id="kinetix-search-input" placeholder="Search gear, fabrics, sizes..." aria-label="Search products">
                    <button type="button" id="kinetix-search-clear" style="display:none;" aria-label="Clear search">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>

                <!-- Sort Select -->
                <div class="kinetix-sort-wrap">
                    <select id="kinetix-sort-select" aria-label="Sort products">
                        <option value="featured">Sort: Featured</option>
                        <option value="newest">Sort: Newest First</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="kinetix-products-grid" id="kinetix-products-grid">
            <?php
            if ( $catalog_query->have_posts() ) {
                while ( $catalog_query->have_posts() ) {
                    $catalog_query->the_post();
                    get_template_part( 'parts/card-product' );
                }
                wp_reset_postdata();
            } else {
                ?>
                <p><?php esc_html_e( 'No products available at this time.', 'kinetix-fitness' ); ?></p>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- INTERACTIVE LOOKBOOK HOTSPOT SECTION -->
<section id="lookbook" class="kinetix-lookbook-section">
    <div class="kinetix-container">
        <div class="lookbook-banner kinetix-card-shell kinetix-reveal">
            <div class="kinetix-card-inner lookbook-inner">
                <div class="lookbook-content">
                    <span class="section-kicker">FIELD SPECIFICATION</span>
                    <h2 class="lookbook-heading">Shop The Competition Kit</h2>
                    <p class="lookbook-sub">Selected apparel and strength equipment calibrated for maximum power production and thermal dissipation during competition workouts.</p>
                    
                    <div class="lookbook-kit-items">
                        <div class="kit-item-row" data-pin-target="1">
                            <span class="kit-dot"></span>
                            <span>VELOCITY Compression Top &mdash; <strong>$52.00</strong></span>
                            <button type="button" class="kit-quick-add kinetix-add-to-cart-trigger" data-product-id="lookbook-tee" data-title="VELOCITY Compression Top" data-price="52.00" data-size="L" data-color="Onyx Black">Add to Bag</button>
                        </div>
                        <div class="kit-item-row" data-pin-target="2">
                            <span class="kit-dot"></span>
                            <span>TITAN 10mm Lever Belt &mdash; <strong>$129.00</strong></span>
                            <button type="button" class="kit-quick-add kinetix-add-to-cart-trigger" data-product-id="lookbook-belt" data-title="TITAN 10mm Lever Belt" data-price="129.00" data-size="M" data-color="Stealth Black">Add to Bag</button>
                        </div>
                        <div class="kit-item-row" data-pin-target="3">
                            <span class="kit-dot"></span>
                            <span>VANGUARD 2-in-1 Shorts &mdash; <strong>$58.00</strong></span>
                            <button type="button" class="kit-quick-add kinetix-add-to-cart-trigger" data-product-id="lookbook-shorts" data-title="VANGUARD 2-in-1 Shorts" data-price="58.00" data-size="M" data-color="Onyx Black">Add to Bag</button>
                        </div>
                    </div>
                </div>

                <div class="lookbook-visual-stage">
                    <div class="stage-athlete-card">
                        <!-- Technical Precision CAD Wireframe & Axis Grid -->
                        <div class="stage-cad-grid"></div>
                        <div class="stage-telemetry-axis axis-y"><span>Y-AXIS 1,840MM</span></div>
                        <div class="stage-telemetry-axis axis-x"><span>X-AXIS CALIB // BIOMECHANICAL SUIT 04</span></div>

                        <!-- High-End Athlete Technical Anatomy Vector -->
                        <div class="athlete-graphic">
                            <svg width="220" height="280" viewBox="0 0 200 260" fill="none" stroke="currentColor">
                                <line x1="20" y1="50" x2="180" y2="50" stroke="rgba(56, 189, 248, 0.2)" stroke-dasharray="2 3"/>
                                <line x1="20" y1="130" x2="180" y2="130" stroke="rgba(56, 189, 248, 0.2)" stroke-dasharray="2 3"/>
                                <line x1="20" y1="190" x2="180" y2="190" stroke="rgba(56, 189, 248, 0.2)" stroke-dasharray="2 3"/>
                                <path d="M100 22 C108 22 114 28 114 36 C114 44 108 50 100 50 C92 50 86 44 86 36 C86 28 92 22 100 22 Z" stroke="currentColor" stroke-width="1.75"/>
                                <path d="M92 48 L80 58 L54 68 L42 108 L62 114 L72 82 L76 132 L66 186 L74 245 L88 245 L94 155 L100 135 L106 155 L112 245 L126 245 L134 186 L124 132 L128 82 L138 114 L158 108 L146 68 L120 58 L108 48 Z" stroke="currentColor" stroke-width="1.75" stroke-linejoin="round"/>
                                <path d="M72 82 C86 92 114 92 128 82" stroke="rgba(56, 189, 248, 0.6)" stroke-width="1.5"/>
                                <path d="M100 86 L100 132" stroke="rgba(56, 189, 248, 0.6)" stroke-width="1.5" stroke-dasharray="2 2"/>
                                <path d="M76 128 C92 134 108 134 124 128" stroke="rgba(56, 189, 248, 0.6)" stroke-width="1.5"/>
                                <path d="M80 155 L82 210 M120 155 L118 210" stroke="rgba(56, 189, 248, 0.4)" stroke-width="1.25" stroke-dasharray="3 3"/>
                            </svg>
                        </div>

                        <!-- Hotspot Pin 01: Top -->
                        <div class="hotspot-pin pin-1" data-hotspot="1" tabindex="0" role="button" aria-label="Inspect VELOCITY Seamless Compression Tee">
                            <span class="pulse-ring"></span>
                            <span class="pin-dot">01</span>
                            <div class="hotspot-hud-card">
                                <span class="hud-tag">DIVISION 01 // COMPRESSION</span>
                                <h4 class="hud-title">VELOCITY Compression Top</h4>
                                <div class="hud-specs">
                                    <span>24mmHg Graduated Muscle Lock</span>
                                    <span>180 GSM Circular Weave</span>
                                </div>
                                <div class="hud-footer">
                                    <span class="hud-price">$52.00</span>
                                    <button type="button" class="hud-buy-btn kinetix-add-to-cart-trigger" data-product-id="lookbook-tee" data-title="VELOCITY Compression Top" data-price="52.00" data-size="L" data-color="Onyx Black">Add to Bag</button>
                                </div>
                            </div>
                        </div>

                        <!-- Hotspot Pin 02: Belt -->
                        <div class="hotspot-pin pin-2" data-hotspot="2" tabindex="0" role="button" aria-label="Inspect TITAN 10mm Lever Belt">
                            <span class="pulse-ring"></span>
                            <span class="pin-dot">02</span>
                            <div class="hotspot-hud-card">
                                <span class="hud-tag">DIVISION 03 // STRENGTH</span>
                                <h4 class="hud-title">TITAN 10mm Lever Belt</h4>
                                <div class="hud-specs">
                                    <span>IPF Spec Steerhide Leather</span>
                                    <span>Aircraft Alloy Lever Buckle</span>
                                </div>
                                <div class="hud-footer">
                                    <span class="hud-price">$129.00</span>
                                    <button type="button" class="hud-buy-btn kinetix-add-to-cart-trigger" data-product-id="lookbook-belt" data-title="TITAN 10mm Lever Belt" data-price="129.00" data-size="M" data-color="Stealth Black">Add to Bag</button>
                                </div>
                            </div>
                        </div>

                        <!-- Hotspot Pin 03: Shorts -->
                        <div class="hotspot-pin pin-3" data-hotspot="3" tabindex="0" role="button" aria-label="Inspect VANGUARD Lined Shorts">
                            <span class="pulse-ring"></span>
                            <span class="pin-dot">03</span>
                            <div class="hotspot-hud-card">
                                <span class="hud-tag">DIVISION 01 // BASE LAYER</span>
                                <h4 class="hud-title">VANGUARD 2-in-1 Shorts</h4>
                                <div class="hud-specs">
                                    <span>Integrated Phone Sleeve</span>
                                    <span>HydroShield 4-Way Stretch</span>
                                </div>
                                <div class="hud-footer">
                                    <span class="hud-price">$58.00</span>
                                    <button type="button" class="hud-buy-btn kinetix-add-to-cart-trigger" data-product-id="lookbook-shorts" data-title="VANGUARD 2-in-1 Shorts" data-price="58.00" data-size="M" data-color="Onyx Black">Add to Bag</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TECHNICAL FABRIC ENGINEERING MATRIX -->
<section class="kinetix-tech-matrix-section">
    <div class="kinetix-container">
        <div class="kinetix-section-header text-center kinetix-reveal">
            <span class="header-eyebrow"><?php esc_html_e( 'FABRIC STANDARDS', 'kinetix-fitness' ); ?></span>
            <h2 class="header-title"><?php esc_html_e( 'Engineered Materials', 'kinetix-fitness' ); ?></h2>
            <p class="header-desc"><?php esc_html_e( 'High-performance textiles tested under heavy barbell friction, high perspiration, and repeated laundering.', 'kinetix-fitness' ); ?></p>
        </div>

        <div class="tech-matrix-grid">
            <div class="tech-card kinetix-card-shell kinetix-reveal delay-100">
                <div class="kinetix-card-inner card-pad">
                    <span class="tech-num">01</span>
                    <h3 class="tech-title"><?php esc_html_e( 'Fast-Dry Moisture Wicking', 'kinetix-fitness' ); ?></h3>
                    <p class="tech-desc"><?php esc_html_e( 'HydroShield micro-knit draws perspiration away from skin in under 1.5 seconds, keeping the garment featherlight through high-rep training sets.', 'kinetix-fitness' ); ?></p>
                </div>
            </div>

            <div class="tech-card kinetix-card-shell kinetix-reveal delay-200">
                <div class="kinetix-card-inner card-pad">
                    <span class="tech-num">02</span>
                    <h3 class="tech-title"><?php esc_html_e( '4-Way Stretch & Shape Retention', 'kinetix-fitness' ); ?></h3>
                    <p class="tech-desc"><?php esc_html_e( 'High-recovery elastane core maintains a snug anatomical silhouette through heavy squats, deadlifts, and high-frequency washing.', 'kinetix-fitness' ); ?></p>
                </div>
            </div>

            <div class="tech-card kinetix-card-shell kinetix-reveal delay-300">
                <div class="kinetix-card-inner card-pad">
                    <span class="tech-num">03</span>
                    <h3 class="tech-title"><?php esc_html_e( 'Anti-Odor Silver Thread', 'kinetix-fitness' ); ?></h3>
                    <p class="tech-desc"><?php esc_html_e( 'Natural silver ions integrated into the yarn eliminate sweat odor before it starts, keeping gear fresh across intense daily sessions.', 'kinetix-fitness' ); ?></p>
                </div>
            </div>

            <div class="tech-card kinetix-card-shell kinetix-reveal delay-400">
                <div class="kinetix-card-inner card-pad">
                    <span class="tech-num">04</span>
                    <h3 class="tech-title"><?php esc_html_e( 'Shopify 1-Click Checkout', 'kinetix-fitness' ); ?></h3>
                    <p class="tech-desc"><?php esc_html_e( 'Fast, secure biometric checkout with Shop Pay, Apple Pay, and Google Pay with real-time package dispatch tracking.', 'kinetix-fitness' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MULTI-PAGE ATHLETIC ECOSYSTEM NAVIGATION -->
<section class="kinetix-multipage-nav-section kinetix-reveal">
    <div class="kinetix-container">
        <div class="multipage-banner doppelrand-card">
            <div class="multipage-content">
                <span class="section-kicker"><?php esc_html_e( 'BRAND DIRECTORY', 'kinetix-fitness' ); ?></span>
                <h3 class="multipage-title"><?php esc_html_e( 'Explore Kinetix Collections', 'kinetix-fitness' ); ?></h3>
                <p class="multipage-desc"><?php esc_html_e( 'Browse our dedicated product categories, materials testing, seasonal athlete lookbooks, and size guides.', 'kinetix-fitness' ); ?></p>
            </div>
            <div class="multipage-links-grid">
                <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">01</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Complete Gear Roster', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'All activewear, belts & recovery', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/technology/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">02</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Fabric Science', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'HydroShield & compression materials', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/lookbook/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">03</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Athlete Lookbook', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'Seasonal drop kits & field photography', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">04</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Size & Fit Matrix', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'Measurement charts & lever belt sizing', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">05</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Brand Heritage', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'Our design philosophy & mission', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="portal-chip">
                    <span class="portal-code">06</span>
                    <div class="portal-info">
                        <strong><?php esc_html_e( 'Athlete Concierge', 'kinetix-fitness' ); ?></strong>
                        <span><?php esc_html_e( 'Order tracking & 30-day exchanges', 'kinetix-fitness' ); ?></span>
                    </div>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
