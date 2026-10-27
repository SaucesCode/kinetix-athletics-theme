<?php
/**
 * Header template for Kinetix Athletics
 * Minimalist Athletic Architecture conforming to ISO 9241 Ergonomic Design Principles
 *
 * @package Kinetix_Fitness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'kinetix-body' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#kinetix-main-content">
    <?php esc_html_e( 'Skip to content', 'kinetix-fitness' ); ?>
</a>

<!-- Clean Announcement Ticker -->
<?php if ( get_theme_mod( 'kinetix_ticker_enabled', true ) ) : ?>
    <aside class="kinetix-ticker-bar" role="complementary" aria-label="<?php esc_attr_e( 'Announcement', 'kinetix-fitness' ); ?>">
        <div class="kinetix-container ticker-inner">
            <span class="ticker-badge">DISPATCH</span>
            <div class="ticker-marquee-text">
                <?php echo wp_kses_post( get_theme_mod( 'kinetix_ticker_text', 'Complimentary express delivery on domestic orders over $75 &middot; Use code FIRSTDROP at checkout' ) ); ?>
            </div>
            <button type="button" class="ticker-close" aria-label="<?php esc_attr_e( 'Close banner', 'kinetix-fitness' ); ?>">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6 6 18M6 6l12 12"/></svg>
            </button>
        </div>
    </aside>
<?php endif; ?>

<!-- Performance Fluid Island Header -->
<header id="kinetix-site-header" class="kinetix-header-wrap">
    <div class="kinetix-container">
        <nav class="kinetix-navbar" aria-label="<?php esc_attr_e( 'Main Navigation', 'kinetix-fitness' ); ?>">
            <!-- Brand Logo -->
            <div class="kinetix-brand-area">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="kinetix-logo" rel="home">
                        <span class="logo-mark">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        </span>
                        <span class="logo-text">KINETIX</span>
                        <span class="logo-sub">LAB</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Nav Links -->
            <div class="kinetix-nav-links-wrap">
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'kinetix-nav-list',
                        'fallback_cb'    => false,
                    ) );
                else :
                ?>
                <ul class="kinetix-nav-list">
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=mens-training' ) ); ?>" class="nav-link"><?php esc_html_e( 'Men', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=womens-activewear' ) ); ?>" class="nav-link"><?php esc_html_e( 'Women', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/shop/?cat=gym-gear-equipment' ) ); ?>" class="nav-link"><?php esc_html_e( 'Gear & Belts', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/lookbook/' ) ); ?>" class="nav-link"><?php esc_html_e( 'Lookbook', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>" class="nav-link"><?php esc_html_e( 'Size Protocol', 'kinetix-fitness' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nav-link"><?php esc_html_e( 'Support', 'kinetix-fitness' ); ?></a></li>
                </ul>
                <?php endif; ?>
            </div>

            <!-- Actions: Search & Shopping Bag Trigger -->
            <div class="kinetix-header-actions">
                <button type="button" class="kinetix-icon-btn" id="kinetix-search-btn" aria-label="<?php esc_attr_e( 'Search catalog', 'kinetix-fitness' ); ?>">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </button>

                <!-- Shopping Bag Button -->
                <button type="button" class="kinetix-bag-btn" id="kinetix-open-bag" aria-label="<?php esc_attr_e( 'View shopping bag', 'kinetix-fitness' ); ?>">
                    <span class="bag-icon-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    </span>
                    <span class="bag-label"><?php esc_html_e( 'Bag', 'kinetix-fitness' ); ?></span>
                    <span class="bag-count-badge" id="kinetix-cart-count">0</span>
                </button>

                <!-- Mobile Menu Button -->
                <button type="button" class="kinetix-hamburger" id="kinetix-mobile-btn" aria-label="<?php esc_attr_e( 'Toggle navigation', 'kinetix-fitness' ); ?>">
                    <span class="h-bar top"></span>
                    <span class="h-bar bottom"></span>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div id="kinetix-mobile-overlay" class="kinetix-mobile-nav" aria-hidden="true">
        <ul class="mobile-links-list">
            <li><a href="<?php echo esc_url( home_url( '/shop/?cat=mens-training' ) ); ?>"><?php esc_html_e( 'Men\'s Apparel', 'kinetix-fitness' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/shop/?cat=womens-activewear' ) ); ?>"><?php esc_html_e( 'Women\'s Activewear', 'kinetix-fitness' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/shop/?cat=gym-gear-equipment' ) ); ?>"><?php esc_html_e( 'Gear & Hardware', 'kinetix-fitness' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/lookbook/' ) ); ?>"><?php esc_html_e( 'Athlete Lookbook & Drops', 'kinetix-fitness' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/sizing/' ) ); ?>"><?php esc_html_e( 'Size Protocol & Measurements', 'kinetix-fitness' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Customer Support & Help', 'kinetix-fitness' ); ?></a></li>
        </ul>
        <div class="mobile-nav-note">
            <span>Shopify 256-bit Encrypted Checkout Protection</span>
        </div>
    </div>
</header>

<main id="kinetix-main-content" class="kinetix-main">
