<?php
/**
 * SEO & Schema.org Structured Data Architecture for Kinetix Athletics
 *
 * Implements high-performance Search Engine Optimization (SEO), Open Graph protocol,
 * Twitter Cards, Google Rich Results Schema.org JSON-LD (Product, Offer, AggregateRating,
 * Organization, WebSite SearchAction, BreadcrumbList, FAQPage), and Core Web Vitals resource hints.
 *
 * Compatible with third-party SEO plugins (Yoast, Rank Math, SEOPress, AIOSEO) with automatic graceful fallback.
 *
 * @package Kinetix_Fitness
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Detect if a dedicated third-party SEO plugin is active.
 *
 * @return bool
 */
function kinetix_has_active_seo_plugin() {
    return defined( 'WPSEO_VERSION' )        // Yoast SEO
        || defined( 'RANK_MATH_VERSION' )    // Rank Math SEO
        || defined( 'AIOSEO_VERSION' )       // All In One SEO
        || function_exists( 'seopress_init' ) // SEOPress
        || defined( 'THE_SEO_FRAMEWORK_VERSION' ); // The SEO Framework
}

/**
 * Resolve centralized SEO metadata for the current query context.
 *
 * @return array
 */
function kinetix_get_seo_meta() {
    $site_name = get_bloginfo( 'name' );
    $site_desc = get_bloginfo( 'description' );
    if ( empty( $site_desc ) ) {
        $site_desc = __( 'Engineered training apparel, 10mm IPF steerhide lever belts, and circular-knit compression gear. Built for athletes who train with relentless intent.', 'kinetix-fitness' );
    }

    $default_og_image = get_theme_mod( 'kinetix_seo_og_image', '' );
    if ( empty( $default_og_image ) ) {
        $default_og_image = get_template_directory_uri() . '/assets/images/hero-athlete.jpg';
    }

    $meta = array(
        'title'          => '',
        'description'    => '',
        'canonical'      => '',
        'og_type'        => 'website',
        'image'          => $default_og_image,
        'image_width'    => 1200,
        'image_height'   => 900,
        'image_alt'      => $site_name,
        'product_price'  => '',
        'product_curr'   => get_theme_mod( 'kinetix_currency_code', 'USD' ),
        'product_avail'  => 'in stock',
        'product_sku'    => '',
        'product_brand'  => 'Kinetix Athletics',
    );

    // Context: Front Page / Home
    if ( is_front_page() || is_home() ) {
        $custom_desc = get_theme_mod( 'kinetix_seo_meta_desc', '' );
        $meta['title']       = $site_name . ' &mdash; ' . __( 'Engineered Training Apparel & Lifting Gear', 'kinetix-fitness' );
        $meta['description'] = ! empty( $custom_desc ) ? $custom_desc : $site_desc;
        $meta['canonical']   = home_url( '/' );
        $meta['og_type']     = 'website';
        return $meta;
    }

    // Context: Singular Fitness Product (PDP)
    if ( is_singular( 'fitness_product' ) ) {
        $post_id    = get_the_ID();
        $prod_meta  = function_exists( 'kinetix_get_product_meta' ) ? kinetix_get_product_meta( $post_id ) : array();
        $price      = ! empty( $prod_meta['sale_price'] ) ? $prod_meta['sale_price'] : ( ! empty( $prod_meta['price'] ) ? $prod_meta['price'] : '68.00' );
        $subtitle   = ! empty( $prod_meta['subtitle'] ) ? $prod_meta['subtitle'] : '';

        $title = get_the_title( $post_id );
        $meta['title']          = $title . ' &mdash; ' . __( 'Athletic Performance Gear', 'kinetix-fitness' ) . ' &middot; ' . $site_name;
        $meta['og_type']        = 'product';
        $meta['canonical']      = get_permalink( $post_id );
        $meta['product_price']  = number_format( (float) $price, 2, '.', '' );
        $meta['product_sku']    = 'KX-' . $post_id;

        // Description: Excerpt or dynamic specs summary
        if ( has_excerpt( $post_id ) ) {
            $meta['description'] = wp_strip_all_tags( get_the_excerpt( $post_id ) );
        } elseif ( ! empty( $subtitle ) ) {
            $meta['description'] = wp_strip_all_tags( $title . ' - ' . $subtitle . '. Available now at Kinetix Athletics with complimentary express dispatch over $75.' );
        } else {
            $meta['description'] = wp_strip_all_tags( $title . ' - High-performance training gear engineered for barbell work and athletic conditioning. Shop now at Kinetix Athletics.' );
        }

        // Product image
        if ( has_post_thumbnail( $post_id ) ) {
            $thumb_id = get_post_thumbnail_id( $post_id );
            $img_data = wp_get_attachment_image_src( $thumb_id, 'full' );
            if ( $img_data ) {
                $meta['image']        = $img_data[0];
                $meta['image_width']  = $img_data[1];
                $meta['image_height'] = $img_data[2];
                $meta['image_alt']    = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) ?: $title;
            }
        }
        return $meta;
    }

    // Context: Standard Singular Page or Post
    if ( is_singular() ) {
        $post_id = get_the_ID();
        $title   = get_the_title( $post_id );
        $meta['title']     = $title . ' &middot; ' . $site_name;
        $meta['canonical'] = get_permalink( $post_id );
        $meta['og_type']   = is_single() ? 'article' : 'website';

        if ( has_excerpt( $post_id ) ) {
            $meta['description'] = wp_strip_all_tags( get_the_excerpt( $post_id ) );
        } else {
            $content = get_post_field( 'post_content', $post_id );
            $clean   = wp_strip_all_tags( strip_shortcodes( $content ) );
            $meta['description'] = ! empty( $clean ) ? wp_trim_words( $clean, 25, '...' ) : $site_desc;
        }

        if ( has_post_thumbnail( $post_id ) ) {
            $thumb_id = get_post_thumbnail_id( $post_id );
            $img_data = wp_get_attachment_image_src( $thumb_id, 'full' );
            if ( $img_data ) {
                $meta['image']        = $img_data[0];
                $meta['image_width']  = $img_data[1];
                $meta['image_height'] = $img_data[2];
                $meta['image_alt']    = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) ?: $title;
            }
        }
        return $meta;
    }

    // Context: Product Category Taxonomy Archive
    if ( is_tax( 'product_cat' ) ) {
        $term = get_queried_object();
        $meta['title']       = $term->name . ' &mdash; ' . __( 'Athletic Roster', 'kinetix-fitness' ) . ' &middot; ' . $site_name;
        $meta['canonical']   = get_term_link( $term );
        $meta['description'] = ! empty( $term->description ) ? wp_strip_all_tags( $term->description ) : sprintf( __( 'Explore %s engineered for heavy strength and conditioning workouts at Kinetix Athletics.', 'kinetix-fitness' ), $term->name );
        return $meta;
    }

    // Fallback Archive or Search
    if ( is_search() ) {
        $meta['title']       = sprintf( __( 'Search results for "%s"', 'kinetix-fitness' ), get_search_query() ) . ' &middot; ' . $site_name;
        $meta['canonical']   = home_url( '/?s=' . rawurlencode( get_search_query() ) );
        $meta['description'] = sprintf( __( 'Browse athletic apparel and lifting gear search results for "%s".', 'kinetix-fitness' ), get_search_query() );
        return $meta;
    }

    $meta['title']       = wp_get_document_title();
    $meta['canonical']   = home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );
    $meta['description'] = $site_desc;
    return $meta;
}

