<?php
/**
 * SEO Enhancements
 * 
 * @package PousadaBombinhas
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta description
 */
function pousada_meta_description() {
    $description = '';
    
    if (is_front_page()) {
        $description = get_bloginfo('description');
        if (empty($description)) {
            $description = get_theme_mod('hero_subtitle', 'Seu refúgio na natureza exuberante da Mata Atlântica');
        }
    } elseif (is_single() || is_page()) {
        global $post;
        if ($post->post_excerpt) {
            $description = $post->post_excerpt;
        } else {
            $description = wp_trim_words(strip_tags($post->post_content), 30);
        }
    } elseif (is_category()) {
        $description = category_description();
        if (empty($description)) {
            $description = 'Posts na categoria: ' . single_cat_title('', false);
        }
    } elseif (is_tag()) {
        $description = tag_description();
        if (empty($description)) {
            $description = 'Posts com a tag: ' . single_tag_title('', false);
        }
    } elseif (is_archive()) {
        $description = 'Arquivo de posts';
    }
    
    if (!empty($description)) {
        $description = wp_trim_words(strip_tags($description), 30);
        echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    }
}
add_action('wp_head', 'pousada_meta_description', 5);

/**
 * Add Open Graph meta tags
 */
function pousada_open_graph_meta() {
    global $post;
    
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta property="og:locale" content="pt_BR">' . "\n";
    
    if (is_front_page()) {
        echo '<meta property="og:title" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr(get_bloginfo('description')) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(home_url()) . '">' . "\n";
        
        $hero_image = get_theme_mod('hero_background_image', get_template_directory_uri() . '/images/hero-pousada.jpg');
        echo '<meta property="og:image" content="' . esc_url($hero_image) . '">' . "\n";
        
    } elseif (is_single() || is_page()) {
        echo '<meta property="og:title" content="' . esc_attr(get_the_title()) . '">' . "\n";
        
        $description = $post->post_excerpt ?: wp_trim_words(strip_tags($post->post_content), 30);
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
        
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            echo '<meta property="og:image" content="' . esc_url($image[0]) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'pousada_open_graph_meta', 5);

/**
 * Add Twitter Card meta tags
 */
function pousada_twitter_card_meta() {
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    
    if (is_front_page()) {
        echo '<meta name="twitter:title" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr(get_bloginfo('description')) . '">' . "\n";
        
        $hero_image = get_theme_mod('hero_background_image', get_template_directory_uri() . '/images/hero-pousada.jpg');
        echo '<meta name="twitter:image" content="' . esc_url($hero_image) . '">' . "\n";
        
    } elseif (is_single() || is_page()) {
        global $post;
        echo '<meta name="twitter:title" content="' . esc_attr(get_the_title()) . '">' . "\n";
        
        $description = $post->post_excerpt ?: wp_trim_words(strip_tags($post->post_content), 30);
        echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
        
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            echo '<meta name="twitter:image" content="' . esc_url($image[0]) . '">' . "\n";
        }
    }
}
add_action('wp_head', 'pousada_twitter_card_meta', 5);

/**
 * Add canonical URL
 */
function pousada_canonical_url() {
    if (is_front_page()) {
        echo '<link rel="canonical" href="' . esc_url(home_url()) . '">' . "\n";
    } elseif (is_single() || is_page()) {
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
    } elseif (is_category()) {
        echo '<link rel="canonical" href="' . esc_url(get_category_link(get_queried_object_id())) . '">' . "\n";
    } elseif (is_tag()) {
        echo '<link rel="canonical" href="' . esc_url(get_tag_link(get_queried_object_id())) . '">' . "\n";
    }
}
add_action('wp_head', 'pousada_canonical_url', 5);

/**
 * Add robots meta tag
 */
function pousada_robots_meta() {
    if (is_search() || is_404()) {
        echo '<meta name="robots" content="noindex, nofollow">' . "\n";
    } elseif (is_category() || is_tag() || is_archive()) {
        echo '<meta name="robots" content="noindex, follow">' . "\n";
    } else {
        echo '<meta name="robots" content="index, follow">' . "\n";
    }
}
add_action('wp_head', 'pousada_robots_meta', 5);

/**
 * Improve title tag
 */
function pousada_document_title_parts($title) {
    if (is_front_page()) {
        $title['title'] = get_bloginfo('name');
        $title['tagline'] = get_bloginfo('description');
    }
    
    return $title;
}
add_filter('document_title_parts', 'pousada_document_title_parts');

/**
 * Add breadcrumb schema
 */
function pousada_breadcrumb_schema() {
    if (is_front_page()) {
        return;
    }
    
    $breadcrumbs = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => array()
    );
    
    // Home
    $breadcrumbs['itemListElement'][] = array(
        '@type' => 'ListItem',
        'position' => 1,
        'name' => get_bloginfo('name'),
        'item' => home_url()
    );
    
    $position = 2;
    
    if (is_single()) {
        $categories = get_the_category();
        if (!empty($categories)) {
            $category = $categories[0];
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => $category->name,
                'item' => get_category_link($category->term_id)
            );
        }
        
        $breadcrumbs['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title(),
            'item' => get_permalink()
        );
    } elseif (is_page()) {
        $breadcrumbs['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => get_the_title(),
            'item' => get_permalink()
        );
    } elseif (is_category()) {
        $breadcrumbs['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => single_cat_title('', false),
            'item' => get_category_link(get_queried_object_id())
        );
    }
    
    echo '<script type="application/ld+json">' . json_encode($breadcrumbs, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
}
add_action('wp_head', 'pousada_breadcrumb_schema');

/**
 * Add image alt attributes automatically
 */
function pousada_add_image_alt($content) {
    global $post;
    
    preg_match_all('/<img[^>]+>/i', $content, $images);
    
    if (!empty($images[0])) {
        foreach ($images[0] as $image) {
            if (strpos($image, 'alt=') === false) {
                $new_image = str_replace('<img', '<img alt="' . esc_attr(get_the_title()) . '"', $image);
                $content = str_replace($image, $new_image, $content);
            }
        }
    }
    
    return $content;
}
add_filter('the_content', 'pousada_add_image_alt');

/**
 * Optimize images with lazy loading
 */
function pousada_add_lazy_loading($content) {
    // Add loading="lazy" to images
    $content = preg_replace('/<img([^>]+?)>/i', '<img$1 loading="lazy">', $content);
    
    return $content;
}
add_filter('the_content', 'pousada_add_lazy_loading');

/**
 * Add structured data for articles
 */
function pousada_article_schema() {
    if (!is_single()) {
        return;
    }
    
    global $post;
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => get_the_title(),
        'description' => wp_trim_words(strip_tags(get_the_content()), 30),
        'author' => array(
            '@type' => 'Person',
            'name' => get_the_author()
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_site_icon_url()
            )
        ),
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id' => get_permalink()
        )
    );
    
    if (has_post_thumbnail()) {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        $schema['image'] = array(
            '@type' => 'ImageObject',
            'url' => $image[0],
            'width' => $image[1],
            'height' => $image[2]
        );
    }
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
}
add_action('wp_head', 'pousada_article_schema');