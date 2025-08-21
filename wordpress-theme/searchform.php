<?php
/**
 * Search Form Template
 * Formulário de busca personalizado
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="form-group" style="display: flex; gap: 0.5rem; align-items: center;">
        <input 
            type="search" 
            class="form-input" 
            placeholder="<?php echo esc_attr_x('Buscar...', 'placeholder', 'pousada-bombinhas'); ?>" 
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            title="<?php echo esc_attr_x('Buscar por:', 'label', 'pousada-bombinhas'); ?>"
            style="flex: 1; margin-bottom: 0;"
        />
        <button type="submit" class="btn btn-primary" style="padding: 0.75rem 1.5rem;">
            🔍 Buscar
        </button>
    </div>
</form>