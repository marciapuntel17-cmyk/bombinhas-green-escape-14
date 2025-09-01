<?php
/**
 * Single Post Template
 * Template para posts individuais
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div style="padding-top: 120px; padding-bottom: 4rem;">
            
            <?php while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                    
                    <!-- Breadcrumb -->
                    <nav class="breadcrumb" style="margin-bottom: 2rem; font-size: 0.9rem; color: var(--text-secondary);">
                        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--secondary-color);">Início</a>
                        <span style="margin: 0 0.5rem; color: var(--text-light);">→</span>
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" style="color: var(--secondary-color);">Blog</a>
                        <span style="margin: 0 0.5rem; color: var(--text-light);">→</span>
                        <span><?php the_title(); ?></span>
                    </nav>

                    <!-- Post Header -->
                    <header class="post-header" style="margin-bottom: 3rem;">
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail" style="margin-bottom: 2rem;">
                                <?php 
                                the_post_thumbnail('large', array(
                                    'style' => 'width: 100%; height: 400px; object-fit: cover; border-radius: var(--border-radius-lg);'
                                )); 
                                ?>
                            </div>
                        <?php endif; ?>

                        <h1 class="post-title" style="font-size: clamp(1.8rem, 4vw, 2.5rem); font-weight: 700; color: var(--text-primary); line-height: 1.2;">
                            <?php the_title(); ?>
                        </h1>

                    </header>

                    <!-- Post Content -->
                    <div class="post-content" style="max-width: 800px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary);">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>