<?php
/**
 * Single Fitness Product Template: single-fitness_product.php
 *
 * @package Kinetix_Fitness
 */

get_header();

$post_id    = get_the_ID();
$meta       = kinetix_get_product_meta( $post_id );
$categories = wp_get_post_terms( $post_id, 'product_cat' );
$badges     = wp_get_post_terms( $post_id, 'product_badge' );

$primary_cat = ! empty( $categories ) ? $categories[0]->name : 'Apparel';
$item_price  = $meta['sale_price'] ? $meta['sale_price'] : $meta['price'];
$default_color = ! empty( $meta['colors'] ) ? $meta['colors'][0]['name'] : 'Onyx Black';
$default_size  = ! empty( $meta['sizes'] ) ? $meta['sizes'][0] : 'M';
?>

<div class="kinetix-product-single-page">
    <div class="kinetix-container">
        <!-- Breadcrumb -->
        <nav class="kinetix-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="sep">/</span>
            <a href="<?php echo esc_url( home_url( '/#catalog' ) ); ?>">Shop</a>
            <span class="sep">/</span>
            <span class="current"><?php the_title(); ?></span>
        </nav>

        <!-- Product Main Grid -->
        <div class="kinetix-pdp-grid">
            <!-- Left: Media & Deep Tech Specs -->
            <div class="kinetix-pdp-media-col">
                <div class="pdp-main-visual kinetix-card-shell">
                    <div class="kinetix-card-inner">
                        <?php kinetix_render_product_visual( $post_id, 'pdp-hero-visual' ); ?>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="pdp-section-block">
                    <h2 class="pdp-block-title">Athlete Field Notes</h2>
                    <div class="pdp-rich-text">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Performance Benefits -->
                <?php if ( ! empty( $meta['benefits'] ) ) : ?>
                <div class="pdp-section-block">
                    <h2 class="pdp-block-title">Engineering Highlights</h2>
                    <div class="pdp-benefits-grid">
                        <?php foreach ( $meta['benefits'] as $idx => $benefit ) : ?>
                            <div class="benefit-card kinetix-card-shell">
                                <div class="kinetix-card-inner benefit-inner">
                                    <span class="benefit-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></span>
                                    <p class="benefit-text"><?php echo esc_html( $benefit ); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Fabric & Technical Specifications Table -->
                <?php if ( ! empty( $meta['specs'] ) ) : ?>
                <div class="pdp-section-block">
                    <h2 class="pdp-block-title">Technical Specifications</h2>
                    <div class="kinetix-card-shell specs-shell">
                        <div class="kinetix-card-inner">
                            <table class="kinetix-specs-table">
                                <tbody>
                                    <?php foreach ( $meta['specs'] as $k => $v ) : ?>
                                        <tr>
                                            <th><?php echo esc_html( $k ); ?></th>
                                            <td><?php echo esc_html( $v ); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <!-- Right: Sticky Buy Box -->
            <div class="kinetix-pdp-sidebar-col">
                <div class="kinetix-sticky-buy-box kinetix-card-shell">
                    <div class="kinetix-card-inner buy-box-inner">
                        <!-- Badges -->
                        <div class="pdp-badges-row">
                            <span class="badge-pill badge-cat"><?php echo esc_html( $primary_cat ); ?></span>
                            <?php foreach ( $badges as $b ) : ?>
                                <span class="badge-pill badge-primary"><?php echo esc_html( $b->name ); ?></span>
                            <?php endforeach; ?>
                            <?php if ( $meta['has_sale'] ) : ?>
                                <span class="badge-pill badge-sale">LIMITED SALE</span>
                            <?php endif; ?>
                        </div>

                        <!-- Title -->
                        <h1 class="pdp-title"><?php the_title(); ?></h1>
                        <?php if ( ! empty( $meta['subtitle'] ) ) : ?>
                            <p class="pdp-subtitle"><?php echo esc_html( $meta['subtitle'] ); ?></p>
                        <?php endif; ?>

                        <!-- Rating -->
                        <div class="pdp-rating-row">
                            <div class="stars" aria-label="5 out of 5 stars">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0c1b33" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0c1b33" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0c1b33" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0c1b33" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0c1b33" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            </div>
                            <span class="score"><?php echo esc_html( $meta['rating'] ); ?></span>
                            <span class="count">(<?php echo esc_html( $meta['reviews'] ); ?> verified athletes)</span>
                        </div>

                        <!-- Price -->
                        <div class="pdp-price-wrap">
                            <?php echo kinetix_price_html( $meta['price'], $meta['sale_price'] ); ?>
                        </div>

                        <!-- Color Selector -->
                        <?php if ( ! empty( $meta['colors'] ) ) : ?>
                        <div class="pdp-option-group">
                            <div class="option-label-row">
                                <span class="option-title">Color:</span>
                                <strong id="selected-color-name"><?php echo esc_html( $default_color ); ?></strong>
                            </div>
                            <div class="pdp-color-swatches">
                                <?php foreach ( $meta['colors'] as $cIdx => $color ) : ?>
                                    <button 
                                        type="button" 
                                        class="pdp-swatch-btn <?php echo ( $cIdx === 0 ) ? 'active' : ''; ?>" 
                                        data-color-name="<?php echo esc_attr( $color['name'] ); ?>"
                                        style="--swatch-color: <?php echo esc_attr( $color['hex'] ); ?>;"
                                        title="<?php echo esc_attr( $color['name'] ); ?>"
                                    ></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Size Selector -->
                        <?php if ( ! empty( $meta['sizes'] ) ) : ?>
                        <div class="pdp-option-group">
                            <div class="option-label-row">
                                <span class="option-title">Select Size:</span>
                                <a href="#sizing" class="size-guide-link">Size Guide ↗</a>
                            </div>
                            <div class="pdp-size-buttons">
                                <?php foreach ( $meta['sizes'] as $sIdx => $size ) : ?>
                                    <button 
                                        type="button" 
                                        class="pdp-size-btn <?php echo ( $sIdx === 0 ) ? 'active' : ''; ?>"
                                        data-size="<?php echo esc_attr( $size ); ?>"
                                    >
                                        <?php echo esc_html( $size ); ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- CTA Actions -->
                        <div class="pdp-actions-wrap">
                            <button 
                                type="button" 
                                class="kinetix-btn-primary full-width kinetix-add-to-cart-trigger"
                                id="pdp-add-btn"
                                data-product-id="<?php echo esc_attr( $post_id ); ?>"
                                data-shopify-id="<?php echo esc_attr( $meta['shopify_id'] ); ?>"
                                data-variant-id="<?php echo esc_attr( $meta['variant_id'] ); ?>"
                                data-title="<?php echo esc_attr( get_the_title() ); ?>"
                                data-price="<?php echo esc_attr( $item_price ); ?>"
                                data-size="<?php echo esc_attr( $default_size ); ?>"
                                data-color="<?php echo esc_attr( $default_color ); ?>"
                            >
                                <span>Add to Training Bag</span>
                                <span class="btn-arrow-circle">+</span>
                            </button>

                            <button 
                                type="button" 
                                class="kinetix-btn-secondary full-width"
                                id="pdp-direct-shopify-btn"
                                onclick="window.kinetixCart.directBuy({
                                    id: '<?php echo esc_js( $post_id ); ?>',
                                    title: '<?php echo esc_js( get_the_title() ); ?>',
                                    price: <?php echo esc_js( $item_price ); ?>,
                                    variantId: '<?php echo esc_js( $meta['variant_id'] ); ?>',
                                    size: document.querySelector('.pdp-size-btn.active')?.getAttribute('data-size') || 'M',
                                    color: document.getElementById('selected-color-name')?.textContent || 'Onyx Black',
                                    quantity: 1
                                })"
                            >
                                <span>1-Click Buy with Shop Pay</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                            </button>
                        </div>

                        <!-- Shipping Perks & Guarantees -->
                        <div class="pdp-perks-list">
                            <div class="perk-item">
                                <span class="perk-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                                </span>
                                <span>Free Express Shipping on orders over $75</span>
                            </div>
                            <div class="perk-item">
                                <span class="perk-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m11 16-4-4 4-4"/><path d="M7 12h11a4 4 0 0 1 0 8h-1"/></svg>
                                </span>
                                <span>30-Day Hassle-Free Returns & Size Exchanges</span>
                            </div>
                            <div class="perk-item">
                                <span class="perk-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </span>
                                <span>Shopify PCI Level-1 Certified Secure Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
