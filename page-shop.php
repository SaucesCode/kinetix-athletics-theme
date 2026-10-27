<?php
/**
 * Template Name: Shop Catalog
 * Template Post Type: page
 *
 * Dedicated Full Catalog & Gear Roster Page
 *
 * @package Kinetix_Fitness
 */

get_header();

// Query all fitness products
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$active_cat = isset( $_GET['cat'] ) ? sanitize_text_field( $_GET['cat'] ) : 'all';

$args = array(
    'post_type'      => 'fitness_product',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'paged'          => $paged,
    'orderby'        => 'menu_order date',
    'order'          => 'DESC',
);

if ( ! empty( $active_cat ) && 'all' !== $active_cat ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $active_cat,
        ),
    );
}

$catalog_query = new WP_Query( $args );
?>

<div class="kinetix-shop-page">
    <div class="kinetix-container">
        <!-- Breadcrumb Navigation -->
        <nav class="kinetix-breadcrumb kinetix-reveal" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Shop Catalog</span>
        </nav>

        <!-- Shop Header Banner -->
        <header class="kinetix-shop-header kinetix-reveal">
            <div class="page-hero-eyebrow">
                <span class="eyebrow-kicker"><?php esc_html_e( 'DIVISION SPEC 2026', 'kinetix-fitness' ); ?></span>
                <span class="eyebrow-divider">/</span>
                <span class="eyebrow-meta"><?php esc_html_e( 'FULL ROSTER', 'kinetix-fitness' ); ?></span>
            </div>
            <h1 class="shop-header-title">The Complete Collection</h1>
            <p class="shop-header-desc">
                Engineered competition apparel, circular-knit compression, tournament-grade steerhide belts, and athlete recovery formulas.
            </p>
        </header>

        <!-- Filter & Search Controls Bar -->
        <div class="catalog-filter-controls kinetix-reveal delay-100">
            <!-- Category Tabs -->
            <div class="catalog-cat-tabs" role="tablist">
                <button type="button" class="tab-btn <?php echo ( 'all' === $active_cat ) ? 'active' : ''; ?>" data-cat="all">All Gear</button>
                <button type="button" class="tab-btn <?php echo ( 'mens-training' === $active_cat ) ? 'active' : ''; ?>" data-cat="mens-training">Men's Apparel</button>
                <button type="button" class="tab-btn <?php echo ( 'womens-activewear' === $active_cat ) ? 'active' : ''; ?>" data-cat="womens-activewear">Women's Active</button>
                <button type="button" class="tab-btn <?php echo ( 'compression' === $active_cat ) ? 'active' : ''; ?>" data-cat="compression">Compression</button>
                <button type="button" class="tab-btn <?php echo ( 'gym-gear-equipment' === $active_cat ) ? 'active' : ''; ?>" data-cat="gym-gear-equipment">Strength Belts</button>
                <button type="button" class="tab-btn <?php echo ( 'recovery-supplements' === $active_cat ) ? 'active' : ''; ?>" data-cat="recovery-supplements">Recovery</button>
            </div>

            <!-- Auxiliary Search & Sort -->
            <div class="catalog-aux-row">
                <div class="kinetix-search-input-wrap">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    <input type="text" id="kinetix-search-input" placeholder="Search fabrics, sizes, gear..." aria-label="Search catalog">
                    <button type="button" id="kinetix-search-clear" style="display:none;" aria-label="Clear search">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>

                <div class="kinetix-sort-wrap">
                    <select id="kinetix-sort-select" aria-label="Sort products">
                        <option value="featured">Sort: Featured</option>
                        <option value="newest">Sort: Newest Drops</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="kinetix-products-grid" id="kinetix-products-grid">
            <?php
            if ( $catalog_query->have_posts() ) {
                while ( $catalog_query->have_posts() ) {
                    $catalog_query->the_post();
                    get_template_part( 'parts/card-product' );
                }
                wp_reset_postdata();
            } else {
                ?>
                <div class="kinetix-empty-catalog">
                    <div class="empty-bolt">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <h3>No products found in this division</h3>
                    <p>Try resetting your filters or exploring our complete roster.</p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
