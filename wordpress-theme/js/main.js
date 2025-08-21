/**
 * Main JavaScript - Pousada Praia de Bombinhas Theme
 * Funcionalidades principais do tema
 */

(function($) {
    'use strict';

    // Aguardar o DOM estar pronto
    $(document).ready(function() {
        
        // ========== MENU MOBILE ==========
        $('.menu-toggle').on('click', function() {
            $('.main-navigation').toggleClass('mobile-open');
            $(this).attr('aria-expanded', $('.main-navigation').hasClass('mobile-open'));
        });

        // Fechar menu mobile ao clicar em um link
        $('.main-navigation a').on('click', function() {
            $('.main-navigation').removeClass('mobile-open');
            $('.menu-toggle').attr('aria-expanded', 'false');
        });

        // ========== SMOOTH SCROLL ==========
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
                location.hostname == this.hostname) {
                
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80 // Offset para header fixo
                    }, 800, 'swing');
                }
            }
        });

        // ========== HEADER SCROLL EFFECT ==========
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            
            if (scroll >= 100) {
                $('.site-header').addClass('scrolled');
            } else {
                $('.site-header').removeClass('scrolled');
            }
        });

        // ========== ANIMAÇÕES ON SCROLL ==========
        function animateOnScroll() {
            $('.animate-on-scroll').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                
                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animate-fadeIn');
                }
            });
        }
        
        // Aplicar animações na inicialização e no scroll
        animateOnScroll();
        $(window).scroll(animateOnScroll);

        // ========== WHATSAPP FLOAT BUTTON ==========
        // Adicionar funcionalidade extra se necessário
        $('.whatsapp-float').hover(
            function() {
                $(this).stop().animate({
                    transform: 'scale(1.1)'
                }, 200);
            },
            function() {
                $(this).stop().animate({
                    transform: 'scale(1)'
                }, 200);
            }
        );

        // ========== FORMULÁRIO DE CONTATO ==========
        $('.contact-form').on('submit', function(e) {
            var form = $(this);
            var submitBtn = form.find('button[type="submit"]');
            var originalText = submitBtn.text();
            
            // Validação básica
            var isValid = true;
            form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val().trim()) {
                    isValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification('Por favor, preencha todos os campos obrigatórios.', 'error');
                return false;
            }
            
            // Feedback visual durante envio
            submitBtn.text('Enviando...').prop('disabled', true);
            
            // Simular delay para feedback (remover se usando AJAX real)
            setTimeout(function() {
                submitBtn.text(originalText).prop('disabled', false);
            }, 2000);
        });

        // ========== LAZY LOADING DE IMAGENS ==========
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // ========== NOTIFICAÇÕES ==========
        function showNotification(message, type = 'info') {
            var notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
            $('body').append(notification);
            
            setTimeout(function() {
                notification.addClass('show');
            }, 100);
            
            setTimeout(function() {
                notification.removeClass('show');
                setTimeout(function() {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // ========== ACCORDION SIMPLES ==========
        $('.accordion-header').click(function() {
            var content = $(this).next('.accordion-content');
            var isOpen = content.hasClass('open');
            
            // Fechar todos os outros
            $('.accordion-content').removeClass('open').slideUp();
            $('.accordion-header').removeClass('active');
            
            // Abrir/fechar o clicado
            if (!isOpen) {
                content.addClass('open').slideDown();
                $(this).addClass('active');
            }
        });

        // ========== CONTADOR DE CARACTERES ==========
        $('textarea[maxlength]').each(function() {
            var textarea = $(this);
            var maxLength = textarea.attr('maxlength');
            var counter = $('<div class="char-counter">0 / ' + maxLength + '</div>');
            textarea.after(counter);
            
            textarea.on('input', function() {
                var currentLength = $(this).val().length;
                counter.text(currentLength + ' / ' + maxLength);
                
                if (currentLength > maxLength * 0.9) {
                    counter.addClass('warning');
                } else {
                    counter.removeClass('warning');
                }
            });
        });

        // ========== MASCARAS DE INPUT ==========
        // Máscara para telefone
        $('input[type="tel"]').on('input', function() {
            var value = $(this).val().replace(/\D/g, '');
            var formattedValue = '';
            
            if (value.length > 0) {
                formattedValue = '(' + value.substring(0, 2);
            }
            if (value.length > 2) {
                formattedValue += ') ' + value.substring(2, 7);
            }
            if (value.length > 7) {
                formattedValue += '-' + value.substring(7, 11);
            }
            
            $(this).val(formattedValue);
        });

    }); // End document ready

    // ========== FUNÇÕES DE RESIZE ==========
    $(window).resize(function() {
        // Fechar menu mobile em telas grandes
        if ($(window).width() > 768) {
            $('.main-navigation').removeClass('mobile-open');
            $('.menu-toggle').attr('aria-expanded', 'false');
        }
    });

})(jQuery);

// ========== VANILLA JS FUNCTIONS ==========
// Função para Google Maps (se necessário)
function initMap() {
    // Coordenadas de Bombinhas, SC
    const bombinhas = { lat: -27.1432, lng: -48.4827 };
    
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: bombinhas,
    });
    
    const marker = new google.maps.Marker({
        position: bombinhas,
        map: map,
        title: "Pousada Praia de Bombinhas",
    });
}

// Função para integração com WhatsApp
function openWhatsApp(message = '') {
    const phone = '5548999999999'; // Alterar para o número real
    const defaultMessage = 'Olá! Gostaria de fazer uma reserva na Pousada Praia de Bombinhas.';
    const finalMessage = message || defaultMessage;
    const url = `https://wa.me/${phone}?text=${encodeURIComponent(finalMessage)}`;
    window.open(url, '_blank');
}

// Função para scroll suave (fallback)
function smoothScroll(target) {
    const element = document.querySelector(target);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}