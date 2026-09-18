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




// ==================== new counting function 

document.addEventListener("DOMContentLoaded", () => {

    const scrollBox = document.querySelector(".right_section_1");

    if (!scrollBox) {
        console.log("right_section_1 not found");
        return;
    }

    const counterSection = document.querySelector(".counrt_grid_wer854_card");

    if (!counterSection) {
        console.log("Counter section not found");
        return;
    }

    function startCounter(counter) {

        if (counter.dataset.counted === "true") {
            return;
        }

        counter.dataset.counted = "true";

        const target = parseFloat(counter.dataset.target);
        const suffix = counter.dataset.suffix || "";
        const duration = 2000;

        const startTime = performance.now();

        function count(currentTime) {

            const progress = Math.min(
                (currentTime - startTime) / duration,
                1
            );

            const ease = 1 - Math.pow(1 - progress, 3);

            const value = target * ease;

            counter.textContent =
                (target % 1 !== 0
                    ? value.toFixed(1)
                    : Math.floor(value)
                ) + suffix;

            if (progress < 1) {
                requestAnimationFrame(count);
            } else {
                counter.textContent =
                    (target % 1 !== 0
                        ? target.toFixed(1)
                        : target
                    ) + suffix;
            }
        }

        requestAnimationFrame(count);
    }


    const observer = new IntersectionObserver((entries, observer) => {

        entries.forEach((entry) => {

            if (!entry.isIntersecting) {
                return;
            }

            console.log("Counter section visible");

            const counters = counterSection.querySelectorAll(".qunik-count");

            counters.forEach((counter) => {
                startCounter(counter);
            });

            observer.unobserve(counterSection);
        });

    }, {
        root: scrollBox,
        threshold: 0.2
    });


    observer.observe(counterSection);

});
document.querySelectorAll(".qunik-count").forEach((counter) => {

    const target = parseFloat(counter.dataset.target);
    const suffix = counter.dataset.suffix || "";
    const duration = 2000;
    const startTime = performance.now();

    function count(currentTime) {

        const progress = Math.min(
            (currentTime - startTime) / duration,
            1
        );

        const ease = 1 - Math.pow(1 - progress, 3);
        const value = target * ease;

        counter.textContent =
            (target % 1 !== 0 ? value.toFixed(1) : Math.floor(value))
            + suffix;

        if (progress < 1) {
            requestAnimationFrame(count);
        }
    }

    requestAnimationFrame(count);
});


// how to use this new counting function in html
// <span class="qunik-count" data-target="1.2" data-suffix="M">0</span>
// <span class="qunik-count" data-target="98.9" data-suffix="%">0</span>
// <span class="qunik-count" data-target="10" data-suffix="K+">0</span>





// ==================== random number conter 
function randomCounter(element) {

    function animate() {
        const start = Date.now();

        function update() {

            element.textContent = Math.floor(Math.random() * 10);

            if (Date.now() - start < 800) {
                requestAnimationFrame(update);
            } else {
                setTimeout(animate, 1000);
            }
        }

        update();
    }

    animate();
}

document.querySelectorAll(".randomNumber").forEach(function (element) {
    randomCounter(element);
});


// for use do this ( <span class="randomNumber">0</span> )



