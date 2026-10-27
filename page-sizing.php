<?php
/**
 * Template Name: Size Guide & Fit Matrix
 * Template Post Type: page
 *
 * Dedicated Anthropometric Fit Matrix, Measurement Protocols & Size Guide
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-sizing-page">
    <div class="kinetix-container">
        <!-- Breadcrumb Navigation -->
        <nav class="kinetix-breadcrumb kinetix-reveal" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Fit Matrix & Sizing</span>
        </nav>

        <!-- Sizing Hero Header -->
        <header class="kinetix-page-hero kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'SIZE & FIT GUIDE', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'CALIBRATION 2026', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="page-hero-title">
                <span class="hero-title-gradient">Precision Sizing & Fit Calibration</span>
            </h1>
            <p class="page-hero-sub">
                Our athletic silhouettes are graded according to functional anatomical proportions rather than vanity sizing. Consult our measurement matrices below to secure your optimal fit.
            </p>
        </header>

        <!-- Interactive Fit Philosophy Banner -->
        <div class="sizing-intent-banner kinetix-card-shell kinetix-reveal delay-100">
            <div class="kinetix-card-inner intent-inner">
                <div class="intent-col">
                    <span class="intent-tag">FIT ARCHETYPE 01</span>
                    <h3 class="intent-title">Compression Race Lock</h3>
                    <p class="intent-desc">
                        True second-skin contact. Designed for maximal venous return, thoracic bracing, and zero friction. Choose your standard true-to-size measurement.
                    </p>
                </div>
                <div class="intent-col border-left">
                    <span class="intent-tag">FIT ARCHETYPE 02</span>
                    <h3 class="intent-title">Athletic Movement Fit</h3>
                    <p class="intent-desc">
                        Slightly relaxed silhouette with dropped deltoid seams for pump covers and daily strength work. If you prefer roomier drape, size up one grade.
                    </p>
                </div>
            </div>
        </div>

        <!-- Men's Sizing Matrix Table -->
        <div class="sizing-table-section kinetix-card-shell kinetix-reveal delay-200">
            <div class="kinetix-card-inner sizing-table-inner">
                <div class="table-header-row">
                    <h2 class="table-heading">Men's Tops, Compression & Outerwear</h2>
                    <span class="table-unit-badge">All measurements in INCHES</span>
                </div>

                <div class="table-responsive-wrapper">
                    <table class="kinetix-size-table">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Chest (Inches)</th>
                                <th>Waist (Inches)</th>
                                <th>Arm Length</th>
                                <th>Recommended Athlete Weight</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>XS</strong></td>
                                <td>34 - 36"</td>
                                <td>28 - 30"</td>
                                <td>31"</td>
                                <td>125 - 145 lbs</td>
                            </tr>
                            <tr>
                                <td><strong>S</strong></td>
                                <td>36 - 38"</td>
                                <td>30 - 32"</td>
                                <td>32"</td>
                                <td>145 - 165 lbs</td>
                            </tr>
                            <tr class="highlight-row">
                                <td><strong>M (Standard)</strong></td>
                                <td>39 - 41"</td>
                                <td>32 - 34"</td>
                                <td>33"</td>
                                <td>165 - 190 lbs</td>
                            </tr>
                            <tr>
                                <td><strong>L</strong></td>
                                <td>42 - 44"</td>
                                <td>34 - 36"</td>
                                <td>34"</td>
                                <td>190 - 215 lbs</td>
                            </tr>
                            <tr>
                                <td><strong>XL</strong></td>
                                <td>45 - 47"</td>
                                <td>36 - 38"</td>
                                <td>35"</td>
                                <td>215 - 240 lbs</td>
                            </tr>
                            <tr>
                                <td><strong>XXL</strong></td>
                                <td>48 - 51"</td>
                                <td>38 - 42"</td>
                                <td>36"</td>
                                <td>240 - 275+ lbs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Women's Sizing Matrix Table -->
        <div class="sizing-table-section kinetix-card-shell kinetix-reveal delay-300">
            <div class="kinetix-card-inner sizing-table-inner">
                <div class="table-header-row">
                    <h2 class="table-heading">Women's Activewear & Compression Tights</h2>
                    <span class="table-unit-badge">All measurements in INCHES</span>
                </div>

                <div class="table-responsive-wrapper">
                    <table class="kinetix-size-table">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Bust (Inches)</th>
                                <th>Waist (Inches)</th>
                                <th>Hips (Inches)</th>
                                <th>Inseam (7/8 Length)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>XS</strong></td>
                                <td>30 - 32"</td>
                                <td>24 - 26"</td>
                                <td>34 - 36"</td>
                                <td>25"</td>
                            </tr>
                            <tr>
                                <td><strong>S</strong></td>
                                <td>32 - 34"</td>
                                <td>26 - 28"</td>
                                <td>36 - 38"</td>
                                <td>25.5"</td>
                            </tr>
                            <tr class="highlight-row">
                                <td><strong>M</strong></td>
                                <td>35 - 37"</td>
                                <td>28 - 30"</td>
                                <td>39 - 41"</td>
                                <td>26"</td>
                            </tr>
                            <tr>
                                <td><strong>L</strong></td>
                                <td>38 - 40"</td>
                                <td>31 - 33"</td>
                                <td>42 - 44"</td>
                                <td>26.5"</td>
                            </tr>
                            <tr>
                                <td><strong>XL</strong></td>
                                <td>41 - 43"</td>
                                <td>34 - 36"</td>
                                <td>45 - 47"</td>
                                <td>27"</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- 10mm Powerlifting Lever Belt Calibration Guide -->
        <div class="belt-sizing-card kinetix-card-shell kinetix-reveal">
            <div class="kinetix-card-inner belt-inner">
                <div class="belt-info-col">
                    <span class="section-kicker">CRITICAL CALIBRATION</span>
                    <h2 class="belt-title">10mm Lever Belt Sizing Protocol</h2>
                    <p class="belt-desc">
                        <strong>IMPORTANT:</strong> Do not use your trouser waist size. Powerlifting belts are worn over the abdominal wall directly across the navel. Pull a flexible tape measure tight around your navel while braced to determine your exact circumference.
                    </p>
                    <ul class="belt-size-list">
                        <li><strong>Small (S):</strong> 26" to 31" navel circumference</li>
                        <li><strong>Medium (M):</strong> 30" to 35" navel circumference</li>
                        <li><strong>Large (L):</strong> 34" to 39" navel circumference</li>
                        <li><strong>X-Large (XL):</strong> 38" to 43" navel circumference</li>
                        <li><strong>2X-Large (XXL):</strong> 42" to 47" navel circumference</li>
                    </ul>
                </div>
                <div class="belt-action-col">
                    <div class="belt-product-preview">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-titan-belt.jpg' ); ?>" alt="<?php esc_attr_e( '10mm Tournament Lever Belt', 'kinetix-fitness' ); ?>" class="belt-preview-img" loading="lazy">
                    </div>
                    <div class="concierge-box">
                        <h3>Unsure About Your Fit?</h3>
                        <p>Our athlete concierge provides complimentary sizing reviews with exchange guarantees on all unworn items.</p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="kinetix-btn-secondary">
                            <span>Contact Fit Concierge</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
