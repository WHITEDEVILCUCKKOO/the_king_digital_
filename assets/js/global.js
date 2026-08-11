/* ─ Mobile hamburger menu ─ */
const hamburger = document.getElementById('hamburger');
const mobNav = document.getElementById('mob-nav');
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    mobNav.classList.toggle('open');
});

/* ─ Animated counters ─ */
function animateCount(el, target, duration = 1800) {
    let start = null;
    const step = (timestamp) => {
        if (!start) start = timestamp;
        const progress = Math.min((timestamp - start) / duration, 1);
        const ease = 1 - Math.pow(1 - progress, 4);
        const current = Math.floor(ease * target);
        el.textContent = current.toLocaleString('en-IN') + (progress < 1 ? '' : '+');
        if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
}

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.dataset.count);
            animateCount(el, target);
            counterObserver.unobserve(el);
        }
    });
}, {
    threshold: 0.4
});

document.querySelectorAll('[data-count]').forEach(el => counterObserver.observe(el));

/* ─ Scroll reveal ─ */
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            setTimeout(() => entry.target.classList.add('visible'), 60 * (entry.target.dataset.delay || 0));
            revealObserver.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.12
});

document.querySelectorAll('.reveal').forEach((el, i) => {
    revealObserver.observe(el);
});

/* ─ Portfolio filter ─ */
function filterPort(btn, type) {
    document.querySelectorAll('.port-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.port-card').forEach(card => {
        if (type === 'all' || card.dataset.type === type) {
            card.style.display = 'block';
            card.style.animation = 'none';
            setTimeout(() => card.style.animation = '', 10);
        } else {
            card.style.display = 'none';
        }
    });
}

/* ─ FAQ accordion ─ */
document.querySelectorAll('.faq-q').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    });
});

/* ─ Sticky nav shadow ─ */
window.addEventListener('scroll', () => {
    const nav = document.getElementById('main-nav');
    nav.style.boxShadow = window.scrollY > 10 ?
        '0 2px 20px rgba(0,0,0,.1)' :
        '0 2px 8px rgba(0,0,0,.06)';
});

/* ─ Active nav link on scroll ─ */
const sections = document.querySelectorAll('section[id], div[id]');
const navLinks = document.querySelectorAll('.nav-links > a');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(sec => {
        if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
    });
    navLinks.forEach(link => {
        link.style.color = link.getAttribute('href') === '#' + current ?
            'var(--blue)' : '';
    });
});