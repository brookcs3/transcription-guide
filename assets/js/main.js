// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Sort article cards by date (newest first)
function sortArticlesByDate() {
    const container = document.querySelector('.articles-grid');
    if (!container) return;

    const articles = Array.from(container.querySelectorAll('.article-card'));

    articles.sort((a, b) => {
        const dateA = new Date(a.querySelector('.date').textContent.replace(/(\w+ )?(\d+), (\d+)/, '$2 $1 $3'));
        const dateB = new Date(b.querySelector('.date').textContent.replace(/(\w+ )?(\d+), (\d+)/, '$2 $1 $3'));
        return dateB - dateA; // Newest first
    });

    // Re-append sorted articles
    articles.forEach(article => container.appendChild(article));
}

// Fade-in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

// Observe elements to animate
document.addEventListener('DOMContentLoaded', () => {
    sortArticlesByDate();
    document.querySelectorAll('.article-card, .use-case, .hero, .app-spotlight').forEach(el => {
        observer.observe(el);
    });
});
