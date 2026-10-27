<?php
/**
 * Footer template for Kinetix Athletics
 * Pure SVG vectors, no emojis, conforming to ISO 9241 Ergonomic Interface Guidelines
 *
 * @package Kinetix_Fitness
 */
?>
</main><!-- #kinetix-main-content -->

<!-- Athlete Value Proposition Bar -->
<section class="kinetix-trust-bar">
    <div class="kinetix-container">
        <div class="trust-grid">
            <div class="trust-item">
                <span class="trust-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                </span>
                <div class="trust-info">
                    <strong>Express Global Dispatch</strong>
                    <span>Orders fulfilled within 24 hours from our logistics hub</span>
                </div>
            </div>
            <div class="trust-item">
                <span class="trust-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg>
                </span>
                <div class="trust-info">
                    <strong>30-Day Fit Guarantee</strong>
                    <span>Complimentary exchanges and returns on unworn apparel</span>
                </div>
            </div>
            <div class="trust-item">
                <span class="trust-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </span>
                <div class="trust-info">
                    <strong>Shopify Encrypted Checkout</strong>
                    <span>PCI Level-1 compliant transactions with Shop Pay and Apple Pay</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Brand Footer -->
<footer id="kinetix-site-footer" class="kinetix-footer">
    <div class="kinetix-container">
        <div class="footer-primary-grid">
            <!-- Brand Column -->
            <div class="footer-col brand-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
                    <span class="logo-mark">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </span>
                    <span class="logo-text">KINETIX</span>
                </a>
                <p class="footer-bio">
                    <?php esc_html_e( 'Technical athletic apparel, circular-knit compression wear, and competition equipment built for rigorous physical preparation.', 'kinetix-fitness' ); ?>
                </p>
                <div class="footer-shopify-status">
                    <span class="status-indicator"></span>
                    <span>Shopify E-Commerce Verified</span>
                </div>
            </div>

            <!-- Shop Categories -->
            <div class="footer-col">
                <h4 class="footer-col-title"><?php esc_html_e( 'Apparel & Gear', 'kinetix-fitness' ); ?></h4>
                <ul class="footer-link-list">
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=mens-training' ) ); ?>"><?php esc_html_e( "Men's Training", 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=womens-activewear' ) ); ?>"><?php esc_html_e( "Women's Active", 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=compression' ) ); ?>"><?php esc_html_e( 'Base Layers & Compression', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=gym-gear-equipment' ) ); ?>"><?php esc_html_e( '10mm Tournament Belts', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=recovery-supplements' ) ); ?>"><?php esc_html_e( 'Cold-Filtered Whey Isolate', 'kinetix-fitness' ); ?></a></li>
                </ul>
            </div>

            <!-- Technology & Specifications -->
            <div class="footer-col">
                <h4 class="footer-col-title"><?php esc_html_e( 'Engineering Lab', 'kinetix-fitness' ); ?></h4>
                <ul class="footer-link-list">
                    <li><a href="<?php echo esc_url( home_url( '/technology/' ) ); ?>"><?php esc_html_e( 'HydroShield Fabric Science', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>"><?php esc_html_e( 'Size Guide & Fit Matrix', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/lookbook/' ) ); ?>"><?php esc_html_e( 'Athlete Field Campaigns', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Brand Heritage & Philosophy', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Athlete Concierge & Support', 'kinetix-fitness' ); ?></a></li>
                </ul>
            </div>

            <!-- VIP Drop Newsletter -->
            <div class="footer-col newsletter-col">
                <h4 class="footer-col-title"><?php esc_html_e( 'Field Dispatch', 'kinetix-fitness' ); ?></h4>
                <p class="newsletter-sub">
                    <?php esc_html_e( 'Receive product release notices, fabric laboratory updates, and private subscriber allocations.', 'kinetix-fitness' ); ?>
                </p>
                <form class="kinetix-newsletter-form" onsubmit="event.preventDefault(); this.querySelector('button').innerText = 'ENROLLED';">
                    <div class="newsletter-form-group">
                        <input type="email" placeholder="athlete@training.com" required aria-label="Email Address">
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Bottom Legal -->
        <div class="footer-bottom-bar">
            <div class="footer-copy">
                &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Kinetix Athletics Inc. All rights reserved. Dual compatibility with WordPress & Shopify.
            </div>
            <div class="footer-badges">
                <span class="pay-badge">Shop Pay</span>
                <span class="pay-badge">Apple Pay</span>
                <span class="pay-badge">Google Pay</span>
                <span class="pay-badge">Visa</span>
                <span class="pay-badge">Mastercard</span>
            </div>
        </div>
    </div>
</footer>

<!-- SLIDE-OUT SHOPPING BAG DRAWER (Shopify Compatible) -->
<div id="kinetix-cart-drawer" class="kinetix-drawer" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="kinetix-drawer-heading">
    <div class="kinetix-drawer-backdrop" id="kinetix-drawer-backdrop"></div>
    <div class="kinetix-drawer-panel">
        <!-- Drawer Header -->
        <div class="kinetix-drawer-header">
            <div class="drawer-heading-row">
                <span class="heading-glyph">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </span>
                <h3 id="kinetix-drawer-heading" class="drawer-title"><?php esc_html_e( 'Shopping Bag', 'kinetix-fitness' ); ?></h3>
                <span class="drawer-count-tag" id="kinetix-drawer-count">(0)</span>
            </div>
            <button type="button" class="drawer-close-btn" id="kinetix-close-bag" aria-label="<?php esc_attr_e( 'Close bag', 'kinetix-fitness' ); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Free Shipping Meter Progress Bar -->
        <div class="kinetix-shipping-meter-wrap" id="kinetix-shipping-meter">
            <div class="meter-text-row">
                <span class="meter-msg" id="kinetix-meter-msg">Add $75.00 more for complimentary express delivery</span>
                <span class="meter-pct" id="kinetix-meter-pct">0%</span>
            </div>
            <div class="meter-progress-track">
                <div class="meter-progress-fill" id="kinetix-meter-bar" style="width: 0%;"></div>
            </div>
        </div>

        <!-- Cart Items Scroll Area -->
        <div class="kinetix-drawer-items" id="kinetix-drawer-items-list">
            <!-- Dynamically populated via cart-drawer.js -->
        </div>

        <!-- Drawer Footer / Direct Shopify Checkout -->
        <div class="kinetix-drawer-footer" id="kinetix-drawer-footer">
            <div class="drawer-subtotal-line">
                <span class="subtotal-label"><?php esc_html_e( 'Order Subtotal', 'kinetix-fitness' ); ?></span>
                <span class="subtotal-val" id="kinetix-cart-subtotal">$0.00</span>
            </div>
            <p class="drawer-shipping-note">
                <?php esc_html_e( 'Taxes, duties, and gift codes calculated at Shopify secure checkout.', 'kinetix-fitness' ); ?>
            </p>

            <button type="button" class="kinetix-btn-checkout" id="kinetix-checkout-btn">
                <span>Proceed to Shopify Checkout</span>
                <span class="checkout-arrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </span>
            </button>

            <div class="drawer-security-row">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                <span>Encrypted 256-Bit SSL Shopify Payment Gateway</span>
            </div>
        </div>
    </div>
</div>

<!-- Floating Toast Notification for Add-to-Bag -->
<div id="kinetix-toast" class="kinetix-toast" role="status" aria-live="polite">
    <div class="toast-inner">
        <span class="toast-bolt">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
        </span>
        <span class="toast-msg" id="kinetix-toast-msg">Item added to your bag</span>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
