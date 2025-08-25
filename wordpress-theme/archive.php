<?php
/**
 * Archive Template
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="content" class="site-content">
    
    <!-- Archive Header -->
    <header class="archive-header">
        <div class="container">
            
            <!-- Breadcrumb -->
            <nav class="breadcrumb" aria-label="<?php _e('Você está aqui:', 'pousada-bombinhas'); ?>">
                <a href="<?php echo home_url(); ?>"><?php _e('Início', 'pousada-bombinhas'); ?></a>
                <span class="breadcrumb-separator">→</span>
                
                <?php if (is_category()) : ?>
                    <span class="breadcrumb-current"><?php single_cat_title(); ?></span>
                <?php elseif (is_tag()) : ?>
                    <span class="breadcrumb-current"><?php single_tag_title(); ?></span>
                <?php elseif (is_author()) : ?>
                    <span class="breadcrumb-current"><?php printf(__('Posts por %s', 'pousada-bombinhas'), get_the_author()); ?></span>
                <?php elseif (is_date()) : ?>
                    <span class="breadcrumb-current">
                        <?php
                        if (is_year()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('Y'));
                        } elseif (is_month()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('F Y'));
                        } elseif (is_day()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('j F Y'));
                        }
                        ?>
                    </span>
                <?php else : ?>
                    <span class="breadcrumb-current"><?php _e('Arquivo', 'pousada-bombinhas'); ?></span>
                <?php endif; ?>
            </nav>
            
            <!-- Archive Title and Description -->
            <div class="archive-title-wrapper">
                
                <?php if (is_category()) : ?>
                    <h1 class="archive-title">
                        <?php printf(__('Categoria: %s', 'pousada-bombinhas'), single_cat_title('', false)); ?>
                    </h1>
                    <?php if (category_description()) : ?>
                        <div class="archive-description">
                            <?php echo category_description(); ?>
                        </div>
                    <?php endif; ?>
                    
                <?php elseif (is_tag()) : ?>
                    <h1 class="archive-title">
                        <?php printf(__('Tag: %s', 'pousada-bombinhas'), single_tag_title('', false)); ?>
                    </h1>
                    <?php if (tag_description()) : ?>
                        <div class="archive-description">
                            <?php echo tag_description(); ?>
                        </div>
                    <?php endif; ?>
                    
                <?php elseif (is_author()) : ?>
                    <h1 class="archive-title">
                        <?php printf(__('Posts por %s', 'pousada-bombinhas'), get_the_author()); ?>
                    </h1>
                    <?php if (get_the_author_meta('description')) : ?>
                        <div class="archive-description">
                            <?php echo get_the_author_meta('description'); ?>
                        </div>
                    <?php endif; ?>
                    
                <?php elseif (is_date()) : ?>
                    <h1 class="archive-title">
                        <?php
                        if (is_year()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('Y'));
                        } elseif (is_month()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('F Y'));
                        } elseif (is_day()) {
                            printf(__('Arquivo de %s', 'pousada-bombinhas'), get_the_date('j F Y'));
                        }
                        ?>
                    </h1>
                    
                <?php else : ?>
                    <h1 class="archive-title"><?php _e('Arquivo', 'pousada-bombinhas'); ?></h1>
                    
                <?php endif; ?>
                
            </div>
            
        </div>
    </header>
    
    <!-- Archive Content -->
    <section class="section">
        <div class="container">
            
            <?php if (have_posts()) : ?>
                
                <!-- Posts Count -->
                <div class="archive-meta">
                    <p class="posts-count">
                        <?php
                        global $wp_query;
                        $total = $wp_query->found_posts;
                        printf(_n('%d post encontrado', '%d posts encontrados', $total, 'pousada-bombinhas'), $total);
                        ?>
                    </p>
                </div>
                
                <!-- Posts Grid -->
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
                                    
                                    <?php if (!is_category()) : ?>
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
                                    <?php endif; ?>
                                    
                                    <?php if (!is_author()) : ?>
                                        <span class="post-author">
                                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                                <?php the_author(); ?>
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
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary" 
                                   aria-label="<?php printf(__('Leia mais sobre %s', 'pousada-bombinhas'), get_the_title()); ?>">
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
                    <p><?php _e('Não há posts disponíveis neste arquivo. Que tal voltar à página inicial?', 'pousada-bombinhas'); ?></p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">
                        <?php _e('Voltar ao Início', 'pousada-bombinhas'); ?>
                    </a>
                </div>
                
            <?php endif; ?>
            
        </div>
    </section>
    
</main>

<style>
.archive-header {
    background: rgba(229, 231, 235, 0.3);
    padding: 6rem 0 3rem;
    margin-top: 80px;
}

.breadcrumb {
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
}

.breadcrumb a {
    color: var(--primary-color);
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.breadcrumb-separator {
    margin: 0 0.5rem;
    color: var(--text-secondary);
}

.breadcrumb-current {
    color: var(--text-secondary);
}

.archive-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: bold;
    color: var(--text-primary);
    line-height: 1.2;
    margin-bottom: 1rem;
}

.archive-description {
    font-size: 1.2rem;
    color: var(--text-secondary);
    line-height: 1.6;
    max-width: 600px;
}

.archive-meta {
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border-color);
}

.posts-count {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin: 0;
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
    flex-wrap: wrap;
}

.post-category a,
.post-author a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
}

.post-category a:hover,
.post-author a:hover {
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