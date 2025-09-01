/**
 * Main JavaScript for Pousada Bombinhas Theme
 * 
 * @package PousadaBombinhas
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initializeTheme();
    });

    /**
     * Initialize all theme functionality
     */
    function initializeTheme() {
        setupMobileMenu();
        setupSmoothScrolling();
        setupHeaderScrollEffect();
        setupAnimationsOnScroll();
    }

    /**
     * Mobile Menu Toggle
     */
    function setupMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navigation = document.querySelector('.main-navigation');
        
        if (menuToggle && navigation) {
            menuToggle.addEventListener('click', function() {
                const isOpen = navigation.classList.contains('mobile-open');
                
                if (isOpen) {
                    navigation.classList.remove('mobile-open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.innerHTML = '☰';
                } else {
                    navigation.classList.add('mobile-open');
                    menuToggle.setAttribute('aria-expanded', 'true');
                    menuToggle.innerHTML = '✕';
                }
            });

            // Close menu when clicking on links
            const navLinks = navigation.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navigation.classList.remove('mobile-open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.innerHTML = '☰';
                });
            });
        }
    }

    /**
     * Smooth Scrolling for Anchor Links
     */
    function setupSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    // Calculate offset for fixed header
                    const headerHeight = document.querySelector('.site-header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Header Scroll Effect
     */
    function setupHeaderScrollEffect() {
        const header = document.querySelector('.site-header');
        
        if (header) {
            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }
    }

    /**
     * Animations on Scroll
     */
    function setupAnimationsOnScroll() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements with animation classes
        const animateElements = document.querySelectorAll('.card, .section-title, .section-subtitle');
        animateElements.forEach(el => {
            observer.observe(el);
        });
    }

})();