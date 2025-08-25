<?php
/**
 * Search Results Template
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="content" class="site-content">
    
    <!-- Search Header -->
    <header class="search-header">
        <div class="container">
            
            <!-- Breadcrumb -->
            <nav class="breadcrumb" aria-label="<?php _e('Você está aqui:', 'pousada-bombinhas'); ?>">
                <a href="<?php echo home_url(); ?>"><?php _e('Início', 'pousada-bombinhas'); ?></a>
                <span class="breadcrumb-separator">→</span>
                <span class="breadcrumb-current"><?php _e('Resultados da Busca', 'pousada-bombinhas'); ?></span>
            </nav>
            
            <!-- Search Title -->
            <h1 class="search-title">
                <?php printf(__('Resultados para: "%s"', 'pousada-bombinhas'), get_search_query()); ?>
            </h1>
            
            <!-- Search Form -->
            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>
            
        </div>
    </header>
    
    <!-- Search Results -->
    <section class="section">
        <div class="container">
            
            <?php if (have_posts()) : ?>
                
                <!-- Results Count -->
                <div class="search-meta">
                    <p class="results-count">
                        <?php
                        global $wp_query;
                        $total = $wp_query->found_posts;
                        printf(_n('%d resultado encontrado', '%d resultados encontrados', $total, 'pousada-bombinhas'), $total);
                        ?>
                    </p>
                </div>
                
                <!-- Results List -->
                <div class="search-results">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('search-result-item'); ?>>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="result-thumbnail">
                                    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('thumbnail', array(
                                            'loading' => 'lazy',
                                            'alt' => get_the_title()
                                        )); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="result-content">
                                
                                <div class="result-meta">
                                    <span class="result-type">
                                        <?php echo get_post_type() === 'page' ? __('Página', 'pousada-bombinhas') : __('Post', 'pousada-bombinhas'); ?>
                                    </span>
                                    
                                    <time datetime="<?php echo get_the_date('c'); ?>" class="result-date">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    
                                    <?php if (get_post_type() === 'post') : ?>
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) :
                                        ?>
                                            <span class="result-category">
                                                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                                    <?php echo esc_html($categories[0]->name); ?>
                                                </a>
                                            </span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                
                                <h2 class="result-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <div class="result-excerpt">
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $search_query = get_search_query();
                                    
                                    // Highlight search terms
                                    if (!empty($search_query)) {
                                        $highlighted = preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<mark>$1</mark>', $excerpt);
                                        echo $highlighted;
                                    } else {
                                        echo $excerpt;
                                    }
                                    ?>
                                </div>
                                
                                <div class="result-actions">
                                    <a href="<?php the_permalink(); ?>" class="result-link">
                                        <?php _e('Leia mais', 'pousada-bombinhas'); ?> →
                                    </a>
                                </div>
                                
                            </div>
                            
                        </article>
                        
                    <?php endwhile; ?>
                </div>
                
                <!-- Pagination -->
                <nav class="pagination-nav" role="navigation" aria-label="<?php _e('Navegação de resultados', 'pousada-bombinhas'); ?>">
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
                
                <!-- No Results Found -->
                <div class="no-results-found">
                    <div class="no-results-icon">🔍</div>
                    <h2><?php _e('Nenhum resultado encontrado', 'pousada-bombinhas'); ?></h2>
                    <p><?php printf(__('Não encontramos resultados para "%s". Tente novamente com outras palavras-chave.', 'pousada-bombinhas'), get_search_query()); ?></p>
                    
                    <!-- Search Suggestions -->
                    <div class="search-suggestions">
                        <h3><?php _e('Sugestões:', 'pousada-bombinhas'); ?></h3>
                        <ul>
                            <li><?php _e('Verifique se todas as palavras estão escritas corretamente', 'pousada-bombinhas'); ?></li>
                            <li><?php _e('Tente palavras-chave diferentes', 'pousada-bombinhas'); ?></li>
                            <li><?php _e('Use termos mais genéricos', 'pousada-bombinhas'); ?></li>
                            <li><?php _e('Reduza o número de palavras', 'pousada-bombinhas'); ?></li>
                        </ul>
                    </div>
                    
                    <!-- Popular Pages -->
                    <div class="popular-pages">
                        <h3><?php _e('Páginas populares:', 'pousada-bombinhas'); ?></h3>
                        <div class="popular-links">
                            <a href="<?php echo home_url(); ?>#acomodacoes" class="popular-link">
                                <?php _e('Acomodações', 'pousada-bombinhas'); ?>
                            </a>
                            <a href="<?php echo home_url(); ?>#experiencias" class="popular-link">
                                <?php _e('Experiências', 'pousada-bombinhas'); ?>
                            </a>
                            <a href="<?php echo home_url(); ?>#localizacao" class="popular-link">
                                <?php _e('Localização', 'pousada-bombinhas'); ?>
                            </a>
                            <a href="<?php echo home_url(); ?>#contato" class="popular-link">
                                <?php _e('Contato', 'pousada-bombinhas'); ?>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            <?php endif; ?>
            
        </div>
    </section>
    
</main>

<style>
.search-header {
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

.search-title {
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    font-weight: bold;
    color: var(--text-primary);
    line-height: 1.2;
    margin-bottom: 2rem;
}

.search-form-wrapper {
    max-width: 500px;
}

.search-meta {
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--border-color);
}

.results-count {
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin: 0;
}

.search-results {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin-bottom: 3rem;
}

.search-result-item {
    display: flex;
    gap: 1.5rem;
    padding: 1.5rem;
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 0.75rem;
    box-shadow: var(--shadow-soft);
    transition: var(--transition-smooth);
}

.search-result-item:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-nature);
}

.result-thumbnail {
    flex-shrink: 0;
}

.result-thumbnail img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 0.5rem;
}

.result-content {
    flex: 1;
    min-width: 0;
}

.result-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.75rem;
    font-size: 0.9rem;
    color: var(--text-secondary);
    flex-wrap: wrap;
}

.result-type {
    background: rgba(44, 85, 48, 0.1);
    color: var(--primary-color);
    padding: 0.25rem 0.5rem;
    border-radius: 0.25rem;
    font-size: 0.8rem;
    font-weight: 500;
}

.result-category a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
}

.result-category a:hover {
    text-decoration: underline;
}

.result-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
}

.result-title a {
    color: var(--text-primary);
    text-decoration: none;
    transition: var(--transition-smooth);
}

.result-title a:hover {
    color: var(--primary-color);
}

.result-excerpt {
    color: var(--text-secondary);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.result-excerpt mark {
    background: #fef3c7;
    color: #92400e;
    padding: 0.125rem 0.25rem;
    border-radius: 0.25rem;
}

.result-actions {
    margin-top: auto;
}

.result-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    transition: var(--transition-smooth);
}

.result-link:hover {
    text-decoration: underline;
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

.no-results-found {
    text-align: center;
    padding: 4rem 1rem;
    max-width: 600px;
    margin: 0 auto;
}

.no-results-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
}

.no-results-found h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.no-results-found > p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    margin-bottom: 3rem;
}

.search-suggestions,
.popular-pages {
    text-align: left;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: rgba(229, 231, 235, 0.3);
    border-radius: 0.5rem;
}

.search-suggestions h3,
.popular-pages h3 {
    font-size: 1.1rem;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.search-suggestions ul {
    list-style: none;
    padding: 0;
}

.search-suggestions li {
    padding: 0.25rem 0;
    color: var(--text-secondary);
}

.search-suggestions li:before {
    content: "•";
    color: var(--primary-color);
    margin-right: 0.5rem;
}

.popular-links {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.popular-link {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: var(--primary-color);
    color: white;
    text-decoration: none;
    border-radius: 0.375rem;
    font-size: 0.9rem;
    transition: var(--transition-smooth);
}

.popular-link:hover {
    background: var(--secondary-color);
    transform: translateY(-1px);
}

@media (max-width: 768px) {
    .search-result-item {
        flex-direction: column;
        gap: 1rem;
    }
    
    .result-thumbnail {
        align-self: center;
    }
    
    .result-thumbnail img {
        width: 120px;
        height: 120px;
    }
    
    .result-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .popular-links {
        flex-direction: column;
    }
    
    .popular-link {
        justify-content: center;
    }
}
</style>

<?php get_footer(); ?>