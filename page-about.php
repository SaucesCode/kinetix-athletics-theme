<?php
/**
 * Template Name: Brand Heritage & Mission
 * Template Post Type: page
 *
 * Dedicated Brand Story, Biomechanical Philosophy & Athlete Laboratory Page
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-about-page">
    <div class="kinetix-container">
        <!-- Breadcrumb Navigation -->
        <nav class="kinetix-breadcrumb kinetix-reveal" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Heritage & Mission</span>
        </nav>

        <!-- Hero Mission Statement -->
        <header class="kinetix-page-hero kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'OUR ORIGIN', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'EST. 2026', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="page-hero-title">
                <span class="hero-title-gradient"><?php esc_html_e( 'Built For Heavy Work', 'kinetix-fitness' ); ?></span>
            </h1>
            <p class="page-hero-sub">
                <?php esc_html_e( 'Kinetix was founded with a straightforward standard: training apparel and lifting gear should be built for heavy barbell sessions, daily conditioning, and lasting durability &mdash; not disposable trends.', 'kinetix-fitness' ); ?>
            </p>
        </header>

        <!-- Editorial Story Grid (Double-Bezel Hardware Layout) -->
        <div class="about-story-grid">
            <div class="story-card-main kinetix-card-shell kinetix-reveal delay-100">
                <div class="kinetix-card-inner story-inner">
                    <span class="story-tag">01 // THE FOUNDATION</span>
                    <h2 class="story-title">From the Barbell Platform to the Workshop</h2>
                    <p class="story-paragraph">
                        In 2021, our founders noticed a persistent problem in athletic wear: gym clothing was either fragile athleisure that frayed under aggressive barbell knurling, or stiff, unbreathable gear that restricted mobility during deep squats and sprints.
                    </p>
                    <p class="story-paragraph">
                        Headquartered between Salt Lake City and our partner circular-knitting facilities in Northern Italy, Kinetix developed fabrics and equipment tested under real gym conditions: heavy barbell friction, high perspiration, and repeated laundering cycles.
                    </p>
                    <div class="story-quote-box">
                        <p class="quote-text">
                            "We do not design for trend cycles. We build durable tools for lifters and conditioning athletes who train every day."
                        </p>
                        <span class="quote-author">&mdash; Marcus Vance, Head of Product Design</span>
                    </div>
                </div>
            </div>

            <div class="story-card-side kinetix-card-shell kinetix-reveal delay-200">
                <div class="kinetix-card-inner story-telemetry-inner">
                    <span class="story-tag">TESTING STANDARDS</span>
                    <h3 class="side-title">Performance Standards</h3>
                    
                    <div class="telemetry-stat-list">
                        <div class="stat-row">
                            <span class="stat-number">50,000</span>
                            <span class="stat-meta">Barbell Knurling Friction Cycles Passed</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-number">24 mmHg</span>
                            <span class="stat-meta">Graduated Medical-Grade Muscle Compression</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-number">98.4%</span>
                            <span class="stat-meta">4-Way Mechanical Tensile Elasticity Recovery</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-number">100%</span>
                            <span class="stat-meta">Squat-Proof Opacity Under 2,500 Lumen Gym Floodlights</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Athlete Testing Lab Showcase Banner -->
        <div class="about-visual-banner kinetix-card-shell kinetix-reveal delay-300">
            <div class="kinetix-card-inner about-visual-inner">
                <div class="about-photo-wrap">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-athlete.jpg' ); ?>" alt="<?php esc_attr_e( 'Kinetix Athlete Strength Testing', 'kinetix-fitness' ); ?>" class="about-stage-photo" loading="lazy">
                    <div class="about-photo-scrim"></div>
                </div>
                <div class="about-visual-hud">
                    <span class="hud-tag">FACILITY TELEMETRY // 2026</span>
                    <h3 class="hud-title">The Testing Floor // Salt Lake City</h3>
                    <p class="hud-desc">Every batch of circular-knit fabric undergoes 500 barbell knurling friction passes and dynamic moisture evaporation testing before entering production cutting.</p>
                </div>
            </div>
        </div>

        <!-- The 4 Core Engineering Tenets -->
        <section class="about-pillars-section kinetix-reveal">
            <div class="kinetix-section-header text-center">
                <span class="header-eyebrow">DESIGN FOUNDATIONS</span>
                <h2 class="header-title">The Four Engineering Tenets</h2>
                <p class="header-desc">Every piece of gear released from the Kinetix laboratory must satisfy all four benchmarks.</p>
            </div>

            <div class="pillars-grid">
                <div class="pillar-card kinetix-card-shell kinetix-reveal delay-100">
                    <div class="kinetix-card-inner pillar-inner">
                        <span class="pillar-num">01</span>
                        <h3 class="pillar-heading">Zero Mechanical Hindrance</h3>
                        <p class="pillar-desc">
                            Articulated shoulder raglan seams and high-stretch diamond gussets ensure zero garment tugging through full-range overhead snatches, front squats, and bench presses.
                        </p>
                    </div>
                </div>

                <div class="pillar-card kinetix-card-shell kinetix-reveal delay-200">
                    <div class="kinetix-card-inner pillar-inner">
                        <span class="pillar-num">02</span>
                        <h3 class="pillar-heading">Micro-Capillary Evaporation</h3>
                        <p class="pillar-desc">
                            HydroShield polyamide micro-fibers channel core perspiration away from the epidermis into outer dispersal zones, preventing skin saturation and thermal spikes.
                        </p>
                    </div>
                </div>

                <div class="pillar-card kinetix-card-shell kinetix-reveal delay-300">
                    <div class="kinetix-card-inner pillar-inner">
                        <span class="pillar-num">03</span>
                        <h3 class="pillar-heading">Tournament Specification Hardware</h3>
                        <p class="pillar-desc">
                            Our 10mm powerlifting belts utilize single-cut steerhide leather and precision aircraft-grade aluminum alloy lever buckles built to withstand 1,000+ kg tensile loads.
                        </p>
                    </div>
                </div>

                <div class="pillar-card kinetix-card-shell kinetix-reveal delay-400">
                    <div class="kinetix-card-inner pillar-inner">
                        <span class="pillar-num">04</span>
                        <h3 class="pillar-heading">Universal Shopify Checkout</h3>
                        <p class="pillar-desc">
                            Frictionless direct checkout via Shop Pay and Apple Pay tokenization ensures athletes receive instant fulfillment confirmations and encrypted transaction protection.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Banner -->
        <div class="about-cta-banner kinetix-card-shell kinetix-reveal">
            <div class="kinetix-card-inner about-cta-inner">
                <div>
                    <span class="section-kicker">ATHLETE ROSTER</span>
                    <h2 class="cta-heading">Ready to Equip Your Training?</h2>
                    <p class="cta-sub">Explore the latest competition drops across men's and women's compression, power belts, and recovery systems.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="kinetix-btn-primary">
                    <span>Explore Collection</span>
                    <span class="btn-arrow-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
