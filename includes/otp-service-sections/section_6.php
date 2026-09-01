<style>
    .mt-benefits-section {
        position: relative;
        overflow: hidden;
        padding: 62px 20px;
        background: #E5E5EC;

        /* background:
      radial-gradient(circle at 50% 0%, rgba(56, 103, 196, 0.08), transparent 35%),
      #ffffff; */
        /* font-family: inherit; */
    }

    .mt-benefits-section::before {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: rgba(59, 104, 193, 0.27);
        top: -270px;
        left: -180px;
        pointer-events: none;
    }

    .mt-benefits-section::after {
        content: "";
        position: absolute;
        width: 380px;
        height: 380px;
        border-radius: 50%;
        background: rgba(83, 111, 183, 0.3);
        right: -180px;
        bottom: -270px;
        pointer-events: none;
    }

    .mt-benefits-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1420px;
        margin: 0 auto;
    }


    .mt-benefits-heading {
        max-width: 920px;
        margin: 0 auto 38px;
        text-align: center;
    }

    .mt-benefits-badge {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 16px;
        margin-bottom: 15px;
        border: 1px solid rgba(47, 91, 177, 0.2);
        border-radius: 100px;
        background: rgba(52, 99, 191, 0.05);
        color: #355fa8;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .mt-benefits-badge-dot {
        width: 7px;
        height: 7px;
        flex: 0 0 7px;
        border-radius: 50%;
        background: #1949e7;
        animation: mtBenefitsDotBlink 1.5s infinite;
    }

    @keyframes mtBenefitsDotBlink {

        0%,
        100% {
            opacity: 1;
            box-shadow: 0 0 0 0 rgba(43, 57, 178, 0.35);
        }

        50% {
            opacity: 0.45;
            box-shadow: 0 0 0 6px rgba(43, 90, 178, 0);
        }
    }

    .mt-benefits-heading h2 {
        margin: 0;
        color: #1f3048;
        font-size: 44px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.2px;
    }

    .mt-benefits-heading h2 span {
        color: #315fb8;
    }

    .mt-benefits-heading p {
        max-width: 720px;
        margin: 16px auto 0;
        color: #667386;
        font-size: 16px;
        line-height: 1.7;
    }

    .mt-benefits-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 18px;
    }

    .mt-benefit-card {
        position: relative;
        min-height: 310px;
        padding: 27px 28px 22px;
        overflow: hidden;
        border: 1px solid #dce3ec;
        border-radius: 16px;
        background: #F4F4F7;
        /* background: #ffffff; */
        box-shadow: 0 8px 24px rgba(27, 49, 83, 0.045);
        transition:
            border-color 0.25s ease,
            box-shadow 0.25s ease,
            background 0.25s ease;
    }

    /* No upward movement on hover */
    .mt-benefit-card:hover {
        border-color: rgba(48, 94, 184, 0.45);
        box-shadow: 0 14px 34px rgba(42, 72, 124, 0.1);
    }

    .mt-benefit-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #315eb7, #5c78d0);
        transition: width 0.3s ease;
    }

    .mt-benefit-card:hover::before {
        width: 100%;
    }

    .mt-benefit-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 21px;
    }

    .mt-benefit-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 76px;
        height: 76px;
        padding: 8px;
        border-radius: 18px;
        background: linear-gradient(145deg, #f8fbff, #edf4ff);
    }

    .mt-benefit-icon svg {
        width: 62px;
        height: 62px;
        display: block;
    }

    .mt-whatsapp-icon {
        background: rgba(37, 184, 75, 0.06);
    }

    .mt-benefit-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid #dce4ef;
        background: #f8fafc;
        color: #6c7a8d;
        font-size: 11px;
        font-weight: 800;
        transition:
            background 0.25s ease,
            color 0.25s ease,
            border-color 0.25s ease;
    }

    /* Only number changes on hover */
    .mt-benefit-card:hover .mt-benefit-number {
        background: #315fb8;
        border-color: #315fb8;
        color: #ffffff;
    }

    .mt-benefit-card h3 {
        max-width: 260px;
        margin: 0 0 13px;
        color: #293b53;
        font-size: clamp(20px, 1.5vw, 26px);
        line-height: 1.35;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }

    .mt-benefit-card p {
        margin: 0;
        color: #697587;
        font-size: 14px;
        line-height: 1.65;
    }

    .mt-benefit-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-top: 20px;
        padding-top: 16px;
        border-top: 1px solid #edf0f4;
        color: #49699d;
        font-size: 12px;
        font-weight: 700;
    }

    .mt-benefit-arrow {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 27px;
        height: 27px;
        border-radius: 50%;
        background: #f0f5ff;
        color: #315fb8;
        font-size: 17px;
        transition: all 0.25s ease;
    }

    .mt-benefit-card:hover .mt-benefit-arrow {
        background: #315fb8;
        color: #ffffff;
    }



    .mt-featured-card {
        border-color: #cddaff;
        background:
            linear-gradient(180deg, rgba(245, 248, 255, 0.95), #ffffff);
        box-shadow: 0 10px 30px rgba(54, 90, 173, 0.12);
    }

    .mt-featured-label {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-bottom: 17px;
        color: #315fb8;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .mt-featured-label span {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #315fb8;
        animation: mtFeatureBlink 1.4s infinite;
    }

    @keyframes mtFeatureBlink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.35;
        }
    }

    .mt-featured-card .mt-benefit-top {
        margin-bottom: 19px;
    }


    @media (max-width: 1100px) {
        .mt-benefits-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .mt-benefit-card {
            min-height: auto;
        }
    }


    @media (max-width: 680px) {
        .mt-benefits-section {
            padding: 48px 15px;
        }

        .mt-benefits-heading {
            margin-bottom: 28px;
        }

        .mt-benefits-heading h2 {
            font-size: 30px;
            letter-spacing: -0.6px;
        }

        .mt-benefits-heading p {
            font-size: 14px;
            line-height: 1.65;
        }

        .mt-benefits-grid {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .mt-benefit-card {
            padding: 22px;
            border-radius: 14px;
        }

        .mt-benefit-icon {
            width: 68px;
            height: 68px;
        }

        .mt-benefit-card h3 {
            font-size: 20px;
        }
    }
</style>

<section class="mt-benefits-section">
    <div class="mt-benefits-container">

        <!-- Heading -->
        <div class="mt-benefits-heading">
            <span class="mt-benefits-badge">
                <span class="mt-benefits-badge-dot"></span>
                EXCLUSIVE BUSINESS BENEFITS
            </span>

            <h2>
                Mtalkz Complimentary Benefits with Every
                <span>Business Plan!</span>
            </h2>

            <p>
                Get more value from your communication platform with exclusive
                complimentary benefits designed to help your business connect,
                engage and grow.
            </p>
        </div>

        <!-- Benefits Cards -->
        <div class="mt-benefits-grid">

            <!-- Card 1 -->
            <div class="mt-benefit-card">
                <div class="mt-benefit-top">
                    <div class="mt-benefit-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <path d="M13 15c0-4 3-7 7-7h27c4 0 7 3 7 7v21c0 4-3 7-7 7H31L20 54v-11c-4 0-7-3-7-7V15z"
                                fill="#4aa6d8" />
                            <path d="M18 20h31v16H18z" fill="#2568b9" />
                            <circle cx="25" cy="28" r="3" fill="#b9e7ff" />
                            <circle cx="34" cy="28" r="3" fill="#b9e7ff" />
                            <circle cx="43" cy="28" r="3" fill="#b9e7ff" />
                        </svg>
                    </div>

                    <span class="mt-benefit-number">01</span>
                </div>

                <h3>Free SMS DLT Registration</h3>

                <p>
                    Start your SMS journey with a smoother onboarding process and
                    complimentary assistance for your DLT registration requirements.
                </p>

                <div class="mt-benefit-bottom">
                    <span>SMS Compliance Support</span>
                    <span class="mt-benefit-arrow">→</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="mt-benefit-card">
                <div class="mt-benefit-top">
                    <div class="mt-benefit-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <rect x="12" y="28" width="40" height="22" rx="5" fill="#293b6a" />
                            <path d="M23 28v-7a9 9 0 0 1 18 0v7" fill="none"
                                stroke="#ffc22c" stroke-width="5" stroke-linecap="round" />
                            <rect x="26" y="14" width="12" height="16" rx="3" fill="#ffd133" />
                            <circle cx="25" cy="39" r="3" fill="#fff" />
                            <circle cx="33" cy="39" r="3" fill="#fff" />
                            <circle cx="41" cy="39" r="3" fill="#fff" />
                        </svg>
                    </div>

                    <span class="mt-benefit-number">02</span>
                </div>

                <h3>Free 1000 <br> OTP SMS</h3>

                <p>
                    Experience fast and secure OTP delivery with 1000 complimentary
                    OTP SMS credits to test authentication for your business.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>

                <div class="mt-benefit-bottom">
                    <span>Secure OTP Authentication</span>
                    <span class="mt-benefit-arrow">→</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="mt-benefit-card">
                <div class="mt-benefit-top">
                    <div class="mt-benefit-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <rect x="10" y="18" width="36" height="29" rx="4"
                                fill="#55c1e6" transform="rotate(-8 10 18)" />
                            <rect x="16" y="13" width="38" height="31" rx="4"
                                fill="#f06a4d" transform="rotate(5 16 13)" />
                            <rect x="11" y="15" width="38" height="31" rx="4"
                                fill="#42a8d9" />
                            <path d="M15 42l10-11 8 7 7-5 6 9H15z" fill="#8ed65b" />
                            <circle cx="22" cy="23" r="5" fill="#ffd135" />
                        </svg>
                    </div>

                    <span class="mt-benefit-number">03</span>
                </div>

                <h3>Free RCS Onboarding</h3>

                <p>
                    Explore richer business messaging with complimentary onboarding
                    support for modern and engaging RCS communication experiences.
                </p>

                <div class="mt-benefit-bottom">
                    <span>Rich Customer Messaging</span>
                    <span class="mt-benefit-arrow">→</span>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="mt-benefit-card">
                <div class="mt-benefit-top">
                    <div class="mt-benefit-icon mt-whatsapp-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <rect x="7" y="7" width="50" height="50" rx="14"
                                fill="#25b84b" />
                            <path d="M31.7 17a14.7 14.7 0 0 0-12.5 22.4l-1.8 8.2 8.4-1.7A14.8 14.8 0 1 0 31.7 17z"
                                fill="none" stroke="#fff" stroke-width="4" />
                            <path d="M26.8 24.7c.5-1.1 1-1.1 1.6-1.1h1.3c.4 0 .8.1 1 .8l1.4 3.4c.2.5.1.9-.2 1.3l-1.1 1.4c1.1 2 2.6 3.5 4.7 4.5l1.5-1c.4-.3.8-.3 1.2-.1l3.3 1.5c.6.3.7.7.7 1.1 0 1.2-.7 2.6-1.7 3.2-1 .6-2.2.9-3.7.6-2.4-.5-5.5-2.5-7.8-4.8-2.3-2.3-4.2-5.4-4.7-7.8-.3-1.4 0-2.7.6-3.7z"
                                fill="#fff" />
                        </svg>
                    </div>

                    <span class="mt-benefit-number">04</span>
                </div>

                <h3>Free WABA Onboarding</h3>

                <p>
                    Get started with WhatsApp Business messaging through professional
                    onboarding assistance and simplified account setup support.
                </p>

                <div class="mt-benefit-bottom">
                    <span>WhatsApp Business Setup</span>
                    <span class="mt-benefit-arrow">→</span>
                </div>
            </div>

        </div>

    </div>
</section>