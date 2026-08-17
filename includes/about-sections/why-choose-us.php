<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .wusec-section {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .wusec-container {
        display: flex;
        align-items: center;
        gap: 50px;
    }

    .wusec-img-col {
        flex: 1;
        width: 100%;
    }

    .wusec-img-wrapper {
        width: 100%;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
        background-color: #f1f5f9;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        opacity: 0;
        transform: translateX(-30px);
    }

    .wusec-img-wrapper.wusec-visible {
        opacity: 1;
        transform: translateX(0);
    }

    .wusec-img-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
    }

    .wusec-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .wusec-content-col {
        flex: 1.1;
        width: 100%;
    }

    .wusec-subtitle {
        color: #3b56af;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 8px;
    }

    .wusec-title {
        color: #120e2e;
        font-size: 34px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 28px;
    }

    .wusec-list {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .wusec-list-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 4px 0;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .wusec-list-item.wusec-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .wusec-icon {
        width: 22px;
        height: 22px;
        color: #3baf75;
        flex-shrink: 0;
        margin-top: 2px;
        transition: transform 0.3s ease;
    }

    .wusec-list-item:hover .wusec-icon {
        transform: scale(1.15);
    }

    .wusec-icon svg {
        width: 100%;
        height: 100%;
    }

    .wusec-text {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .wusec-item-title {
        color: #120e2e;
        font-size: 16px;
        font-weight: 700;
        line-height: 1.3;
    }

    .wusec-item-desc {
        color: #8c8c9a;
        font-size: 13px;
        line-height: 1.5;
    }

    /* Responsiveness for Tablets and Mobile */
    @media (max-width: 992px) {
        .wusec-container {
            flex-direction: column;
            gap: 40px;
        }

        .wusec-title {
            font-size: 28px;
            margin-bottom: 24px;
        }
    }

    @media (max-width: 480px) {
        .wusec-section {
            padding: 40px 16px;
        }

        .wusec-title {
            font-size: 24px;
        }

        .wusec-list {
            gap: 16px;
        }

        .wusec-item-title {
            font-size: 15px;
        }

        .wusec-item-desc {
            font-size: 12px;
        }
    }
</style>
<section class="wusec-section">
    <div class="wusec-container">

        <!-- Content Column -->
        <div class="wusec-content-col">
            <span class="wusec-subtitle">WHY US</span>
            <h2 class="wusec-title">Engineered for Enterprise Needs</h2>

            <div class="wusec-list">

                <!-- Item 1 -->
                <div class="wusec-list-item">
                    <div class="wusec-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="wusec-text">
                        <h3 class="wusec-item-title">Experienced Telephony Team</h3>
                        <p class="wusec-item-desc">Our engineers have configured high-throughput SIP trunks and API gateways for a decade.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="wusec-list-item">
                    <div class="wusec-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="wusec-text">
                        <h3 class="wusec-item-title">Affordable Volume-Based Pricing</h3>
                        <p class="wusec-item-desc">Enjoy decreasing per-message rates as your notification volumes scale.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="wusec-list-item">
                    <div class="wusec-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="wusec-text">
                        <h3 class="wusec-item-title">Automated DLT & Meta Compliance</h3>
                        <p class="wusec-item-desc">Zero manual tracking needed — templates compile and lock matching guidelines automatically.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="wusec-list-item">
                    <div class="wusec-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="wusec-text">
                        <h3 class="wusec-item-title">Sub-5 Second OTP Delivery</h3>
                        <p class="wusec-item-desc">Direct operator integrations bypass queues to prioritize validation passwords.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="wusec-list-item">
                    <div class="wusec-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="wusec-text">
                        <h3 class="wusec-item-title">24/7 Technical SLA Support</h3>
                        <p class="wusec-item-desc">Direct access to support lines and engineers to debug custom database alerts.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Image Column -->
        <div class="wusec-img-col">
            <div class="wusec-img-wrapper">
                <img src="assets/images/why_choose_us.png" alt="Engineered for Enterprise Needs" class="wusec-img">
            </div>
        </div>


    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const wusecImg = document.querySelector('.wusec-img-wrapper');
        const wusecItems = document.querySelectorAll('.wusec-list-item');

        const wusecObserverOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -30px 0px'
        };

        const wusecObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('wusec-img-wrapper')) {
                        entry.target.classList.add('wusec-visible');
                    } else {
                        // Staggered animation for list items
                        const index = Array.from(wusecItems).indexOf(entry.target);
                        setTimeout(() => {
                            entry.target.classList.add('wusec-visible');
                        }, index * 100);
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, wusecObserverOptions);

        if (wusecImg) wusecObserver.observe(wusecImg);
        wusecItems.forEach(item => wusecObserver.observe(item));
    });
</script>