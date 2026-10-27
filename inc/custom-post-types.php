<?php
/**
 * Custom Post Types & Taxonomies for Kinetix Athletics
 * High-Performance Fitness E-Commerce
 *
 * @package Kinetix_Fitness
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Type: fitness_product
 */
function kinetix_register_product_cpt() {
    $labels = array(
        'name'                  => _x( 'Fitness Products', 'Post Type General Name', 'kinetix-fitness' ),
        'singular_name'         => _x( 'Fitness Product', 'Post Type Singular Name', 'kinetix-fitness' ),
        'menu_name'             => __( 'Fitness Store', 'kinetix-fitness' ),
        'name_admin_bar'        => __( 'Product', 'kinetix-fitness' ),
        'all_items'             => __( 'All Products', 'kinetix-fitness' ),
        'add_new_item'          => __( 'Add New Product', 'kinetix-fitness' ),
        'add_new'               => __( 'Add Product', 'kinetix-fitness' ),
        'new_item'              => __( 'New Product', 'kinetix-fitness' ),
        'edit_item'             => __( 'Edit Product', 'kinetix-fitness' ),
        'update_item'           => __( 'Update Product', 'kinetix-fitness' ),
        'view_item'             => __( 'View Product', 'kinetix-fitness' ),
        'view_items'            => __( 'View Products', 'kinetix-fitness' ),
        'search_items'          => __( 'Search Products', 'kinetix-fitness' ),
        'featured_image'        => __( 'Product Photo', 'kinetix-fitness' ),
        'set_featured_image'    => __( 'Set product photo', 'kinetix-fitness' ),
        'remove_featured_image' => __( 'Remove product photo', 'kinetix-fitness' ),
        'use_featured_image'    => __( 'Use as product photo', 'kinetix-fitness' ),
    );

    $args = array(
        'label'               => __( 'Product', 'kinetix-fitness' ),
        'description'         => __( 'High-performance athletic apparel & gear', 'kinetix-fitness' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
        'taxonomies'          => array( 'product_cat', 'product_collection', 'product_badge' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-heart',
        'has_archive'         => 'shop',
        'rewrite'             => array( 'slug' => 'shop', 'with_front' => false ),
        'show_in_rest'        => true,
    );
    register_post_type( 'fitness_product', $args );
}
add_action( 'init', 'kinetix_register_product_cpt', 0 );

/**
 * Register Taxonomies: Categories & Collections
 */
function kinetix_register_taxonomies() {
    // Product Categories
    register_taxonomy( 'product_cat', array( 'fitness_product' ), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __( 'Categories', 'kinetix-fitness' ),
            'singular_name' => __( 'Category', 'kinetix-fitness' ),
            'menu_name'     => __( 'Categories', 'kinetix-fitness' ),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'category' ),
    ) );

    // Product Collections (e.g. Pro Elite, Velocity Run, Core Basics)
    register_taxonomy( 'product_collection', array( 'fitness_product' ), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __( 'Collections', 'kinetix-fitness' ),
            'singular_name' => __( 'Collection', 'kinetix-fitness' ),
            'menu_name'     => __( 'Collections', 'kinetix-fitness' ),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'collection' ),
    ) );

    // Product Badges (Bestseller, New Drop, Athlete Tested)
    register_taxonomy( 'product_badge', array( 'fitness_product' ), array(
        'hierarchical'      => false,
        'labels'            => array(
            'name'          => __( 'Badges', 'kinetix-fitness' ),
            'singular_name' => __( 'Badge', 'kinetix-fitness' ),
            'menu_name'     => __( 'Badges', 'kinetix-fitness' ),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'kinetix_register_taxonomies', 0 );

/**
 * Product Details & Shopify Meta Box
 */
function kinetix_add_product_meta_box() {
    add_meta_box(
        'kinetix_product_details_box',
        __( 'Fitness Product Specs & Shopify Integration', 'kinetix-fitness' ),
        'kinetix_render_product_meta_box',
        'fitness_product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'kinetix_add_product_meta_box' );

function kinetix_render_product_meta_box( $post ) {
    wp_nonce_field( 'kinetix_save_product_meta', 'kinetix_product_meta_nonce' );

    $price         = get_post_meta( $post->ID, '_kinetix_price', true );
    $sale_price    = get_post_meta( $post->ID, '_kinetix_sale_price', true );
    $subtitle      = get_post_meta( $post->ID, '_kinetix_subtitle', true );
    $shopify_id    = get_post_meta( $post->ID, '_kinetix_shopify_product_id', true );
    $variant_id    = get_post_meta( $post->ID, '_kinetix_shopify_variant_id', true );
    $sizes         = get_post_meta( $post->ID, '_kinetix_sizes', true ) ?: 'S, M, L, XL, XXL';
    $colors        = get_post_meta( $post->ID, '_kinetix_colors', true ) ?: 'Onyx Black:#111113, Volt Lime:#ccff00, Slate Grey:#4b5563';
    $specs         = get_post_meta( $post->ID, '_kinetix_fabric_specs', true );
    $benefits      = get_post_meta( $post->ID, '_kinetix_benefits', true );
    $rating        = get_post_meta( $post->ID, '_kinetix_rating', true ) ?: '4.9';
    $review_count  = get_post_meta( $post->ID, '_kinetix_review_count', true ) ?: '84';
    ?>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
        <div>
            <label><strong><?php _e( 'Regular Price ($ USD)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="number" step="0.01" name="kinetix_price" value="<?php echo esc_attr( $price ); ?>" style="width:100%;" placeholder="68.00">
        </div>
        <div>
            <label><strong><?php _e( 'Sale Price ($ USD, Optional)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="number" step="0.01" name="kinetix_sale_price" value="<?php echo esc_attr( $sale_price ); ?>" style="width:100%;" placeholder="52.00">
        </div>
        <div style="grid-column: span 2;">
            <label><strong><?php _e( 'Tagline / Fabric Subtitle', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_subtitle" value="<?php echo esc_attr( $subtitle ); ?>" style="width:100%;" placeholder="Seamless 4-Way Stretch Compression Tee">
        </div>
        <div>
            <label><strong><?php _e( 'Shopify Product ID / Handle', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_shopify_product_id" value="<?php echo esc_attr( $shopify_id ); ?>" style="width:100%;" placeholder="gid://shopify/Product/987654321">
        </div>
        <div>
            <label><strong><?php _e( 'Shopify Default Variant ID', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_shopify_variant_id" value="<?php echo esc_attr( $variant_id ); ?>" style="width:100%;" placeholder="variant-black-medium">
        </div>
        <div>
            <label><strong><?php _e( 'Available Sizes (Comma-separated)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_sizes" value="<?php echo esc_attr( $sizes ); ?>" style="width:100%;" placeholder="XS, S, M, L, XL, XXL">
        </div>
        <div>
            <label><strong><?php _e( 'Color Swatches (Format: Name:Hex, Name:Hex)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_colors" value="<?php echo esc_attr( $colors ); ?>" style="width:100%;" placeholder="Onyx Black:#111113, Volt Lime:#ccff00, Slate Grey:#4b5563">
        </div>
        <div>
            <label><strong><?php _e( 'Athlete Rating (e.g. 4.9)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="text" name="kinetix_rating" value="<?php echo esc_attr( $rating ); ?>" style="width:100%;">
        </div>
        <div>
            <label><strong><?php _e( 'Review Count (e.g. 142)', 'kinetix-fitness' ); ?></strong></label><br>
            <input type="number" name="kinetix_review_count" value="<?php echo esc_attr( $review_count ); ?>" style="width:100%;">
        </div>
        <div style="grid-column: span 2;">
            <label><strong><?php _e( 'Fabric & Technical Specifications (Key: Value, one per line)', 'kinetix-fitness' ); ?></strong></label><br>
            <textarea name="kinetix_fabric_specs" rows="4" style="width:100%;"><?php echo esc_textarea( $specs ); ?></textarea>
        </div>
        <div style="grid-column: span 2;">
            <label><strong><?php _e( 'Performance Benefits & Features (One per line)', 'kinetix-fitness' ); ?></strong></label><br>
            <textarea name="kinetix_benefits" rows="4" style="width:100%;"><?php echo esc_textarea( $benefits ); ?></textarea>
        </div>
    </div>
    <?php
}

function kinetix_save_product_meta( $post_id ) {
    if ( ! isset( $_POST['kinetix_product_meta_nonce'] ) || ! wp_verify_nonce( $_POST['kinetix_product_meta_nonce'], 'kinetix_save_product_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = array(
        'kinetix_price'              => 'sanitize_text_field',
        'kinetix_sale_price'         => 'sanitize_text_field',
        'kinetix_subtitle'           => 'sanitize_text_field',
        'kinetix_shopify_product_id' => 'sanitize_text_field',
        'kinetix_shopify_variant_id' => 'sanitize_text_field',
        'kinetix_sizes'              => 'sanitize_text_field',
        'kinetix_colors'             => 'sanitize_text_field',
        'kinetix_fabric_specs'       => 'sanitize_textarea_field',
        'kinetix_benefits'           => 'sanitize_textarea_field',
        'kinetix_rating'             => 'sanitize_text_field',
        'kinetix_review_count'       => 'sanitize_text_field',
    );

    foreach ( $fields as $field => $sanitizer ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, call_user_func( $sanitizer, $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_fitness_product', 'kinetix_save_product_meta' );

/**
 * Helper: Retrieve formatted product meta
 */
function kinetix_get_product_meta( $post_id = null ) {
    if ( ! $post_id ) $post_id = get_the_ID();

    $price        = get_post_meta( $post_id, '_kinetix_price', true );
    $sale_price   = get_post_meta( $post_id, '_kinetix_sale_price', true );
    $subtitle     = get_post_meta( $post_id, '_kinetix_subtitle', true );
    $shopify_id   = get_post_meta( $post_id, '_kinetix_shopify_product_id', true );
    $variant_id   = get_post_meta( $post_id, '_kinetix_shopify_variant_id', true );
    $sizes_raw    = get_post_meta( $post_id, '_kinetix_sizes', true ) ?: 'S, M, L, XL';
    $colors_raw   = get_post_meta( $post_id, '_kinetix_colors', true ) ?: 'Onyx Black:#0f172a, Electric Cobalt:#0066ff, Slate Grey:#64748b';
    $specs_raw    = get_post_meta( $post_id, '_kinetix_fabric_specs', true );
    $benefits_raw = get_post_meta( $post_id, '_kinetix_benefits', true );
    $rating       = get_post_meta( $post_id, '_kinetix_rating', true ) ?: '4.9';
    $review_count = get_post_meta( $post_id, '_kinetix_review_count', true ) ?: '84';
    $icon_type    = get_post_meta( $post_id, '_kinetix_icon_type', true ) ?: 'shirt';

    $sizes = array_filter( array_map( 'trim', explode( ',', $sizes_raw ) ) );

    $colors = array();
    foreach ( explode( ',', $colors_raw ) as $part ) {
        if ( strpos( $part, ':' ) !== false ) {
            list( $cname, $chex ) = explode( ':', $part, 2 );
            $colors[] = array( 'name' => trim( $cname ), 'hex' => trim( $chex ) );
        }
    }

    $benefits = array_filter( array_map( 'trim', explode( "\n", $benefits_raw ) ) );

    $specs = array();
    if ( ! empty( $specs_raw ) ) {
        foreach ( explode( "\n", $specs_raw ) as $line ) {
            if ( strpos( $line, ':' ) !== false ) {
                list( $k, $v ) = explode( ':', $line, 2 );
                $specs[ trim( $k ) ] = trim( $v );
            }
        }
    }

    return array(
        'price'        => $price ? floatval( $price ) : 68.00,
        'sale_price'   => $sale_price ? floatval( $sale_price ) : null,
        'has_sale'     => ( ! empty( $sale_price ) && floatval( $sale_price ) < floatval( $price ) ),
        'subtitle'     => $subtitle,
        'shopify_id'   => $shopify_id,
        'variant_id'   => $variant_id ?: 'variant-default',
        'sizes'        => $sizes,
        'colors'       => $colors,
        'specs'        => $specs,
        'benefits'     => $benefits,
        'rating'       => $rating,
        'reviews'      => $review_count,
        'icon_type'    => $icon_type,
    );
}

/**
 * Render Price HTML
 */
function kinetix_price_html( $price, $sale_price = null ) {
    $symbol = get_theme_mod( 'kinetix_currency_symbol', '$' );
    if ( ! empty( $sale_price ) && floatval( $sale_price ) < floatval( $price ) ) {
        return sprintf(
            '<span class="kinetix-price-sale">%1$s%2$s</span> <span class="kinetix-price-orig"><del>%1$s%3$s</del></span>',
            esc_html( $symbol ),
            number_format( floatval( $sale_price ), 2 ),
            number_format( floatval( $price ), 2 )
        );
    }
    return sprintf(
        '<span class="kinetix-price-reg">%1$s%2$s</span>',
        esc_html( $symbol ),
        number_format( floatval( $price ), 2 )
    );
}

/**
 * Render High-End Product Photography or Fallback Vector Illustration
 */
function kinetix_render_product_visual( $post_id = null, $classes = '' ) {
    if ( ! $post_id ) $post_id = get_the_ID();

    // 1. Check if WordPress standard featured image is attached
    if ( has_post_thumbnail( $post_id ) ) {
        echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => esc_attr( $classes . ' kinetix-product-photo' ) ) );
        return;
    }

    // 2. High-End Editorial Mock Photography Map
    $slug = get_post_field( 'post_name', $post_id );
    $meta = kinetix_get_product_meta( $post_id );
    
    $slug_to_image = array(
        'velocity-seamless-compression-tee'  => 'product-velocity-tee.jpg',
        'aura-high-rise-ribbed-leggings'     => 'product-aura-leggings.jpg',
        'apex-heavyweight-training-hoodie'   => 'product-apex-hoodie.jpg',
        'vanguard-2in1-performance-shorts'   => 'product-vanguard-shorts.jpg',
        'titan-competition-10mm-lever-belt'  => 'product-titan-belt.jpg',
        'hydrate-x-steel-athlete-shaker'     => 'product-hydrate-shaker.jpg',
        'pulse-pure-whey-isolate'            => 'product-pulse-whey.jpg',
        'kinetic-percussion-massage-gun-pro' => 'product-kinetic-gun.jpg',
    );

    $icon_to_image = array(
        'shirt'    => 'product-velocity-tee.jpg',
        'short'    => 'product-vanguard-shorts.jpg',
        'hoodie'   => 'product-apex-hoodie.jpg',
        'gear'     => 'product-titan-belt.jpg',
        'recovery' => 'product-pulse-whey.jpg',
    );

    $img_name = isset( $slug_to_image[ $slug ] ) ? $slug_to_image[ $slug ] : '';
    if ( empty( $img_name ) && isset( $icon_to_image[ $meta['icon_type'] ] ) ) {
        $img_name = $icon_to_image[ $meta['icon_type'] ];
    }

    if ( ! empty( $img_name ) ) {
        $img_path = get_template_directory() . '/assets/images/' . $img_name;
        $img_url  = get_template_directory_uri() . '/assets/images/' . $img_name;
        if ( file_exists( $img_path ) ) {
            ?>
            <div class="kinetix-photo-frame <?php echo esc_attr( $classes ); ?>">
                <img 
                    src="<?php echo esc_url( $img_url ); ?>" 
                    alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" 
                    class="kinetix-product-photo"
                    loading="lazy"
                >
                <div class="photo-scrim-gradient" aria-hidden="true"></div>
            </div>
            <?php
            return;
        }
    }

    // 3. Fallback Vector Illustration
    $title     = get_the_title( $post_id );
    $icon_type = $meta['icon_type'];
    $terms     = wp_get_post_terms( $post_id, 'product_cat' );
    $cat_name  = ! empty( $terms ) ? $terms[0]->name : 'ATHLETICS';
    ?>
    <div class="kinetix-visual-box <?php echo esc_attr( $classes ); ?>" data-type="<?php echo esc_attr( $icon_type ); ?>">
        <div class="kinetix-visual-grid-bg"></div>
        <div class="kinetix-visual-cat-tag"><?php echo esc_html( strtoupper( $cat_name ) ); ?></div>
        
        <div class="kinetix-gear-icon-wrapper">
            <?php if ( $icon_type === 'hoodie' || strpos( strtolower( $title ), 'hoodie' ) !== false ) : ?>
                <!-- Technical Hoodie Graphic -->
                <svg class="gear-svg" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M30 20 C30 10, 70 10, 70 20 L88 35 L76 48 L70 38 L70 88 L30 88 L30 38 L24 48 L12 35 Z" />
                    <path d="M40 22 C40 32, 60 32, 60 22" />
                    <line x1="50" y1="28" x2="50" y2="50" stroke-dasharray="3 3"/>
                </svg>
            <?php elseif ( $icon_type === 'short' || strpos( strtolower( $title ), 'short' ) !== false || strpos( strtolower( $title ), 'pant' ) !== false ) : ?>
                <!-- Compression Shorts Graphic -->
                <svg class="gear-svg" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 25 L78 25 L82 75 L56 75 L50 48 L44 75 L18 75 Z" />
                    <line x1="22" y1="33" x2="78" y2="33"/>
                    <line x1="50" y1="25" x2="50" y2="48" stroke-dasharray="2 2"/>
                </svg>
            <?php elseif ( $icon_type === 'gear' || strpos( strtolower( $title ), 'belt' ) !== false || strpos( strtolower( $title ), 'strap' ) !== false ) : ?>
                <!-- Weightlifting Belt & Grip Gear Graphic -->
                <svg class="gear-svg" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="15" y="32" width="70" height="36" rx="6" />
                    <rect x="25" y="38" width="16" height="24" rx="2" stroke-width="3" />
                    <circle cx="56" cy="50" r="3" fill="currentColor"/>
                    <circle cx="68" cy="50" r="3" fill="currentColor"/>
                </svg>
            <?php elseif ( $icon_type === 'recovery' || strpos( strtolower( $title ), 'protein' ) !== false || strpos( strtolower( $title ), 'pre-workout' ) !== false || strpos( strtolower( $title ), 'shaker' ) !== false ) : ?>
                <!-- Nutrition & Supplement Tub Graphic -->
                <svg class="gear-svg" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="30" y="15" width="40" height="12" rx="3" />
                    <path d="M24 27 L76 27 L72 88 L28 88 Z" />
                    <line x1="28" y1="50" x2="72" y2="50" stroke-width="1.5"/>
                    <path d="M42 62 L58 62 M50 54 L50 70" stroke-width="2.5"/>
                </svg>
            <?php else : ?>
                <!-- Compression Shirt / Athletic Top Graphic -->
                <svg class="gear-svg" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M35 15 C42 22, 58 22, 65 15 L88 28 L78 44 L70 36 L70 88 L30 88 L30 36 L22 44 L12 28 Z" />
                    <line x1="50" y1="20" x2="50" y2="40" stroke-dasharray="2 2"/>
                    <line x1="30" y1="80" x2="70" y2="80" stroke-dasharray="4 2"/>
                </svg>
            <?php endif; ?>
        </div>

        <div class="kinetix-visual-tech-specs">
            <span class="spec-label">HYDRO-SHIELD PRO</span>
            <span class="spec-tech">4-WAY COMPRESSION</span>
        </div>
    </div>
    <?php
}
