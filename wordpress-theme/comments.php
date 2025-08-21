<?php
/**
 * Comments Template
 * Template para comentários
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 4rem;">
    
    <?php if (have_comments()) : ?>
        <h2 class="comments-title" style="font-size: 1.5rem; font-weight: bold; color: var(--text-primary); margin-bottom: 2rem; text-align: center;">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count === 1) {
                printf(_x('Um comentário em &ldquo;%1$s&rdquo;', 'comments title', 'pousada-bombinhas'), get_the_title());
            } else {
                printf(_nx('%1$s comentário em &ldquo;%2$s&rdquo;', '%1$s comentários em &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'pousada-bombinhas'), number_format_i18n($comment_count), get_the_title());
            }
            ?>
        </h2>

        <ol class="comment-list" style="list-style: none; padding: 0;">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'callback'   => 'pousada_bombinhas_comment_callback',
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation" style="margin: 2rem 0; text-align: center;">
                <div class="nav-links" style="display: flex; justify-content: space-between; gap: 1rem;">
                    <?php
                    if ($prev_link = get_previous_comments_link(__('Comentários Anteriores', 'pousada-bombinhas'))) {
                        echo '<div class="nav-previous">' . $prev_link . '</div>';
                    }
                    if ($next_link = get_next_comments_link(__('Próximos Comentários', 'pousada-bombinhas'))) {
                        echo '<div class="nav-next">' . $next_link . '</div>';
                    }
                    ?>
                </div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments" style="text-align: center; color: var(--text-secondary); font-style: italic;">
            <?php _e('Os comentários estão fechados.', 'pousada-bombinhas'); ?>
        </p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title" style="font-size: 1.5rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem; text-align: center;">',
        'title_reply_after'  => '</h3>',
        'class_form'         => 'comment-form card',
        'comment_field'      => '<div class="form-group"><label for="comment" class="form-label">' . _x('Comentário', 'noun', 'pousada-bombinhas') . ' <span class="required">*</span></label><textarea id="comment" name="comment" class="form-input form-textarea" rows="6" maxlength="65525" required="required" placeholder="Compartilhe sua experiência ou dúvida..."></textarea></div>',
        'fields'             => array(
            'author' => '<div class="form-grid form-grid-2"><div class="form-group"><label for="author" class="form-label">' . __('Nome', 'pousada-bombinhas') . ' <span class="required">*</span></label><input id="author" name="author" type="text" class="form-input" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245" required="required" placeholder="Seu nome" /></div>',
            'email'  => '<div class="form-group"><label for="email" class="form-label">' . __('E-mail', 'pousada-bombinhas') . ' <span class="required">*</span></label><input id="email" name="email" type="email" class="form-input" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes" required="required" placeholder="seu@email.com" /></div></div>',
            'url'    => '<div class="form-group"><label for="url" class="form-label">' . __('Website', 'pousada-bombinhas') . '</label><input id="url" name="url" type="url" class="form-input" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" maxlength="200" placeholder="https://seusite.com (opcional)" /></div>',
        ),
        'submit_button'      => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-primary btn-lg" value="%4$s">%4$s</button>',
        'submit_field'       => '<div class="form-submit text-center">%1$s %2$s</div>',
    ));
    ?>

</div>

<?php
// Callback personalizado para exibir comentários
function pousada_bombinhas_comment_callback($comment, $args, $depth) {
    if ('div' === $args['style']) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag; ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent'); ?> id="comment-<?php comment_ID() ?>">
        <?php if ('div' != $args['style']) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body card">
        <?php endif; ?>
        
        <div class="comment-content" style="padding: 1.5rem;">
            <div class="comment-author vcard" style="display: flex; align-items: center; margin-bottom: 1rem;">
                <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size'], '', '', array('style' => 'border-radius: 50%; margin-right: 0.75rem;')); ?>
                <div>
                    <b class="fn" style="color: var(--text-primary);"><?php echo get_comment_author_link(); ?></b>
                    <div class="comment-meta commentmetadata" style="font-size: 0.9rem; color: var(--text-secondary);">
                        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>" style="color: var(--text-secondary); text-decoration: none;">
                            <?php printf(__('%1$s às %2$s', 'pousada-bombinhas'), get_comment_date(), get_comment_time()); ?>
                        </a>
                        <?php edit_comment_link(__('(Editar)', 'pousada-bombinhas'), '  ', ''); ?>
                    </div>
                </div>
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <em style="color: var(--text-secondary); font-style: italic;">
                    <?php _e('Seu comentário está aguardando moderação.', 'pousada-bombinhas'); ?>
                </em>
                <br />
            <?php endif; ?>

            <div style="color: var(--text-secondary); line-height: 1.6;">
                <?php comment_text(); ?>
            </div>

            <div class="reply" style="margin-top: 1rem;">
                <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
        </div>
        
        <?php if ('div' != $args['style']) : ?>
            </div>
        <?php endif; ?>
    <?php
}
?>