<?php
/**
 * 404 Error Template
 *
 * @package Kinetix_Fitness
 */

get_header();
?>

<div class="kinetix-error-page">
    <div class="kinetix-container">
        <div class="kinetix-card-shell error-shell">
            <div class="kinetix-card-inner error-card">
                <span class="error-badge">OUT OF BOUNDS</span>
                <h1 class="error-title">Drop Not Found</h1>
                <p class="error-desc">The apparel drop, gym accessory, or supplement formulation you are looking for has been retired or relocated.</p>
                <div class="error-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="kinetix-btn-primary">
                        <span>Return to Store</span>
                        <span class="btn-arrow-circle">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