/**
 * Output Core Web Vitals Resource Hints (DNS Prefetch & Preconnect).
 */
function kinetix_seo_resource_hints() {
    ?>
    <!-- Kinetix Core Web Vitals Resource Hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.shopify.com">
    <?php
}
add_action( 'wp_head', 'kinetix_seo_resource_hints', 1 );

/**
 * Render Head Meta Tags: Canonical, Robots, Open Graph, and Twitter Cards.
 */
function kinetix_render_seo_meta_tags() {
    // Graceful coexistence: If a full third-party SEO plugin is active, it handles head meta tags.
    if ( kinetix_has_active_seo_plugin() ) {
        return;
    }

    $meta = kinetix_get_seo_meta();
    $twitter_handle = get_theme_mod( 'kinetix_seo_twitter_handle', '@kinetixathletics' );
    $google_verify  = get_theme_mod( 'kinetix_seo_google_verification', '' );
    $bing_verify    = get_theme_mod( 'kinetix_seo_bing_verification', '' );
    ?>

    <!-- Kinetix Athletics Autonomous SEO Engine -->
    <link rel="canonical" href="<?php echo esc_url( $meta['canonical'] ); ?>">
    <meta name="description" content="<?php echo esc_attr( $meta['description'] ); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Open Graph Protocol (Facebook, LinkedIn, iMessage) -->
    <meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    <meta property="og:type" content="<?php echo esc_attr( $meta['og_type'] ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $meta['title'] ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( $meta['description'] ); ?>">
    <meta property="og:url" content="<?php echo esc_url( $meta['canonical'] ); ?>">
    <meta property="og:locale" content="<?php echo esc_attr( get_locale() ); ?>">
    <meta property="og:image" content="<?php echo esc_url( $meta['image'] ); ?>">
    <meta property="og:image:width" content="<?php echo esc_attr( $meta['image_width'] ); ?>">
    <meta property="og:image:height" content="<?php echo esc_attr( $meta['image_height'] ); ?>">
    <meta property="og:image:alt" content="<?php echo esc_attr( $meta['image_alt'] ); ?>">

    <?php if ( 'product' === $meta['og_type'] && ! empty( $meta['product_price'] ) ) : ?>
        <!-- E-Commerce Open Graph Extensions -->
        <meta property="product:price:amount" content="<?php echo esc_attr( $meta['product_price'] ); ?>">
        <meta property="product:price:currency" content="<?php echo esc_attr( $meta['product_curr'] ); ?>">
        <meta property="product:availability" content="<?php echo esc_attr( $meta['product_avail'] ); ?>">
        <meta property="product:brand" content="<?php echo esc_attr( $meta['product_brand'] ); ?>">
        <meta property="product:condition" content="new">
        <?php if ( ! empty( $meta['product_sku'] ) ) : ?>
            <meta property="product:retailer_item_id" content="<?php echo esc_attr( $meta['product_sku'] ); ?>">
        <?php endif; ?>
    <?php endif; ?>

    <!-- Twitter Cards (X Platform) -->
    <meta name="twitter:card" content="summary_large_image">
    <?php if ( ! empty( $twitter_handle ) ) : ?>
        <meta name="twitter:site" content="<?php echo esc_attr( $twitter_handle ); ?>">
        <meta name="twitter:creator" content="<?php echo esc_attr( $twitter_handle ); ?>">
    <?php endif; ?>
    <meta name="twitter:title" content="<?php echo esc_attr( $meta['title'] ); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr( $meta['description'] ); ?>">
    <meta name="twitter:image" content="<?php echo esc_url( $meta['image'] ); ?>">
    <meta name="twitter:image:alt" content="<?php echo esc_attr( $meta['image_alt'] ); ?>">

    <?php if ( ! empty( $google_verify ) ) : ?>
        <!-- Search Console Verification -->
        <meta name="google-site-verification" content="<?php echo esc_attr( $google_verify ); ?>">
    <?php endif; ?>

    <?php if ( ! empty( $bing_verify ) ) : ?>
        <!-- Bing Webmaster Verification -->
        <meta name="msvalidate.01" content="<?php echo esc_attr( $bing_verify ); ?>">
    <?php endif; ?>

    <?php
}
add_action( 'wp_head', 'kinetix_render_seo_meta_tags', 1 );

