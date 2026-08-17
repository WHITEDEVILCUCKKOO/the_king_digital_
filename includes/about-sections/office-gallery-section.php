<style>
    /* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    } */

    .ogsec-gallery-section {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .ogsec-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .ogsec-subtitle {
        color: #3b56af;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 8px;
    }

    .ogsec-title {
        color: #120e2e;
        font-size: 36px;
        font-weight: 800;
        line-height: 1.2;
    }

    .ogsec-cards-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .ogsec-card {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        border: 1px solid #f0f0f5;
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        opacity: 0;
        transform: translateY(30px);
    }

    .ogsec-card.ogsec-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .ogsec-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 30px rgba(18, 14, 46, 0.12);
    }

    .ogsec-img-wrapper {
        width: 100%;
        height: 190px;
        overflow: hidden;
        background-color: #e2e8f0;
    }

    .ogsec-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .ogsec-card:hover .ogsec-card-img {
        transform: scale(1.08);
    }

    .ogsec-card-content {
        padding: 20px 16px;
        text-align: center;
    }

    .ogsec-card-title {
        color: #120e2e;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .ogsec-card-desc {
        color: #8c8c9a;
        font-size: 12px;
        line-height: 1.5;
    }

    /* Responsiveness for Tablets and Mobile */
    @media (max-width: 1024px) {
        .ogsec-cards-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 600px) {
        .ogsec-cards-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .ogsec-title {
            font-size: 28px;
        }

        .ogsec-gallery-section {
            padding: 40px 16px;
        }
    }
</style>
<section class="ogsec-gallery-section">
    <div class="ogsec-header">
        <span class="ogsec-subtitle">OUR WORKSPACE</span>
        <h2 class="ogsec-title">Office Gallery</h2>
    </div>

    <div class="ogsec-cards-grid">
        <!-- Card 1 -->
        <div class="ogsec-card">
            <div class="ogsec-img-wrapper">
                <img src="assets/images/office_images/office_demo_img-1.png" alt="Modern Workspace" class="ogsec-card-img">
            </div>
            <div class="ogsec-card-content">
                <h3 class="ogsec-card-title">Modern Workspace</h3>
                <p class="ogsec-card-desc">Sleek developer desks promoting open interaction.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="ogsec-card">
            <div class="ogsec-img-wrapper">
                <img src="assets/images/office_images/office_demo_img-2.png" alt="Collaboration Lounge" class="ogsec-card-img">
            </div>
            <div class="ogsec-card-content">
                <h3 class="ogsec-card-title">Collaboration Lounge</h3>
                <p class="ogsec-card-desc">Comfortable zones for quick client syncs.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="ogsec-card">
            <div class="ogsec-img-wrapper">
                <img src="assets/images/office_images/office_demo_img-3.png" alt="Executive Cabin" class="ogsec-card-img">
            </div>
            <div class="ogsec-card-content">
                <h3 class="ogsec-card-title">Executive Cabin</h3>
                <p class="ogsec-card-desc">Equipped for focused engineering leadership and carrier syncs.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="ogsec-card">
            <div class="ogsec-img-wrapper">
                <img src="assets/images/office_images/office_demo_img-4.png" alt="Lobby Reception" class="ogsec-card-img">
            </div>
            <div class="ogsec-card-content">
                <h3 class="ogsec-card-title">Lobby Reception</h3>
                <p class="ogsec-card-desc">Welcoming clients and telecom operator reps.</p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const ogsecCards = document.querySelectorAll('.ogsec-card');

        const ogsecObserverOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        };

        const ogsecObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('ogsec-visible');
                    }, index * 120);
                    observer.unobserve(entry.target);
                }
            });
        }, ogsecObserverOptions);

        ogsecCards.forEach(card => ogsecObserver.observe(card));
    });
</script>