<?php
/**
 * Fallback Blog Archive Template: index.php
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-archive-page">
    <div class="kinetix-container">
        <header class="kinetix-archive-header">
            <span class="header-eyebrow">ATHLETE JOURNAL</span>
            <h1 class="header-title"><?php single_post_title(); ?></h1>
        </header>

        <div class="kinetix-blog-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" class="kinetix-blog-card kinetix-card-shell">
                        <div class="kinetix-card-inner">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="blog-media">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="blog-body">
                                <time class="blog-date"><?php echo esc_html( get_the_date() ); ?></time>
                                <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="blog-link">Read Entry →</a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                the_posts_navigation();
            else :
                ?>
                <p><?php esc_html_e( 'No entries published yet.', 'kinetix-fitness' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
