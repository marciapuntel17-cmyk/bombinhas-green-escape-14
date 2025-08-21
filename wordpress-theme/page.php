<?php
/**
 * Page Template
 * Template para páginas individuais
 */

get_header(); ?>

<main id="main" class="site-main" style="margin-top: 80px;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
                <header class="entry-header text-center" style="margin-bottom: 3rem;">
                    <h1 class="section-title"><?php the_title(); ?></h1>
                    <?php if (get_the_excerpt()) : ?>
                        <p class="section-subtitle"><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>
                </header>

                <div class="entry-content" style="max-width: 48rem; margin: 0 auto; font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary);">
                    <?php the_content(); ?>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; text-align: center;">',
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail" style="margin: 3rem 0; text-align: center;">
                        <div class="card" style="display: inline-block; box-shadow: var(--shadow-nature);">
                            <?php the_post_thumbnail('large', array('style' => 'border-radius: 0.75rem; max-width: 100%; height: auto;')); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
        
        <div style="text-align: center; margin-top: 4rem;">
            <a href="<?php echo home_url(); ?>#contato" class="btn btn-primary btn-lg">
                Entre em Contato
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>