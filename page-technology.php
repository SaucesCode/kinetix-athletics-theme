<?php
/**
 * Template Name: Materials Innovation & Lab
 * Template Post Type: page
 *
 * Dedicated Textile Science, Fabric Engineering & Laboratory Testing Page
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-technology-page">
    <div class="kinetix-container">
        <!-- Breadcrumb Navigation -->
        <nav class="kinetix-breadcrumb kinetix-reveal" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Technology & Materials</span>
        </nav>

        <!-- Technology Hero Header -->
        <header class="kinetix-page-hero kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'MATERIALS INNOVATION', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'RESEARCH LAB', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="page-hero-title">
                <span class="hero-title-gradient"><?php esc_html_e( 'Fabric Innovation & Materials Science', 'kinetix-fitness' ); ?></span>
            </h1>
            <p class="page-hero-sub">
                A granular breakdown of our proprietary yarn compositions, mechanical tension structures, and laboratory friction testing standards.
            </p>
        </header>

        <!-- Fabric Science Deep-Dive Grid -->
        <div class="tech-deep-grid">
            <!-- HydroShield Fabric -->
            <div class="tech-deep-card kinetix-card-shell kinetix-reveal delay-100">
                <div class="kinetix-card-inner tech-deep-inner">
                    <div class="tech-visual-column">
                        <div class="tech-cad-box">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.75">
                                <circle cx="50" cy="50" r="40" stroke="rgba(56, 189, 248, 0.3)" stroke-dasharray="3 3"/>
                                <path d="M50 20 C40 38 30 52 30 65 A20 20 0 0 0 70 65 C70 52 60 38 50 20 Z" stroke="var(--accent-primary)" fill="rgba(56, 189, 248, 0.1)"/>
                                <line x1="20" y1="85" x2="80" y2="85" stroke="rgba(56, 189, 248, 0.4)"/>
                                <line x1="30" y1="92" x2="70" y2="92" stroke="rgba(56, 189, 248, 0.2)"/>
                            </svg>
                            <span class="cad-label">SPEC: HYDRO-SHIELD V4</span>
                        </div>
                    </div>
                    <div class="tech-content-column">
                        <span class="tech-tag">TECHNOLOGY 01 // TEXTILE INNOVATION</span>
                        <h2 class="tech-name">HydroShield Fast-Wicking Micro-Knit</h2>
                        <p class="tech-explanation">
                            Unlike traditional polyester with temporary surface coatings that wash away, HydroShield integrates micro-grooved channels permanently inside each polyamide filament. Perspiration is pulled rapidly away from skin across a wider surface area, accelerating evaporative cooling during high-intensity training.
                        </p>
                        <div class="tech-data-row">
                            <div class="data-badge">
                                <span class="d-val">0.38s</span>
                                <span class="d-lbl">Perspiration Transit Rate</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">180 GSM</span>
                                <span class="d-lbl">Aero-Featherweight Density</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">UPF 50+</span>
                                <span class="d-lbl">Solar Radiation Block</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graduated 24mmHg Compression -->
            <div class="tech-deep-card kinetix-card-shell kinetix-reveal delay-200">
                <div class="kinetix-card-inner tech-deep-inner">
                    <div class="tech-visual-column">
                        <div class="tech-cad-box">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.75">
                                <rect x="25" y="20" width="50" height="60" rx="8" stroke="rgba(56, 189, 248, 0.3)"/>
                                <line x1="25" y1="35" x2="75" y2="35" stroke="var(--accent-primary)"/>
                                <line x1="25" y1="50" x2="75" y2="50" stroke="var(--accent-primary)"/>
                                <line x1="25" y1="65" x2="75" y2="65" stroke="var(--accent-primary)"/>
                                <path d="M15 35 L22 35 M85 35 L78 35" stroke="var(--accent-primary)"/>
                                <path d="M15 65 L22 65 M85 65 L78 65" stroke="var(--accent-primary)"/>
                            </svg>
                            <span class="cad-label">SPEC: CIRCULAR KNIT 24MMHG</span>
                        </div>
                    </div>
                    <div class="tech-content-column">
                        <span class="tech-tag">TECHNOLOGY 02 // MUSCLE COMPRESSION & RECOVERY</span>
                        <h2 class="tech-name">Graduated 24mmHg Circular Knit Lock</h2>
                        <p class="tech-explanation">
                            Woven on precision circular German knitting cylinders using high-denier medical elastane. The pressure gradient delivers 24mmHg at distal muscle insertions graduating to 16mmHg at the proximal belly, optimizing venous blood return to the heart, dampening muscle oscillatory vibration during heavy landings, and mitigating post-session soreness.
                        </p>
                        <div class="tech-data-row">
                            <div class="data-badge">
                                <span class="d-val">24 mmHg</span>
                                <span class="d-lbl">Distal Vascular Compression</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">-32%</span>
                                <span class="d-lbl">Muscle Oscillation Damping</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">360°</span>
                                <span class="d-lbl">Mechanical Elastic Recovery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IPF Spec Steerhide Leather & Alloy Hardware -->
            <div class="tech-deep-card kinetix-card-shell kinetix-reveal delay-300">
                <div class="kinetix-card-inner tech-deep-inner">
                    <div class="tech-visual-column">
                        <div class="tech-cad-box">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.75">
                                <rect x="15" y="35" width="70" height="30" rx="4" stroke="var(--accent-primary)"/>
                                <rect x="22" y="40" width="16" height="20" rx="2" stroke="rgba(56, 189, 248, 0.4)"/>
                                <circle cx="50" cy="50" r="3" fill="var(--accent-primary)"/>
                                <circle cx="62" cy="50" r="3" fill="var(--accent-primary)"/>
                                <circle cx="74" cy="50" r="3" fill="var(--accent-primary)"/>
                            </svg>
                            <span class="cad-label">SPEC: TITAN 10MM STEERHIDE</span>
                        </div>
                    </div>
                    <div class="tech-content-column">
                        <span class="tech-tag">TECHNOLOGY 03 // STRUCTURAL HARDWARE</span>
                        <h2 class="tech-name">10mm Vegetable-Tanned Steerhide & Aircraft Alloy</h2>
                        <p class="tech-explanation">
                            Crafted in accordance with strict international powerlifting guidelines. We utilize full single-piece, top-grain steerhide tanned organically without chemical plasticizers. Paired with a CNC-milled 6061-T6 aluminum aircraft-alloy lever buckle that engages and disengages with a single snap motion under 1,000+ kg intra-abdominal pressure.
                        </p>
                        <div class="tech-data-row">
                            <div class="data-badge">
                                <span class="d-val">10.0mm</span>
                                <span class="d-lbl">Uniform Caliper Thickness</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">6061-T6</span>
                                <span class="d-lbl">Aircraft Billet Alloy Lever</span>
                            </div>
                            <div class="data-badge">
                                <span class="d-val">IPF Spec</span>
                                <span class="d-lbl">Tournament Legal Width (4")</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Material Longevity Commitment -->
        <div class="tech-lab-footer-card kinetix-card-shell kinetix-reveal">
            <div class="kinetix-card-inner lab-footer-inner">
                <div>
                    <span class="section-kicker">LIFETIME COMMITMENT</span>
                    <h2 class="cta-heading">Engineered for 500+ Training Sessions</h2>
                    <p class="cta-sub">We test every seam under repetitive tensile distortion. If any Kinetix garment suffers seam failure within 365 days of purchase, our concierge replaces it with complimentary express dispatch.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="kinetix-btn-primary">
                    <span>Shop Technical Roster</span>
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