// ==================== ICPaaS floating widget visibility ====================
//
// The ICPaaS voice connector script (blob-widget.js, loaded from footer.php)
// auto-injects its OWN floating launcher bubble + panel into the page,
// separate from the hand-built "AI Assistant" card in the Home hero section.
// Requirement: that auto-widget must be completely hidden while the Home
// hero is on screen, and appear normally everywhere else (other pages, and
// on the Home page once the visitor scrolls past the hero) — without ever
// removing the widget from the DOM or touching the ICPaaS SDK itself.
//
// Identifying the widget:
// ICPaaS doesn't publish a selector for the element(s) it injects, but we do
// control (and therefore know) one real, non-arbitrary signal: the
// `data-namespace="KD"` attribute on the connector <script> tag in
// footer.php. Widget scripts built this way conventionally name their root
// element(s) after that namespace (e.g. id/class "kd-widget",
// "KD_panel", "icpaas-launcher"). So detection here is namespace-first:
// look for elements whose id/class token is exactly "kd"/"icpaas" or starts
// with "kd-"/"kd_"/"icpaas-"/"icpaas_" (case-insensitive). Only if nothing
// matches that do we fall back to a narrower generic check (a fixed/sticky
// direct child of <body> that isn't one of our own known elements) so we
// still degrade gracefully if ICPaaS ever changes their internal naming.
//
// Timing:
// blob-widget.js has no defer/async, so its own DOM injection can happen
// before this deferred script even starts. To handle that without polling
// or arbitrary setTimeout delays, we do one immediate scan on startup (which
// catches anything already mounted), then rely purely on a MutationObserver
// for anything the widget injects later (e.g. opening a panel on click).
(function () {

    var HERO_SELECTOR = '#home-hero-section';
    var HIDDEN_CLASS = 'icpaas-widget-hidden';
    var WIDGET_TAG_CLASS = 'icpaas-floating-widget';

    // The connector's own configured namespace (see footer.php:
    // data-namespace="KD") — the real, known identifier for its widget.
    var NAMESPACE_PATTERN = /(^|[-_])(kd|icpaas)([-_]|$)/i;

    // Elements that belong to THIS site's own UI — never candidates.
    var OWN_ELEMENT_SELECTORS = [
        '#home-hero-section',
        '#main-nav',
        '#mob-nav',
        '#hamburger',
        'header',
        'footer'
    ];

    var hero = document.querySelector(HERO_SELECTOR);
    var heroIsVisible = true; // assume visible until IntersectionObserver says otherwise
    var trackedWidgetEls = [];

    function isOwnElement(el) {
        for (var i = 0; i < OWN_ELEMENT_SELECTORS.length; i++) {
            var match = document.querySelector(OWN_ELEMENT_SELECTORS[i]);
            if (match && (match === el || match.contains(el))) return true;
        }
        return false;
    }

    function matchesNamespace(el) {
        if (el.id && NAMESPACE_PATTERN.test(el.id)) return true;
        if (el.className && typeof el.className === 'string') {
            var tokens = el.className.split(/\s+/);
            for (var i = 0; i < tokens.length; i++) {
                if (NAMESPACE_PATTERN.test(tokens[i])) return true;
            }
        }
        return false;
    }

    function isFixedOrSticky(el) {
        var cs = window.getComputedStyle(el);
        return cs.position === 'fixed' || cs.position === 'sticky';
    }

    function applyVisibility(el) {
        el.classList.toggle(HIDDEN_CLASS, heroIsVisible);
    }

    function track(el) {
        if (trackedWidgetEls.indexOf(el) !== -1) return;
        trackedWidgetEls.push(el);
        el.classList.add(WIDGET_TAG_CLASS);
        applyVisibility(el);
    }

    function considerElement(el) {
        if (!(el instanceof Element)) return;
        if (trackedWidgetEls.indexOf(el) !== -1) return;
        if (['SCRIPT', 'STYLE', 'LINK'].indexOf(el.tagName) !== -1) return;
        if (isOwnElement(el)) return;

        // Primary signal: it's actually named after the connector's namespace.
        if (matchesNamespace(el)) {
            track(el);
            return;
        }

        // Fallback signal: a top-level floating element that isn't ours.
        // Scoped tightly (direct body children only) to avoid catching
        // unrelated in-page UI.
        if (el.parentElement === document.body && isFixedOrSticky(el)) {
            track(el);
        }
    }

    function scanExisting() {
        // Namespace matches can live anywhere in the tree, so search broadly
        // for those specifically (narrow pattern = safe to search wide).
        document.querySelectorAll('[id], [class]').forEach(function (el) {
            if (matchesNamespace(el) && !isOwnElement(el)) considerElement(el);
        });
        // Generic fallback stays scoped to direct <body> children.
        Array.prototype.slice.call(document.body.children).forEach(considerElement);
    }

    // One immediate scan — covers the case where blob-widget.js (no defer)
    // already injected its widget before this deferred script ran.
    scanExisting();

    // From here on, no polling: just react to whatever the widget adds later
    // (e.g. a panel it creates only when opened).
    var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            mutation.addedNodes.forEach(function (node) {
                if (!(node instanceof Element)) return;
                considerElement(node);
                node.querySelectorAll && node.querySelectorAll('[id], [class]').forEach(function (el) {
                    if (matchesNamespace(el) && !isOwnElement(el)) considerElement(el);
                });
            });
        });
    });
    observer.observe(document.body, { childList: true, subtree: true });

    function syncAllVisibility() {
        trackedWidgetEls.forEach(applyVisibility);
    }

    if (hero && 'IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                heroIsVisible = entry.isIntersecting;
                syncAllVisibility();
            });
        }, { threshold: 0.15 });
        io.observe(hero);
    } else {
        // No hero on this page (or no IntersectionObserver support) — the
        // widget should just show normally, as on any other page.
        heroIsVisible = false;
        syncAllVisibility();
    }

    // Handy for debugging from devtools: window.__icpaasWidgetEls
    window.__icpaasWidgetEls = trackedWidgetEls;

})();