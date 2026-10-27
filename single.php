<?php
/**
 * Single Blog Post Template: Training Journal
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-single-post-page">
    <div class="kinetix-container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-entry-wrapper' ); ?>>
                <header class="post-header">
                    <span class="header-eyebrow">ATHLETE JOURNAL</span>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                        <span class="sep">·</span>
                        <span><?php the_category( ', ' ); ?></span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-media kinetix-card-shell">
                        <div class="kinetix-card-inner">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="kinetix-card-shell post-content-shell">
                    <div class="kinetix-card-inner post-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
