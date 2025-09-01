<?php
/**
 * 404 Error Template
 * Template para página de erro 404
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div style="padding-top: 120px; padding-bottom: 4rem; text-align: center;">
            
            <!-- 404 Content -->
            <div style="max-width: 600px; margin: 0 auto;">
                
                <!-- 404 Illustration -->
                <div style="margin-bottom: 3rem;">
                    <div style="font-size: 8rem; line-height: 1; color: var(--primary-color); margin-bottom: 1rem;">
                        🏝️
                    </div>
                    <div style="font-size: 4rem; font-weight: 700; color: var(--text-primary); margin-bottom: 1rem;">
                        404
                    </div>
                    <h1 style="font-size: 2rem; font-weight: 600; color: var(--text-primary); margin-bottom: 1rem;">
                        Oops! Página não encontrada
                    </h1>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.6;">
                        Parece que a página que você está procurando se perdeu no mar de Bombinhas! 
                        Não se preocupe, vamos te ajudar a encontrar o caminho de volta.
                    </p>
                </div>

                <!-- Back Button -->
                <div style="margin-bottom: 2rem;">
                    <button onclick="window.history.back()" 
                            class="btn btn-secondary"
                            style="margin-right: 1rem;">
                        ← Voltar
                    </button>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        🏠 Página Inicial
                    </a>
                </div>

            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>