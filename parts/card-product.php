<?php
/**
 * Fitness Product Card Component
 * Features double-bezel framing, color swatch row, size quick-add, and Shopify checkout triggers.
 *
 * @package Kinetix_Fitness
 */

$post_id    = get_the_ID();
$meta       = kinetix_get_product_meta( $post_id );
$categories = wp_get_post_terms( $post_id, 'product_cat' );
$badges     = wp_get_post_terms( $post_id, 'product_badge' );

$primary_cat = ! empty( $categories ) ? $categories[0]->name : 'Apparel';
$badge_text  = ! empty( $badges ) ? $badges[0]->name : '';
$item_price  = $meta['sale_price'] ? $meta['sale_price'] : $meta['price'];
?>
<article class="kinetix-card-shell kinetix-reveal" data-product-id="<?php echo esc_attr( $post_id ); ?>">
    <div class="kinetix-card-inner">
        <!-- Visual Media Area with Glass Refraction Shine & Crosshairs -->
        <div class="kinetix-card-media-wrap">
            <div class="card-glass-shine" aria-hidden="true"></div>
            <span class="card-cad-crosshair ch-tl" aria-hidden="true">+</span>
            <span class="card-cad-crosshair ch-tr" aria-hidden="true">+</span>

            <a href="<?php the_permalink(); ?>" class="kinetix-card-media-link" aria-label="<?php the_title_attribute(); ?>">
                <?php kinetix_render_product_visual( $post_id, 'kinetix-card-thumb' ); ?>
            </a>

            <!-- Badge Overlays -->
            <div class="kinetix-card-badges">
                <?php if ( $badge_text ) : ?>
                    <span class="badge-pill badge-primary"><?php echo esc_html( $badge_text ); ?></span>
                <?php endif; ?>
                <?php if ( $meta['has_sale'] ) : ?>
                    <span class="badge-pill badge-sale">SALE</span>
                <?php endif; ?>
            </div>

            <!-- Quick Add Sizes Hover Bar -->
            <?php if ( ! empty( $meta['sizes'] ) ) : ?>
            <div class="kinetix-card-quick-sizes">
                <span class="quick-size-label">Quick Add:</span>
                <div class="quick-size-buttons">
                    <?php foreach ( $meta['sizes'] as $size ) : ?>
                        <button 
                            type="button" 
                            class="quick-size-btn kinetix-add-to-cart-trigger"
                            data-product-id="<?php echo esc_attr( $post_id ); ?>"
                            data-shopify-id="<?php echo esc_attr( $meta['shopify_id'] ); ?>"
                            data-variant-id="<?php echo esc_attr( $meta['variant_id'] . '-' . strtolower( sanitize_title( $size ) ) ); ?>"
                            data-title="<?php echo esc_attr( get_the_title() ); ?>"
                            data-size="<?php echo esc_attr( $size ); ?>"
                            data-color="<?php echo esc_attr( ! empty( $meta['colors'] ) ? $meta['colors'][0]['name'] : 'Standard' ); ?>"
                            data-price="<?php echo esc_attr( $item_price ); ?>"
                            title="Add Size <?php echo esc_attr( $size ); ?> to Bag"
                        >
                            <?php echo esc_html( $size ); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- Product Card Body -->
        <div class="kinetix-card-body">
            <!-- Category & Athlete Rating Row -->
            <div class="kinetix-card-meta-row">
                <span class="kinetix-cat-name"><?php echo esc_html( $primary_cat ); ?></span>
                <div class="kinetix-rating-pill">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <span class="rating-val"><?php echo esc_html( $meta['rating'] ); ?></span>
                    <span class="reviews-count">(<?php echo esc_html( $meta['reviews'] ); ?>)</span>
                </div>
            </div>

            <!-- Product Title -->
            <h3 class="kinetix-card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <!-- Subtitle -->
            <?php if ( ! empty( $meta['subtitle'] ) ) : ?>
                <p class="kinetix-card-subtitle"><?php echo esc_html( $meta['subtitle'] ); ?></p>
            <?php endif; ?>

            <!-- Color Swatches Row -->
            <?php if ( ! empty( $meta['colors'] ) ) : ?>
            <div class="kinetix-card-swatches">
                <?php foreach ( $meta['colors'] as $cIndex => $col ) : ?>
                    <span 
                        class="color-swatch-dot <?php echo ( $cIndex === 0 ) ? 'active' : ''; ?>" 
                        style="--swatch-hex: <?php echo esc_attr( $col['hex'] ); ?>;" 
                        title="<?php echo esc_attr( $col['name'] ); ?>"
                    ></span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Price & Add Button Row -->
            <div class="kinetix-card-footer">
                <div class="kinetix-card-price">
                    <?php echo kinetix_price_html( $meta['price'], $meta['sale_price'] ); ?>
                </div>

                <button 
                    type="button" 
                    class="kinetix-btn-cart kinetix-add-to-cart-trigger"
                    data-product-id="<?php echo esc_attr( $post_id ); ?>"
                    data-shopify-id="<?php echo esc_attr( $meta['shopify_id'] ); ?>"
                    data-variant-id="<?php echo esc_attr( $meta['variant_id'] ); ?>"
                    data-title="<?php echo esc_attr( get_the_title() ); ?>"
                    data-size="<?php echo esc_attr( ! empty( $meta['sizes'] ) ? $meta['sizes'][0] : 'M' ); ?>"
                    data-color="<?php echo esc_attr( ! empty( $meta['colors'] ) ? $meta['colors'][0]['name'] : 'Onyx Black' ); ?>"
                    data-price="<?php echo esc_attr( $item_price ); ?>"
                >
                    <span>Add to Bag</span>
                    <span class="btn-arrow-circle plus">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</article>
