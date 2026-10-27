<?php
/**
 * Kinetix Athletics functions and definitions
 *
 * @package Kinetix_Fitness
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'KINETIX_VERSION', '1.3.0' );
define( 'KINETIX_DIR', get_template_directory() );
define( 'KINETIX_URI', get_template_directory_uri() );

// Core Includes
require_once KINETIX_DIR . '/inc/custom-post-types.php';
require_once KINETIX_DIR . '/inc/customizer.php';
require_once KINETIX_DIR . '/inc/seo.php';
require_once KINETIX_DIR . '/inc/sample-data.php';

/**
 * Theme Setup
 */
function kinetix_setup() {
    load_theme_textdomain( 'kinetix-fitness', KINETIX_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 40,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Header Nav', 'kinetix-fitness' ),
        'footer'  => __( 'Footer Navigation', 'kinetix-fitness' ),
    ) );
}
add_action( 'after_setup_theme', 'kinetix_setup' );

/**
 * Enqueue Styles and Scripts
 */
function kinetix_enqueue_scripts() {
    // Fonts: Clean, non-stretchy, highly legible geometric sans (ISO 9241 ergonomic typography)
    wp_enqueue_style(
        'kinetix-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;700&display=swap',
        array(),
        null
    );

    // CSS
    wp_enqueue_style( 'kinetix-style', get_stylesheet_uri(), array(), KINETIX_VERSION );
    wp_enqueue_style( 'kinetix-theme-css', KINETIX_URI . '/assets/css/theme.css', array( 'kinetix-style' ), KINETIX_VERSION );
    wp_enqueue_style( 'kinetix-cart-css', KINETIX_URI . '/assets/css/cart-drawer.css', array( 'kinetix-theme-css' ), KINETIX_VERSION );

    // JS
    wp_enqueue_script(
        'kinetix-theme-js',
        KINETIX_URI . '/assets/js/theme.js',
        array(),
        KINETIX_VERSION,
        true
    );

    wp_enqueue_script(
        'kinetix-cart-js',
        KINETIX_URI . '/assets/js/cart-drawer.js',
        array( 'kinetix-theme-js' ),
        KINETIX_VERSION,
        true
    );

    // Localize config
    $config = array(
        'ajaxUrl'               => admin_url( 'admin-ajax.php' ),
        'nonce'                 => wp_create_nonce( 'kinetix_ajax_nonce' ),
        'shopifyDomain'         => get_theme_mod( 'kinetix_shopify_domain', 'kinetix-fitness.myshopify.com' ),
        'currencySymbol'        => get_theme_mod( 'kinetix_currency_symbol', '$' ),
        'freeShippingThreshold' => floatval( get_theme_mod( 'kinetix_free_shipping_threshold', 75.00 ) ),
        'homeUrl'               => home_url( '/' ),
        'shopUrl'               => home_url( '/#catalog' ),
    );
    wp_localize_script( 'kinetix-cart-js', 'kinetixConfig', $config );
}
add_action( 'wp_enqueue_scripts', 'kinetix_enqueue_scripts' );

/**
 * AJAX: Filter Products
 */
function kinetix_filter_products_ajax() {
    check_ajax_referer( 'kinetix_ajax_nonce', 'nonce' );

    $category = isset( $_POST['category'] ) ? sanitize_text_field( $_POST['category'] ) : '';
    $sort     = isset( $_POST['sort'] ) ? sanitize_text_field( $_POST['sort'] ) : 'featured';
    $search   = isset( $_POST['search'] ) ? sanitize_text_field( $_POST['search'] ) : '';

    $args = array(
        'post_type'      => 'fitness_product',
        'post_status'    => 'publish',
        'posts_per_page' => 12,
    );

    if ( ! empty( $search ) ) {
        $args['s'] = $search;
    }

    if ( ! empty( $category ) && 'all' !== $category ) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    switch ( $sort ) {
        case 'price_low':
            $args['meta_key'] = '_kinetix_price';
            $args['orderby']  = 'meta_value_num';
            $args['order']    = 'ASC';
            break;
        case 'price_high':
            $args['meta_key'] = '_kinetix_price';
            $args['orderby']  = 'meta_value_num';
            $args['order']    = 'DESC';
            break;
        case 'newest':
            $args['orderby'] = 'date';
            $args['order']   = 'DESC';
            break;
        case 'featured':
        default:
            $args['orderby'] = 'menu_order date';
            $args['order']   = 'DESC';
            break;
    }

    $query = new WP_Query( $args );

    ob_start();
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'parts/card-product' );
        }
    } else {
        ?>
        <div class="kinetix-empty-catalog">
            <span class="empty-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </span>
            <h3>No products found in this category</h3>
            <p>Try resetting filters or exploring all drops.</p>
        </div>
        <?php
    }
    wp_reset_postdata();

    $html = ob_get_clean();
    wp_send_json_success( array( 'html' => $html, 'count' => $query->found_posts ) );
}
add_action( 'wp_ajax_kinetix_filter_products', 'kinetix_filter_products_ajax' );
add_action( 'wp_ajax_nopriv_kinetix_filter_products', 'kinetix_filter_products_ajax' );
