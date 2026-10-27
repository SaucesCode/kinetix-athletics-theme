<?php
/**
 * Standard Page Template
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-standard-page">
    <div class="kinetix-container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'kinetix-article-shell' ); ?>>
                <header class="page-entry-header">
                    <h1 class="page-entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="kinetix-card-shell">
                    <div class="kinetix-card-inner page-entry-content">
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
