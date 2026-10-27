<?php
/**
 * Shop Archive Template: archive-fitness_product.php
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-shop-archive-page">
    <div class="kinetix-container">
        <header class="kinetix-archive-header">
            <span class="header-eyebrow">EQUIPMENT & APPAREL CATALOG</span>
            <h1 class="header-title"><?php post_type_archive_title(); ?></h1>
            <p class="header-desc">Engineered high-performance compression, lifting gear, and athlete recovery.</p>
        </header>

        <!-- Catalog Filter Bar -->
        <div class="catalog-filter-controls">
            <div class="catalog-cat-tabs" role="tablist">
                <button type="button" class="tab-btn active" data-cat="all">All Gear</button>
                <button type="button" class="tab-btn" data-cat="mens-training">Men's Apparel</button>
                <button type="button" class="tab-btn" data-cat="womens-activewear">Women's Activewear</button>
                <button type="button" class="tab-btn" data-cat="compression">Compression</button>
                <button type="button" class="tab-btn" data-cat="gym-gear-equipment">Lifting Gear</button>
                <button type="button" class="tab-btn" data-cat="recovery-supplements">Recovery</button>
            </div>

            <div class="catalog-aux-row">
                <div class="kinetix-sort-wrap">
                    <select id="kinetix-sort-select" aria-label="Sort products">
                        <option value="featured">Featured First</option>
                        <option value="newest">Latest Drops</option>
                        <option value="price_low">Price: Low to High</option>
                        <option value="price_high">Price: High to Low</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="kinetix-products-grid" id="kinetix-products-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'parts/card-product' );
                endwhile;
                the_posts_navigation();
            else :
                ?>
                <p><?php esc_html_e( 'No products found.', 'kinetix-fitness' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
