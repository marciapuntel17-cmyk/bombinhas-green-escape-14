<?php
/**
 * Page Template
 * Template para páginas estáticas
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div style="padding-top: 120px; padding-bottom: 4rem;">
            
            <?php while (have_posts()) : the_post(); ?>
                
                <article id="page-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
                    
                    <!-- Breadcrumb -->
                    <nav class="breadcrumb" style="margin-bottom: 2rem; font-size: 0.9rem; color: var(--text-secondary);">
                        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--secondary-color);">Início</a>
                        <span style="margin: 0 0.5rem; color: var(--text-light);">→</span>
                        <span><?php the_title(); ?></span>
                    </nav>

                    <!-- Page Header -->
                    <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="page-thumbnail" style="margin-bottom: 2rem;">
                                <?php 
                                the_post_thumbnail('large', array(
                                    'style' => 'width: 100%; max-height: 400px; object-fit: cover; border-radius: var(--border-radius-lg);'
                                )); 
                                ?>
                            </div>
                        <?php endif; ?>

                        <h1 class="page-title" style="font-size: clamp(2rem, 5vw, 3rem); font-weight: 700; color: var(--text-primary); line-height: 1.2;">
                            <?php the_title(); ?>
                        </h1>

                    </header>

                    <!-- Page Content -->
                    <div class="page-content" style="max-width: 800px; margin: 0 auto;">
                        <div style="font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary);">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </article>

            <?php endwhile; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>