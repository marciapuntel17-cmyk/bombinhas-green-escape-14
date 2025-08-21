<?php
/**
 * Single Post Template
 * Template para posts individuais
 */

get_header(); ?>

<main id="main" class="site-main" style="margin-top: 80px;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
                <header class="entry-header text-center" style="margin-bottom: 3rem;">
                    <h1 class="section-title"><?php the_title(); ?></h1>
                    
                    <div class="entry-meta" style="color: var(--text-secondary); margin-bottom: 1rem;">
                        <time datetime="<?php echo get_the_date('c'); ?>" style="margin-right: 1rem;">
                            📅 <?php echo get_the_date(); ?>
                        </time>
                        <?php if (has_category()) : ?>
                            <span>🏷️ <?php the_category(', '); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <?php if (get_the_excerpt()) : ?>
                        <p class="section-subtitle"><?php echo get_the_excerpt(); ?></p>
                    <?php endif; ?>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail" style="margin-bottom: 3rem; text-align: center;">
                        <div class="card" style="display: inline-block; box-shadow: var(--shadow-nature); max-width: 100%;">
                            <?php the_post_thumbnail('large', array('style' => 'border-radius: 0.75rem; width: 100%; height: auto; max-height: 400px; object-fit: cover;')); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="max-width: 48rem; margin: 0 auto; font-size: 1.1rem; line-height: 1.8; color: var(--text-secondary);">
                    <?php the_content(); ?>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; text-align: center;">',
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (has_tag()) : ?>
                    <footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border-color); text-align: center;">
                        <div style="color: var(--text-secondary);">
                            <strong>Tags:</strong> <?php the_tags('', ', ', ''); ?>
                        </div>
                    </footer>
                <?php endif; ?>
            </article>

            <div style="margin: 4rem 0; text-align: center;">
                <div class="card" style="background: var(--gradient-nature); color: white; padding: 2rem; border: none;">
                    <h3 style="margin-bottom: 1rem;">Gostou do que leu?</h3>
                    <p style="margin-bottom: 1.5rem; opacity: 0.9;">Venha viver essa experiência na Pousada Praia de Bombinhas!</p>
                    <a href="<?php echo home_url(); ?>#contato" class="btn btn-secondary btn-lg">
                        Reserve Sua Estadia
                    </a>
                </div>
            </div>

            <?php
            // Navigation between posts
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle">Post Anterior:</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">Próximo Post:</span> <span class="nav-title">%title</span>',
            ));

            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>