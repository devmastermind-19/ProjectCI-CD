// QuickPOS — Main JavaScript
document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');
    if (hamburger && nav) {
        hamburger.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
        nav.querySelectorAll('.nav__link').forEach(link => {
            link.addEventListener('click', () => nav.classList.remove('active'));
        });
    }
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const id = anchor.getAttribute('href');
            if (id === '#') return;
            e.preventDefault();
            document.querySelector(id)?.scrollIntoView({ behavior: 'smooth' });
        });
    });
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    const style = document.createElement('style');
    style.textContent = '.revealed{opacity:1!important;transform:translateY(0)!important}';
    document.head.appendChild(style);
    document.querySelectorAll('.feature-card,.pricing-card,.contact__form').forEach((el, i) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = `opacity 0.6s ease ${i * 0.1}s, transform 0.6s ease ${i * 0.1}s`;
        observer.observe(el);
    });
});
