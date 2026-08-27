<style>
    .cta-section {
        --cta-orange: #FF6B1A;
        --cta-orange-dark: #E95508;
        --cta-dark: #100B22;
        --cta-dark-2: #1B1338;
        --cta-text-muted: #B7BAD1;
        --cta-orange-soft: #FFF0E8;

        background: var(--cta-orange-soft);
        padding: 56px 0;
        overflow: hidden;
    }

    .cta-section::before {
        content: "";

        position: absolute;
        inset: 0;

        background:
            repeating-linear-gradient(135deg,
                rgba(255, 255, 255, 0.025) 0,
                rgba(255, 255, 255, 0.025) 1px,
                transparent 1px,
                transparent 9px);

        pointer-events: none;
    }

    .cta-container {
        max-width: 1160px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    .cta-banner {
        position: relative;
        overflow: hidden;
        border-radius: 26px;
        background:
            radial-gradient(circle at 78% 25%, rgba(139, 92, 246, 0.20), transparent 45%),
            linear-gradient(120deg, var(--cta-dark) 0%, var(--cta-dark-2) 60%, var(--cta-dark) 100%);
        padding: 40px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        box-shadow: 0 24px 50px rgba(16, 11, 34, 0.28);
    }

    /* Subtle diagonal line texture on the right side */
    .cta-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        background-image: repeating-linear-gradient(115deg,
                rgba(255, 255, 255, 0.05) 0px,
                rgba(255, 255, 255, 0.05) 1px,
                transparent 1px,
                transparent 14px);
        -webkit-mask-image: linear-gradient(90deg, transparent 35%, #000 100%);
        mask-image: linear-gradient(90deg, transparent 35%, #000 100%);
        pointer-events: none;
    }

    /* ---------- Text ---------- */

    .cta-text {
        position: relative;
        z-index: 1;
        max-width: 460px;
    }

    .cta-heading {
        font-size: clamp(22px, 2.6vw, 28px);
        line-height: 1.25;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 10px;
    }

    .cta-heading .accent {
        color: var(--cta-orange);
    }

    .cta-subtitle {
        font-size: 13px;
        line-height: 1.6;
        color: var(--cta-text-muted);
        max-width: 380px;
    }

    /* ---------- Action ---------- */

    .cta-action {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
        flex: none;
    }

    .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 26px;
        border-radius: 999px;
        background: linear-gradient(120deg, var(--cta-orange) 0%, var(--cta-orange-dark) 100%);
        color: #FFFFFF;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        box-shadow: 0 12px 26px rgba(255, 107, 26, 0.32);
        transition: transform 260ms ease, box-shadow 260ms ease;
    }

    .cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 16px 34px rgba(255, 107, 26, 0.4);
    }

    .cta-btn svg {
        width: 16px;
        height: 16px;
        transition: transform 220ms ease;
    }

    .cta-btn:hover svg {
        transform: translateX(3px);
    }

    .cta-badges {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .cta-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        font-weight: 600;
        color: var(--cta-text-muted);
        white-space: nowrap;
    }

    .cta-badge svg {
        width: 13px;
        height: 13px;
        color: var(--cta-orange);
        flex: none;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 860px) {
        .cta-banner {
            flex-direction: column;
            align-items: flex-start;
            padding: 32px 28px;
        }

        .cta-text,
        .cta-action {
            max-width: 100%;
        }

        .cta-action {
            align-items: flex-start;
            width: 100%;
        }

        .cta-banner::before {
            -webkit-mask-image: linear-gradient(180deg, transparent 30%, #000 100%);
            mask-image: linear-gradient(180deg, transparent 30%, #000 100%);
        }
    }

    @media (max-width: 480px) {
        .cta-section {
            padding: 40px 0;
        }

        .cta-banner {
            padding: 28px 20px;
            border-radius: 20px;
        }

        .cta-btn {
            width: 100%;
            justify-content: center;
        }

        .cta-badges {
            gap: 14px;
        }
    }
</style>

<section class="cta-section">
    <div class="cta-container">
        <div class="cta-banner">

            <div class="cta-text">
                <h2 class="cta-heading">Ready to Create Something <span class="accent">Amazing?</span></h2>
                <p class="cta-subtitle">Let's bring your vision to life with our creative expertise and professional studio.</p>
            </div>

            <div class="cta-action">
                <a class="cta-btn" href="#contact">
                    Book a Free Consultation
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>
                <div class="cta-badges">
                    <span class="cta-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12.5l2 2 4-4.5" />
                        </svg>
                        Quick Response
                    </span>
                    <span class="cta-badge">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12.5l2 2 4-4.5" />
                        </svg>
                        No Hidden Charges
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>