/**
 * Output Schema.org JSON-LD Structured Data Graph.
 * Generates rich Google SERP qualification for Organization, Sitelinks SearchBox,
 * BreadcrumbList, Product Offer/Rating, ItemList, and FAQPage.
 */
function kinetix_render_json_ld_schema() {
    $site_name = get_bloginfo( 'name' );
    $home_url  = home_url( '/' );

    $graph = array();

    // 1. Organization & Athletic Brand Schema
    $logo_url = get_template_directory_uri() . '/screenshot.png';
    if ( has_custom_logo() ) {
        $logo_id = get_theme_mod( 'custom_logo' );
        $logo_data = wp_get_attachment_image_src( $logo_id, 'full' );
        if ( $logo_data ) {
            $logo_url = $logo_data[0];
        }
    }

    $graph[] = array(
        '@type'        => 'Organization',
        '@id'          => $home_url . '#organization',
        'name'         => $site_name,
        'url'          => $home_url,
        'logo'         => array(
            '@type'      => 'ImageObject',
            '@id'        => $home_url . '#logo',
            'inLanguage' => get_locale(),
            'url'        => $logo_url,
            'caption'    => $site_name,
        ),
        'description'  => __( 'High-performance athletic apparel, 10mm steerhide powerlifting belts, and recovery systems.', 'kinetix-fitness' ),
        'sameAs'       => array(
            'https://instagram.com/kinetixathletics',
            'https://youtube.com/@kinetixathletics',
            'https://twitter.com/kinetixathletics',
            'https://strava.com/clubs/kinetixathletics',
        ),
        'contactPoint' => array(
            '@type'       => 'ContactPoint',
            'contactType' => 'customer service',
            'url'         => home_url( '/contact/' ),
            'availableLanguage' => array( 'English' ),
        ),
    );

    // 2. WebSite Schema with Sitelinks SearchAction
    $graph[] = array(
        '@type'           => 'WebSite',
        '@id'             => $home_url . '#website',
        'url'             => $home_url,
        'name'            => $site_name,
        'publisher'       => array(
            '@id' => $home_url . '#organization',
        ),
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => array(
                '@type'       => 'EntryPoint',
                'urlTemplate' => $home_url . '?s={search_term_string}',
            ),
            'query-input' => 'required name=search_term_string',
        ),
    );

    // 3. BreadcrumbList Schema (Every page and product)
    $breadcrumbs = array();
    $breadcrumbs[] = array(
        '@type'    => 'ListItem',
        'position' => 1,
        'name'     => __( 'Home', 'kinetix-fitness' ),
        'item'     => $home_url,
    );

    if ( is_singular( 'fitness_product' ) ) {
        $breadcrumbs[] = array(
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => __( 'Shop Catalog', 'kinetix-fitness' ),
            'item'     => home_url( '/shop/' ),
        );
        $breadcrumbs[] = array(
            '@type'    => 'ListItem',
            'position' => 3,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        );
    } elseif ( is_page() && ! is_front_page() ) {
        $breadcrumbs[] = array(
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        );
    } elseif ( is_tax( 'product_cat' ) ) {
        $term = get_queried_object();
        $breadcrumbs[] = array(
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => __( 'Shop Catalog', 'kinetix-fitness' ),
            'item'     => home_url( '/shop/' ),
        );
        $breadcrumbs[] = array(
            '@type'    => 'ListItem',
            'position' => 3,
            'name'     => $term->name,
            'item'     => get_term_link( $term ),
        );
    }

    if ( count( $breadcrumbs ) > 1 ) {
        $graph[] = array(
            '@type'           => 'BreadcrumbList',
            '@id'             => get_permalink() . '#breadcrumb',
            'itemListElement' => $breadcrumbs,
        );
    }

    // 4. E-Commerce Product & Offer Schema (Single Product PDP)
    if ( is_singular( 'fitness_product' ) ) {
        $post_id   = get_the_ID();
        $prod_meta = function_exists( 'kinetix_get_product_meta' ) ? kinetix_get_product_meta( $post_id ) : array();
        $price     = ! empty( $prod_meta['sale_price'] ) ? $prod_meta['sale_price'] : ( ! empty( $prod_meta['price'] ) ? $prod_meta['price'] : '68.00' );
        $rating    = ! empty( $prod_meta['rating'] ) ? floatval( $prod_meta['rating'] ) : 4.9;
        $reviews   = ! empty( $prod_meta['review_count'] ) ? intval( $prod_meta['review_count'] ) : 84;
        $sku       = 'KX-' . $post_id;

        $img_url = get_template_directory_uri() . '/assets/images/product-velocity-tee.jpg';
        if ( has_post_thumbnail( $post_id ) ) {
            $img_url = get_the_post_thumbnail_url( $post_id, 'full' );
        }

        $graph[] = array(
            '@type'           => 'Product',
            '@id'             => get_permalink( $post_id ) . '#product',
            'name'            => get_the_title( $post_id ),
            'url'             => get_permalink( $post_id ),
            'image'           => array( $img_url ),
            'description'     => wp_strip_all_tags( get_the_excerpt( $post_id ) ?: get_the_title( $post_id ) . ' by Kinetix Athletics' ),
            'sku'             => $sku,
            'mpn'             => $sku,
            'brand'           => array(
                '@type' => 'Brand',
                'name'  => 'Kinetix Athletics',
            ),
            'aggregateRating' => array(
                '@type'       => 'AggregateRating',
                'ratingValue' => $rating,
                'reviewCount' => $reviews,
                'bestRating'  => '5',
                'worstRating' => '1',
            ),
            'offers'          => array(
                '@type'           => 'Offer',
                'url'             => get_permalink( $post_id ),
                'priceCurrency'   => 'USD',
                'price'           => number_format( (float) $price, 2, '.', '' ),
                'priceValidUntil' => gmdate( 'Y-12-31', strtotime( '+1 year' ) ),
                'itemCondition'   => 'https://schema.org/NewCondition',
                'availability'    => 'https://schema.org/InStock',
                'seller'          => array(
                    '@id' => $home_url . '#organization',
                ),
                'shippingDetails' => array(
                    '@type'               => 'OfferShippingDetails',
                    'shippingRate'        => array(
                        '@type'    => 'MonetaryAmount',
                        'value'    => '0.00',
                        'currency' => 'USD',
                    ),
                    'shippingDestination' => array(
                        '@type'          => 'DefinedRegion',
                        'addressCountry' => array( 'US', 'CA', 'GB', 'DE', 'AU', 'JP' ),
                    ),
                    'deliveryTime'        => array(
                        '@type'        => 'ShippingDeliveryTime',
                        'transitTime'  => array(
                            '@type'    => 'QuantitativeValue',
                            'minValue' => 1,
                            'maxValue' => 3,
                            'unitCode' => 'd',
                        ),
                    ),
                ),
            ),
        );
    }

    // 5. ItemList Product Carousel Schema (Shop Catalog Page)
    if ( ( function_exists( 'is_page_template' ) && is_page_template( 'page-shop.php' ) ) || ( function_exists( 'is_post_type_archive' ) && is_post_type_archive( 'fitness_product' ) ) ) {
        $catalog_items = array();
        $query_args = array(
            'post_type'      => 'fitness_product',
            'post_status'    => 'publish',
            'posts_per_page' => 10,
            'orderby'        => 'menu_order date',
            'order'          => 'DESC',
        );
        $products = get_posts( $query_args );
        $pos = 1;
        foreach ( $products as $prod ) {
            $catalog_items[] = array(
                '@type'    => 'ListItem',
                'position' => $pos,
                'name'     => $prod->post_title,
                'url'      => get_permalink( $prod->ID ),
            );
            $pos++;
        }
        if ( ! empty( $catalog_items ) ) {
            $graph[] = array(
                '@type'           => 'ItemList',
                'name'            => __( 'Kinetix Fitness Equipment & Apparel Roster', 'kinetix-fitness' ),
                'numberOfItems'   => count( $catalog_items ),
                'itemListElement' => $catalog_items,
            );
        }
    }

    // 6. FAQPage Schema (Support / Contact Page)
    if ( function_exists( 'is_page_template' ) && is_page_template( 'page-contact.php' ) ) {
        $graph[] = array(
            '@type'      => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type'          => 'Question',
                    'name'           => 'How does the 30-Day Fit Guarantee function for compression apparel?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'We encourage trying your compression garments in your training environment. If the compression gradient feels either too compressive or insufficient, we provide an instant pre-paid digital exchange label for the adjacent size. Garments must be unwashed with original tags intact.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'What does the TITAN 10mm Lever Belt Lifetime Warranty cover?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'The magnesium-zinc alloy quick-flick lever mechanism and top-grain steerhide structure are warranted against structural breakage, stripping, or mechanical failure indefinitely under normal barbell and lifting usage. We replace any damaged lever clamp free of charge.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Can I sync my order with Shopify Shop Pay and Apple Pay?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes. Our e-commerce bridge connects directly to Shopify PCI Level-1 certified infrastructure. You can check out with one click using Shop Pay, Apple Pay, Google Pay, or any major credit card, complete with end-to-end delivery tracking inside the Shop app.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Do you support team, university, and commercial gym roster orders?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes. For collegiate athletic programs, powerlifting clubs, and CrossFit boxes ordering 10 or more belts or team compression kits, select Commercial Gym & Team Roster in our routing menu to connect with our bulk allocations team.',
                    ),
                ),
            ),
        );
    }

    if ( empty( $graph ) ) {
        return;
    }

    $schema_output = array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph,
    );

    echo "\n" . '<!-- Kinetix Schema.org JSON-LD Structured Data -->' . "\n";
    echo '<script type="application/ld+json">' . "\n";
    echo wp_json_encode( $schema_output, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "\n";
    echo '</script>' . "\n";
}
add_action( 'wp_head', 'kinetix_render_json_ld_schema', 20 );

/**
 * Filter Document Title Separator.
 *
 * @param string $sep Default separator.
 * @return string
 */
function kinetix_seo_title_separator( $sep ) {
    return '·';
}
add_filter( 'document_title_separator', 'kinetix_seo_title_separator' );

/**
 * Filter Document Title Parts for High SERP Click-Through Rates (CTR).
 *
 * @param array $title Parts of the document title.
 * @return array
 */
function kinetix_seo_title_parts( $title ) {
    if ( is_front_page() ) {
        $title['title']   = get_bloginfo( 'name' );
        $title['tagline'] = __( 'Engineered Training Apparel & Lifting Gear', 'kinetix-fitness' );
    } elseif ( is_singular( 'fitness_product' ) ) {
        $title['tagline'] = __( 'Kinetix Athletics', 'kinetix-fitness' );
    }
    return $title;
}
add_filter( 'document_title_parts', 'kinetix_seo_title_parts' );
