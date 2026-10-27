<?php
/**
 * WordPress Customizer Settings for Kinetix Athletics
 *
 * @package Kinetix_Fitness
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function kinetix_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'kinetix_panel', array(
        'title'       => __( 'Kinetix Brand & Shopify Settings', 'kinetix-fitness' ),
        'description' => __( 'Configure Shopify checkout, free shipping threshold, and athletic announcements.', 'kinetix-fitness' ),
        'priority'    => 20,
    ) );

    // SECTION 1: Shopify Commerce Settings
    $wp_customize->add_section( 'kinetix_shopify_section', array(
        'title'    => __( 'Shopify E-Commerce & Checkout', 'kinetix-fitness' ),
        'panel'    => 'kinetix_panel',
        'priority' => 10,
    ) );

    $wp_customize->add_setting( 'kinetix_shopify_domain', array(
        'default'           => 'kinetix-fitness.myshopify.com',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_shopify_domain', array(
        'label'       => __( 'Shopify Store Domain', 'kinetix-fitness' ),
        'description' => __( 'Your Shopify domain (e.g. kinetix.myshopify.com or shop.kinetixathletics.com)', 'kinetix-fitness' ),
        'section'     => 'kinetix_shopify_section',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_shopify_token', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_shopify_token', array(
        'label'       => __( 'Shopify Storefront API Access Token', 'kinetix-fitness' ),
        'description' => __( 'Public storefront token from Shopify App Settings.', 'kinetix-fitness' ),
        'section'     => 'kinetix_shopify_section',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_currency_symbol', array(
        'default'           => '$',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_currency_symbol', array(
        'label'    => __( 'Currency Symbol', 'kinetix-fitness' ),
        'section'  => 'kinetix_shopify_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_free_shipping_threshold', array(
        'default'           => '75.00',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_free_shipping_threshold', array(
        'label'       => __( 'Free Shipping Meter Threshold ($)', 'kinetix-fitness' ),
        'description' => __( 'Dollar amount required to unlock free shipping in the slide-out bag.', 'kinetix-fitness' ),
        'section'     => 'kinetix_shopify_section',
        'type'        => 'number',
    ) );

    // SECTION 2: Top Announcement Ticker
    $wp_customize->add_section( 'kinetix_ticker_section', array(
        'title'    => __( 'Athletic Announcement Ticker', 'kinetix-fitness' ),
        'panel'    => 'kinetix_panel',
        'priority' => 20,
    ) );

    $wp_customize->add_setting( 'kinetix_ticker_enabled', array(
        'default'           => true,
        'sanitize_callback' => 'kinetix_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'kinetix_ticker_enabled', array(
        'label'    => __( 'Show Top Announcement Bar', 'kinetix-fitness' ),
        'section'  => 'kinetix_ticker_section',
        'type'     => 'checkbox',
    ) );

    $wp_customize->add_setting( 'kinetix_ticker_text', array(
        'default'           => 'WORLDWIDE EXPRESS SHIPPING · COMPLIMENTARY HYDRATION SYSTEM ON ORDERS OVER $75 · USE CODE: KINETIX15',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'kinetix_ticker_text', array(
        'label'    => __( 'Announcement Bar Text', 'kinetix-fitness' ),
        'section'  => 'kinetix_ticker_section',
        'type'     => 'textarea',
    ) );

    // SECTION 3: Hero Banner
    $wp_customize->add_section( 'kinetix_hero_section', array(
        'title'    => __( 'Homepage Hero Banner', 'kinetix-fitness' ),
        'panel'    => 'kinetix_panel',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'kinetix_hero_badge', array(
        'default'           => 'SERIES 04 / WINTER COLLECTION',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_hero_badge', array(
        'label'    => __( 'Hero Badge Tag', 'kinetix-fitness' ),
        'section'  => 'kinetix_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_hero_title', array(
        'default'           => 'ENGINEERED FOR HEAVY DAYS.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_hero_title', array(
        'label'    => __( 'Hero Title', 'kinetix-fitness' ),
        'section'  => 'kinetix_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_hero_subtitle', array(
        'default'           => 'Grade-2 compression apparel, 10mm tournament lever belts, and 480 GSM French Terry warmups. Built for athletes who train with relentless intent.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'kinetix_hero_subtitle', array(
        'label'    => __( 'Hero Subtitle', 'kinetix-fitness' ),
        'section'  => 'kinetix_hero_section',
        'type'     => 'textarea',
    ) );

    // SECTION 4: Search Engine Optimization (SEO) & Social Graph
    $wp_customize->add_section( 'kinetix_seo_section', array(
        'title'    => __( 'SEO, Schema & Social Graph', 'kinetix-fitness' ),
        'panel'    => 'kinetix_panel',
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'kinetix_seo_meta_desc', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'kinetix_seo_meta_desc', array(
        'label'       => __( 'Default Meta Description', 'kinetix-fitness' ),
        'description' => __( 'Appears in Google SERP results for the homepage and default social shares (150-160 characters recommended).', 'kinetix-fitness' ),
        'section'     => 'kinetix_seo_section',
        'type'        => 'textarea',
    ) );

    $wp_customize->add_setting( 'kinetix_seo_twitter_handle', array(
        'default'           => '@kinetixathletics',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_seo_twitter_handle', array(
        'label'       => __( 'Twitter / X Handle', 'kinetix-fitness' ),
        'description' => __( 'Used for twitter:site and twitter:creator metadata cards.', 'kinetix-fitness' ),
        'section'     => 'kinetix_seo_section',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_seo_google_verification', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_seo_google_verification', array(
        'label'       => __( 'Google Search Console Verification Token', 'kinetix-fitness' ),
        'description' => __( 'Enter the content string from your google-site-verification meta tag.', 'kinetix-fitness' ),
        'section'     => 'kinetix_seo_section',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'kinetix_seo_bing_verification', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'kinetix_seo_bing_verification', array(
        'label'       => __( 'Bing Webmaster Tools Verification Token', 'kinetix-fitness' ),
        'description' => __( 'Enter the content string from your msvalidate.01 meta tag.', 'kinetix-fitness' ),
        'section'     => 'kinetix_seo_section',
        'type'        => 'text',
    ) );
}
add_action( 'customize_register', 'kinetix_customize_register' );

function kinetix_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
