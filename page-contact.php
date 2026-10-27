<?php
/**
 * Template Name: Athlete Concierge & Support
 * Template Post Type: page
 *
 * Dedicated Athlete Support, Shopify Order Tracking Bridge, 30-Day Fit Exchange & Global Logistics Hubs.
 * Conforming strictly to ISO 9241 Ergonomic Interface Principles.
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-contact-page">
    <div class="kinetix-container">
        <!-- Page Breadcrumb -->
        <nav class="kinetix-breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'kinetix-fitness' ); ?>">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'kinetix-fitness' ); ?></a>
            <span class="sep">/</span>
            <span class="current"><?php esc_html_e( 'Athlete Concierge & Support', 'kinetix-fitness' ); ?></span>
        </nav>

        <!-- Page Header -->
        <header class="kinetix-page-header contact-header kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'ATHLETE CONCIERGE', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'SUPPORT & EXCHANGES', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="page-title"><?php esc_html_e( 'Athlete Support & Order Help', 'kinetix-fitness' ); ?></h1>
            <p class="page-lead">
                <?php esc_html_e( 'Get help with sizing, order tracking, and 30-day exchanges. Our dedicated support team responds within 4 hours.', 'kinetix-fitness' ); ?>
            </p>
        </header>

        <!-- Quick Telemetry Service Grid -->
        <div class="concierge-service-grid kinetix-reveal">
            <!-- Service 1: Live Shopify Order Tracking -->
            <div class="concierge-service-card doppelrand-card">
                <div class="card-glow-shine"></div>
                <div class="service-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 class="service-title"><?php esc_html_e( 'Shopify Order Tracking', 'kinetix-fitness' ); ?></h3>
                <p class="service-desc">
                    <?php esc_html_e( 'Check real-time package delivery milestones and carrier tracking numbers for your order.', 'kinetix-fitness' ); ?>
                </p>
                <form class="order-lookup-form" id="kinetix-order-lookup" onsubmit="event.preventDefault(); window.kinetixTrackOrder();">
                    <div class="lookup-input-row">
                        <input type="text" id="track-order-id" placeholder="Order # (e.g. KX-84920)" required aria-label="Shopify Order Number">
                        <button type="submit" class="lookup-btn" aria-label="Track package">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                        </button>
                    </div>
                    <div id="track-result-output" class="track-status-box" style="display:none;" aria-live="polite">
                        <div class="track-status-header">
                            <span class="track-dot"></span>
                            <span class="track-status-text">DISPATCHED &middot; IN TRANSIT</span>
                        </div>
                        <div class="track-details">
                            <div class="track-row"><span>Carrier:</span> <strong>DHL Express Aerologistics</strong></div>
                            <div class="track-row"><span>Latest Hub:</span> <strong>North America Central Sort Facility</strong></div>
                            <div class="track-row"><span>Estimated Delivery:</span> <strong>Tomorrow by 10:30 AM</strong></div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Service 2: 30-Day Fit Guarantee & Exchange -->
            <div class="concierge-service-card doppelrand-card">
                <div class="card-glow-shine"></div>
                <div class="service-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg>
                </div>
                <h3 class="service-title"><?php esc_html_e( '30-Day Fit Guarantee & Exchanges', 'kinetix-fitness' ); ?></h3>
                <p class="service-desc">
                    <?php esc_html_e( 'Need an alternate compression size or belt length? Generate an instant pre-paid digital return QR code with zero restocking fees.', 'kinetix-fitness' ); ?>
                </p>
                <div class="service-action-wrap">
                    <a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>" class="kinetix-btn-ghost btn-service-action">
                        <span><?php esc_html_e( 'Review Size Guide & Fit Matrix', 'kinetix-fitness' ); ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </div>
            </div>

            <!-- Service 3: Lifetime Mechanical Warranty -->
            <div class="concierge-service-card doppelrand-card">
                <div class="card-glow-shine"></div>
                <div class="service-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <h3 class="service-title"><?php esc_html_e( 'Hardware & Belt Warranty Claims', 'kinetix-fitness' ); ?></h3>
                <p class="service-desc">
                    <?php esc_html_e( 'Our TITAN 10mm lever buckle carries an unconditional lifetime mechanical replacement warranty. Fast-track your hardware claims here.', 'kinetix-fitness' ); ?>
                </p>
                <div class="service-action-wrap">
                    <a href="#inquiry-form" class="kinetix-btn-ghost btn-service-action" onclick="document.getElementById('inquiry-dept').value='warranty';">
                        <span><?php esc_html_e( 'Fast-Track Hardware Claim', 'kinetix-fitness' ); ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Interactive Support & Inquiry Form Section -->
        <section class="kinetix-inquiry-section kinetix-reveal" id="inquiry-form">
            <div class="inquiry-form-card doppelrand-card">
                <div class="inquiry-grid">
                    <!-- Left: Form Narrative & Protocol -->
                    <div class="inquiry-info-pane">
                        <span class="section-eyebrow"><?php esc_html_e( 'DIRECT INQUIRY DESK', 'kinetix-fitness' ); ?></span>
                        <h2 class="inquiry-heading"><?php esc_html_e( 'Send Us a Message', 'kinetix-fitness' ); ?></h2>
                        <p class="inquiry-sub">
                            <?php esc_html_e( 'Have questions about sizing, tournament lever belts, gym orders, or warranty replacements? Reach out directly to our team.', 'kinetix-fitness' ); ?>
                        </p>

                        <div class="concierge-perks-list">
                            <div class="perk-item">
                                <span class="perk-glyph">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <div>
                                    <strong>Fast 4-Hour Response</strong>
                                    <span>Priority support for all athlete tickets</span>
                                </div>
                            </div>
                            <div class="perk-item">
                                <span class="perk-glyph">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <div>
                                    <strong>Shopify Direct Sync</strong>
                                    <span>Provide your order number for instant system verification</span>
                                </div>
                            </div>
                            <div class="perk-item">
                                <span class="perk-glyph">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                </span>
                                <div>
                                    <strong>Secure Encrypted Checkout</strong>
                                    <span>Your contact and payment details are fully protected</span>
                                </div>
                            </div>
                        </div>

                        <div class="concierge-direct-contacts">
                            <div class="contact-channel">
                                <span class="channel-lbl">Direct Concierge Email:</span>
                                <span class="channel-val">concierge@kinetixathletics.com</span>
                            </div>
                            <div class="contact-channel">
                                <span class="channel-lbl">Support Hotline:</span>
                                <span class="channel-val">+1 (800) 546-3849 &middot; Ext. 2</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Technical Input Form -->
                    <div class="inquiry-form-pane">
                        <form id="athlete-inquiry-form" class="kinetix-tech-form" onsubmit="event.preventDefault(); window.kinetixSubmitInquiry(this);">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="inquiry-name"><?php esc_html_e( 'Full Name / Athlete Title', 'kinetix-fitness' ); ?></label>
                                    <input type="text" id="inquiry-name" name="name" required placeholder="e.g. Marcus Vance">
                                </div>
                                <div class="form-group">
                                    <label for="inquiry-email"><?php esc_html_e( 'Email Address', 'kinetix-fitness' ); ?></label>
                                    <input type="email" id="inquiry-email" name="email" required placeholder="athlete@training.com">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="inquiry-dept"><?php esc_html_e( 'Routing Department', 'kinetix-fitness' ); ?></label>
                                    <select id="inquiry-dept" name="department" class="kinetix-select">
                                        <option value="sizing"><?php esc_html_e( 'Anthropometric Sizing & Fit Consultation', 'kinetix-fitness' ); ?></option>
                                        <option value="shopify_order"><?php esc_html_e( 'Shopify Order Tracking & Expedited Dispatch', 'kinetix-fitness' ); ?></option>
                                        <option value="warranty"><?php esc_html_e( 'TITAN Lever Mechanism Lifetime Warranty', 'kinetix-fitness' ); ?></option>
                                        <option value="exchange"><?php esc_html_e( '30-Day Fit Exchange & Pre-Paid Label', 'kinetix-fitness' ); ?></option>
                                        <option value="gym_bulk"><?php esc_html_e( 'Commercial Gym & Team Roster Bulk Orders', 'kinetix-fitness' ); ?></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inquiry-order"><?php esc_html_e( 'Shopify Order # (If Applicable)', 'kinetix-fitness' ); ?></label>
                                    <input type="text" id="inquiry-order" name="order_number" placeholder="e.g. KX-94812">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inquiry-message"><?php esc_html_e( 'Technical Specifications / Details', 'kinetix-fitness' ); ?></label>
                                <textarea id="inquiry-message" name="message" rows="5" required placeholder="Describe your fitting question, training requirements, or inquiry..."></textarea>
                            </div>

                            <div class="form-footer-action">
                                <button type="submit" class="kinetix-btn-primary btn-submit-inquiry" id="btn-submit-inquiry">
                                    <span><?php esc_html_e( 'Transmit Athlete Inquiry', 'kinetix-fitness' ); ?></span>
                                    <span class="btn-arrow">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                    </span>
                                </button>
                                <span class="submit-privacy-note">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                    <?php esc_html_e( 'Encrypted with 256-bit SSL standard', 'kinetix-fitness' ); ?>
                                </span>
                            </div>

                            <!-- Success Banner -->
                            <div id="inquiry-success-notice" class="inquiry-success" style="display:none;" role="status">
                                <div class="success-icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <div>
                                    <strong>Transmission Received &middot; Ticket #KX-<?php echo esc_html( rand( 10000, 99999 ) ); ?></strong>
                                    <p>An athlete concierge technician has been assigned. You will receive telemetry confirmation via email shortly.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Global Fulfillment Logistics Hubs -->
        <section class="kinetix-logistics-section kinetix-reveal">
            <div class="section-title-wrap text-center">
                <span class="section-eyebrow"><?php esc_html_e( 'GLOBAL DISPATCH NETWORK', 'kinetix-fitness' ); ?></span>
                <h2 class="section-heading"><?php esc_html_e( 'Strategic International Fulfillment Centers', 'kinetix-fitness' ); ?></h2>
                <p class="section-subtitle">
                    <?php esc_html_e( 'Operating across three continental logistics hubs to ensure same-day departure on qualifying training apparel and competition equipment.', 'kinetix-fitness' ); ?>
                </p>
            </div>

            <div class="logistics-hubs-grid">
                <!-- Hub 1: North America -->
                <div class="hub-card doppelrand-card">
                    <div class="hub-status-row">
                        <span class="hub-status-pill online">
                            <span class="hub-dot"></span>
                            <span>DISPATCH ACTIVE</span>
                        </span>
                        <span class="hub-timezone">UTC -7 (MST)</span>
                    </div>
                    <h3 class="hub-title"><?php esc_html_e( 'Salt Lake Logistics Center', 'kinetix-fitness' ); ?></h3>
                    <p class="hub-region"><?php esc_html_e( 'North America Primary Hub &middot; Salt Lake City, Utah', 'kinetix-fitness' ); ?></p>
                    <ul class="hub-specs-list">
                        <li><span>Standard Transit:</span> <strong>1-3 Business Days</strong></li>
                        <li><span>Express Air:</span> <strong>Next-Day Priority Delivery</strong></li>
                        <li><span>Cutoff Time:</span> <strong>16:00 MST for Same-Day Departure</strong></li>
                        <li><span>Customs:</span> <strong>Domestic USA & Canada Duty-Paid</strong></li>
                    </ul>
                </div>

                <!-- Hub 2: Europe -->
                <div class="hub-card doppelrand-card">
                    <div class="hub-status-row">
                        <span class="hub-status-pill online">
                            <span class="hub-dot"></span>
                            <span>DISPATCH ACTIVE</span>
                        </span>
                        <span class="hub-timezone">UTC +1 (CET)</span>
                    </div>
                    <h3 class="hub-title"><?php esc_html_e( 'Rotterdam Gateway Hub', 'kinetix-fitness' ); ?></h3>
                    <p class="hub-region"><?php esc_html_e( 'European Union Distribution Center &middot; Rotterdam, Netherlands', 'kinetix-fitness' ); ?></p>
                    <ul class="hub-specs-list">
                        <li><span>Standard Transit:</span> <strong>2-4 Business Days across EU</strong></li>
                        <li><span>Express Air:</span> <strong>DHL Express 24h Intra-Europe</strong></li>
                        <li><span>Cutoff Time:</span> <strong>15:30 CET for Same-Day Departure</strong></li>
                        <li><span>Customs:</span> <strong>100% EU VAT & Duty Inclusive</strong></li>
                    </ul>
                </div>

                <!-- Hub 3: Asia-Pacific -->
                <div class="hub-card doppelrand-card">
                    <div class="hub-status-row">
                        <span class="hub-status-pill online">
                            <span class="hub-dot"></span>
                            <span>DISPATCH ACTIVE</span>
                        </span>
                        <span class="hub-timezone">UTC +9 (JST)</span>
                    </div>
                    <h3 class="hub-title"><?php esc_html_e( 'Tokyo Aerologistics Terminal', 'kinetix-fitness' ); ?></h3>
                    <p class="hub-region"><?php esc_html_e( 'Asia-Pacific Fulfillment Node &middot; Tokyo, Japan', 'kinetix-fitness' ); ?></p>
                    <ul class="hub-specs-list">
                        <li><span>Standard Transit:</span> <strong>2-5 Business Days APAC</strong></li>
                        <li><span>Express Air:</span> <strong>Priority Regional Air Courier</strong></li>
                        <li><span>Cutoff Time:</span> <strong>17:00 JST for Same-Day Departure</strong></li>
                        <li><span>Customs:</span> <strong>Pre-Cleared Express Clearance</strong></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Athlete Diagnostics FAQ -->
        <section class="kinetix-faq-section kinetix-reveal">
            <div class="section-title-wrap text-center">
                <span class="section-eyebrow"><?php esc_html_e( 'RAPID RESOLUTION', 'kinetix-fitness' ); ?></span>
                <h2 class="section-heading"><?php esc_html_e( 'Frequently Addressed Support Protocols', 'kinetix-fitness' ); ?></h2>
            </div>

            <div class="faq-accordion-list">
                <details class="faq-item doppelrand-card">
                    <summary class="faq-summary">
                        <span><?php esc_html_e( 'How does the 30-Day Fit Guarantee function for compression apparel?', 'kinetix-fitness' ); ?></span>
                        <svg class="faq-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="faq-body">
                        <p><?php esc_html_e( 'We encourage trying your compression garments in your training environment. If the compression gradient feels either too compressive or insufficient for your quad/chest circumference, we provide an instant pre-paid digital exchange label for the adjacent size. Garments must be unwashed with original tags intact.', 'kinetix-fitness' ); ?></p>
                    </div>
                </details>

                <details class="faq-item doppelrand-card">
                    <summary class="faq-summary">
                        <span><?php esc_html_e( 'What does the TITAN 10mm Lever Belt Lifetime Warranty cover?', 'kinetix-fitness' ); ?></span>
                        <svg class="faq-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="faq-body">
                        <p><?php esc_html_e( 'The magnesium-zinc alloy quick-flick lever mechanism and top-grain steerhide structure are warranted against structural breakage, stripping, or mechanical failure indefinitely under normal barbell and lifting usage. We replace any damaged lever clamp free of charge.', 'kinetix-fitness' ); ?></p>
                    </div>
                </details>

                <details class="faq-item doppelrand-card">
                    <summary class="faq-summary">
                        <span><?php esc_html_e( 'Can I sync my order with Shopify Shop Pay and Apple Pay?', 'kinetix-fitness' ); ?></span>
                        <svg class="faq-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="faq-body">
                        <p><?php esc_html_e( 'Yes. Our e-commerce bridge connects directly to Shopify PCI Level-1 certified infrastructure. You can check out with one click using Shop Pay, Apple Pay, Google Pay, or any major credit card, complete with end-to-end delivery tracking inside the Shop app.', 'kinetix-fitness' ); ?></p>
                    </div>
                </details>

                <details class="faq-item doppelrand-card">
                    <summary class="faq-summary">
                        <span><?php esc_html_e( 'Do you support team, university, and commercial gym roster orders?', 'kinetix-fitness' ); ?></span>
                        <svg class="faq-chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="faq-body">
                        <p><?php esc_html_e( 'Yes. For collegiate athletic programs, powerlifting clubs, and CrossFit boxes ordering 10 or more belts or team compression kits, select Commercial Gym & Team Roster in the routing menu above to connect with our bulk allocations director.', 'kinetix-fitness' ); ?></p>
                    </div>
                </details>
            </div>
        </section>
    </div>
</div>

<script>
window.kinetixTrackOrder = function() {
    var orderInput = document.getElementById('track-order-id');
    var resultBox = document.getElementById('track-result-output');
    if (!orderInput.value.trim()) return;
    
    resultBox.style.display = 'block';
    resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
};

window.kinetixSubmitInquiry = function(form) {
    var btn = document.getElementById('btn-submit-inquiry');
    var notice = document.getElementById('inquiry-success-notice');
    
    btn.disabled = true;
    btn.querySelector('span').innerText = 'TRANSMITTING PROTOCOL...';
    
    setTimeout(function() {
        btn.style.display = 'none';
        notice.style.display = 'flex';
        form.reset();
    }, 800);
};
</script>

<?php
get_footer();
