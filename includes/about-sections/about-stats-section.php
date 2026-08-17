<style>
    .about-stats {
        background: #0C1D4D;
        padding: 40px 20px;
    }

    .about-stats_content {
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-evenly;
        gap: 30px;
    }

    .about-stats_item {
        text-align: left;
    }

    .about-stats_number {
        display: flex;
        align-items: baseline;
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        margin: 0 0 14px;
    }

    .about-stats_number .about-count-suffix {
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
    }

    .about-stats_label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #8b87a3;
        margin: 0;
    }

    @media (max-width: 900px) {
        .about-stats_content {
            justify-content: flex-start;
        }
    }
</style>

<section class="about-stats">
    <div class="about-stats_content">
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="500">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Clients Powered</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="1200">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Projects Completed</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="10">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Years Experience</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="30">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Team Members</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="10">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Countries Served</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutContent1 = document.querySelector('.home-about_content');
        const aboutContent2 = document.querySelector('.home-about_content2');

        if (aboutContent1 || aboutContent2) {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle('in-view', entry.isIntersecting);
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -10% 0px'
            });

            if (aboutContent1) revealObserver.observe(aboutContent1);
            if (aboutContent2) revealObserver.observe(aboutContent2);
        }

        const counters = document.querySelectorAll(".about-count");

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = +counter.dataset.count;
                const duration = 2000;
                let startTime = null;

                function tick(timestamp) {
                    if (startTime === null) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    const current = Math.floor(progress * target);
                    counter.textContent = current.toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(tick);
                counterObserver.unobserve(counter);
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => counterObserver.observe(counter));
    });
</script>