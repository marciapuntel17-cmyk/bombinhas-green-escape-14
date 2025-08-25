<?php
/**
 * Home Template - Blog Posts Listing
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="content" class="site-content">
    <div class="container">
        
        <!-- Hero Section for Blog -->
        <section class="hero-section blog-hero" style="min-height: 50vh; margin-top: 80px;">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title"><?php _e('Blog & Novidades', 'pousada-bombinhas'); ?></h1>
                <p class="hero-subtitle">
                    <?php _e('Descubra as últimas novidades sobre nossa pousada e dicas sobre Bombinhas', 'pousada-bombinhas'); ?>
                </p>
            </div>
        </section>
        
        <!-- Blog Posts -->
        <section class="section">
            <div class="container">
                
                <?php if (have_posts()) : ?>
                    
                    <div class="posts-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            
                            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card card'); ?>>
                                
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail('pousada-card', array(
                                                'loading' => 'lazy',
                                                'alt' => get_the_title()
                                            )); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="card-content">
                                    <div class="post-meta">
                                        <time datetime="<?php echo get_the_date('c'); ?>" class="post-date">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                        
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) :
                                        ?>
                                            <span class="post-category">
                                                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                                    <?php echo esc_html($categories[0]->name); ?>
                                                </a>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <h2 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="card-description">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary" aria-label="<?php printf(__('Leia mais sobre %s', 'pousada-bombinhas'), get_the_title()); ?>">
                                        <?php _e('Leia Mais', 'pousada-bombinhas'); ?>
                                    </a>
                                </div>
                                
                            </article>
                            
                        <?php endwhile; ?>
                    </div>
                    
                    <!-- Pagination -->
                    <nav class="pagination-nav" role="navigation" aria-label="<?php _e('Navegação de posts', 'pousada-bombinhas'); ?>">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('← Anterior', 'pousada-bombinhas'),
                            'next_text' => __('Próximo →', 'pousada-bombinhas'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Página', 'pousada-bombinhas') . ' </span>',
                        ));
                        ?>
                    </nav>
                    
                <?php else : ?>
                    
                    <!-- No Posts Found -->
                    <div class="no-posts-found">
                        <h2><?php _e('Nenhum post encontrado', 'pousada-bombinhas'); ?></h2>
                        <p><?php _e('Não há posts disponíveis no momento. Volte em breve para conferir nossas novidades!', 'pousada-bombinhas'); ?></p>
                        <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                            <?php _e('Voltar ao Início', 'pousada-bombinhas'); ?>
                        </a>
                    </div>
                    
                <?php endif; ?>
                
            </div>
        </section>
        
    </div>
</main>

<style>
.blog-hero {
    background: linear-gradient(135deg, rgba(44, 85, 48, 0.8), rgba(37, 99, 235, 0.7)), 
                url('<?php echo get_template_directory_uri(); ?>/images/praia-bombinhas.jpg');
    background-size: cover;
    background-position: center;
}

.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.post-card {
    overflow: hidden;
    transition: var(--transition-smooth);
}

.post-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-nature);
}

.post-thumbnail {
    position: relative;
    overflow: hidden;
}

.post-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: var(--transition-smooth);
}

.post-card:hover .post-thumbnail img {
    transform: scale(1.05);
}

.post-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.75rem;
    font-size: 0.9rem;
    color: var(--text-secondary);
}

.post-category a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
}

.post-category a:hover {
    text-decoration: underline;
}

.card-title a {
    color: var(--text-primary);
    text-decoration: none;
    transition: var(--transition-smooth);
}

.card-title a:hover {
    color: var(--primary-color);
}

.pagination-nav {
    margin-top: 3rem;
    text-align: center;
}

.pagination-nav .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.pagination-nav .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem 1rem;
    text-decoration: none;
    color: var(--text-primary);
    border: 1px solid var(--border-color);
    border-radius: 0.375rem;
    transition: var(--transition-smooth);
    min-width: 40px;
    height: 40px;
}

.pagination-nav .page-numbers:hover,
.pagination-nav .page-numbers.current {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.no-posts-found {
    text-align: center;
    padding: 4rem 1rem;
}

.no-posts-found h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.no-posts-found p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    margin-bottom: 2rem;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .post-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
}
</style>

<?php get_footer(); ?>