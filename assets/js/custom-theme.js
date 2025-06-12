/**
 * Custom Theme JavaScript
 * This file adds additional functionality to ensure consistent layout across all pages
 */

// Wait for page to load
document.addEventListener('DOMContentLoaded', function() {
    // Add pattern overlay to main panel if it doesn't exist
    if (document.querySelector('.main-panel') && !document.querySelector('.main-panel-pattern')) {
        const mainPanel = document.querySelector('.main-panel');
        const patternDiv = document.createElement('div');
        patternDiv.className = 'main-panel-pattern';
        mainPanel.appendChild(patternDiv);
    }
    
    // Ensure proper sidebar height
    const sidebar = document.querySelector('.sidebar');
    const mainPanel = document.querySelector('.main-panel');
    
    if (sidebar && mainPanel) {
        const windowHeight = window.innerHeight;
        sidebar.style.minHeight = windowHeight + 'px';
        
        // Handle mobile toggle
        const navbarToggle = document.querySelector('.navbar-toggle');
        if (navbarToggle) {
            navbarToggle.addEventListener('click', function() {
                document.body.classList.toggle('nav-open');
            });
        }
    }
    
    // Add animations to cards
    const cards = document.querySelectorAll('.card');
    cards.forEach(function(card, index) {
        card.style.animationDelay = (index * 0.1) + 's';
    });
});
