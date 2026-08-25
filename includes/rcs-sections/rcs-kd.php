<style>
    .kd-rcs-section {
        position: relative;
        overflow: hidden;
        padding: 76px 20px 82px;
        background:
            radial-gradient(circle at 8% 18%, rgba(67, 92, 205, .10), transparent 28%),
            radial-gradient(circle at 92% 82%, rgba(255, 93, 39, .09), transparent 25%),
            linear-gradient(180deg, #f8f9fd 0%, #f3f5fa 100%);
    }

    .kd-rcs-section::before,
    .kd-rcs-section::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 1px solid rgba(70, 91, 190, .08);
        pointer-events: none;
    }

    .kd-rcs-section::before {
        top: -190px;
        right: -90px
    }

    .kd-rcs-section::after {
        bottom: -220px;
        left: -110px
    }

    .kd-rcs-wrap {
        width: min(1180px, 100%);
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .kd-rcs-head {
        max-width: 800px;
        margin: 0 auto 42px;
        text-align: center;
    }

    .kd-rcs-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 16px;
        margin-bottom: 14px;
        border: 1px solid rgba(63, 83, 183, .18);
        border-radius: 999px;
        background: rgba(255, 255, 255, .76);
        box-shadow: 0 8px 22px rgba(28, 42, 85, .06);
        color: #4055aa;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .kd-rcs-eyebrow i {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        display: block;
        background: #ff642d;
        box-shadow: 0 0 0 5px rgba(255, 100, 45, .10);
    }

    .kd-rcs-head h2 {
        margin: 0;
        font-size: clamp(27px, 3.1vw, 43px);
        line-height: 1.18;
        letter-spacing: -1.1px;
        font-weight: 800;
        color: #18263c;
    }

    .kd-rcs-head h2 span {
        background: linear-gradient(90deg, #3157ba, #6950bf);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .kd-rcs-head p {
        max-width: 710px;
        margin: 14px auto 0;
        color: #647087;
        font-size: 15px;
        line-height: 1.8;
    }

    .kd-rcs-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
    }

    .kd-rcs-card {
        position: relative;
        min-height: 285px;
        padding: 28px 27px 30px;
        border-radius: 24px;
        overflow: hidden;
        background: rgba(255, 255, 255, .88);
        border: 1px solid rgba(39, 57, 96, .10);
        box-shadow: 0 14px 35px rgba(26, 40, 77, .07);
        transition: transform .38s cubic-bezier(.2, .75, .25, 1), box-shadow .38s ease, border-color .38s ease;
    }

    .kd-rcs-card::before {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        right: -78px;
        top: -78px;
        border-radius: 50%;
        background: var(--card-soft);
        opacity: .7;
        transition: transform .55s ease;
    }

    .kd-rcs-card::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 4px;
        transform: scaleX(.18);
        transform-origin: left center;
        border-radius: 0 10px 10px 0;
        background: var(--card-accent);
        transition: transform .4s ease;
    }

    .kd-rcs-card:hover {
        transform: translateY(-9px);
        box-shadow: 0 24px 50px rgba(31, 46, 92, .14);
        border-color: var(--card-border);
    }

    .kd-rcs-card:hover::before {
        transform: scale(1.35)
    }

    .kd-rcs-card:hover::after {
        transform: scaleX(1)
    }

    .kd-card-icon {
        width: 58px;
        height: 58px;
        position: relative;
        z-index: 1;
        display: grid;
        place-items: center;
        border-radius: 18px;
        color: #fff;
        background: var(--card-accent);
        box-shadow: 0 12px 22px var(--card-shadow);
        transition: transform .45s ease, box-shadow .45s ease;
    }

    .kd-rcs-card:hover .kd-card-icon {
        transform: translateY(-4px) rotate(-5deg) scale(1.05);
        box-shadow: 0 16px 28px var(--card-shadow);
    }

    .kd-card-icon svg {
        width: 28px;
        height: 28px;
        stroke: currentColor;
        fill: none;
        stroke-width: 1.9;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .kd-card-icon .kd-fill {
        fill: currentColor;
        stroke: none
    }

    .kd-rcs-card h3 {
        position: relative;
        z-index: 1;
        margin: 24px 0 10px;
        color: #26344a;
        font-size: 20px;
        line-height: 1.4;
        font-weight: 700;
    }

    .kd-rcs-card p {
        position: relative;
        z-index: 1;
        margin: 0;
        color: #667286;
        font-size: 14px;
        line-height: 1.75;
    }

    .kd-card-one {
        --card-accent: linear-gradient(135deg, #315fc6, #6249bb);
        --card-soft: rgba(64, 94, 198, .18);
        --card-border: rgba(64, 94, 198, .25);
        --card-shadow: rgba(55, 85, 191, .24);
    }

    .kd-card-two {
        --card-accent: linear-gradient(135deg, #664bc3, #9354c4);
        --card-soft: rgba(119, 73, 194, .17);
        --card-border: rgba(119, 73, 194, .25);
        --card-shadow: rgba(119, 73, 194, .22);
    }

    .kd-card-three {
        --card-accent: linear-gradient(135deg, #f0642f, #e94337);
        --card-soft: rgba(240, 86, 48, .15);
        --card-border: rgba(236, 84, 47, .25);
        --card-shadow: rgba(235, 83, 46, .22);
    }

    @media(max-width:900px) {
        .kd-rcs-section {
            padding: 62px 18px 68px
        }

        .kd-rcs-grid {
            grid-template-columns: 1fr;
            max-width: 590px;
            margin: auto
        }

        .kd-rcs-card {
            min-height: auto
        }
    }

    @media(max-width:520px) {
        .kd-rcs-section {
            padding: 50px 14px 58px
        }

        .kd-rcs-head {
            margin-bottom: 30px
        }

        .kd-rcs-head h2 {
            font-size: 28px;
            letter-spacing: -.7px
        }

        .kd-rcs-head p {
            font-size: 13px;
            line-height: 1.7
        }

        .kd-rcs-grid {
            gap: 15px
        }

        .kd-rcs-card {
            min-height: 0;
            padding: 23px 21px 25px;
            border-radius: 20px;
            text-align: center;
        }

        .kd-card-icon {
            margin: 0 auto
        }

        .kd-rcs-card h3 {
            font-size: 18px;
            margin-top: 18px
        }

        .kd-rcs-card p {
            font-size: 13px
        }
    }

    @media(prefers-reduced-motion:no-preference) {
        .kd-rcs-card {
            animation: kdCardEnter .75s both;
        }

        .kd-rcs-card:nth-child(2) {
            animation-delay: .12s
        }

        .kd-rcs-card:nth-child(3) {
            animation-delay: .24s
        }

        @keyframes kdCardEnter {
            from {
                opacity: 0;
                transform: translateY(26px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    }
</style>


<section class="kd-rcs-section">
    <div class="kd-rcs-wrap">

        <div class="kd-rcs-head">
            <div class="kd-rcs-eyebrow"><i></i> KING DIGITAL RCS</div>
            <h2>Built for <span>Smarter Customer Conversations</span></h2>
            <p>Give your business a richer messaging experience with interactive communication, verified brand trust and seamless native reach.</p>
        </div>

        <div class="kd-rcs-grid">

            <article class="kd-rcs-card kd-card-one">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 11.5a7.3 7.3 0 0 1-7.7 7.2 8.2 8.2 0 0 1-3-.7L4 20l1.7-4.8A7.1 7.1 0 0 1 5 12a7.3 7.3 0 0 1 7.5-7 7.3 7.3 0 0 1 7.5 6.5Z" />
                        <path d="M9 11.5h.01M12 11.5h.01M15 11.5h.01" />
                    </svg>
                </div>
                <h3>Rich, Interactive Messaging</h3>
                <p>Move beyond plain text with branded media, visual content, suggested actions and faster ways for customers to respond.</p>
            </article>

            <article class="kd-rcs-card kd-card-two">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 3 19 6v5c0 4.5-2.8 7.9-7 10-4.2-2.1-7-5.5-7-10V6l7-3Z" />
                        <path d="m8.7 12 2.1 2.1 4.5-4.6" />
                    </svg>
                </div>
                <h3>Verified Brand Trust</h3>
                <p>Present your business identity with a professional messaging experience that helps customers recognize and trust KING DIGITAL.</p>
            </article>

            <article class="kd-rcs-card kd-card-three">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="8" />
                        <path d="M4.4 9h15.2M4.4 15h15.2M12 4a12.5 12.5 0 0 1 0 16M12 4a12.5 12.5 0 0 0 0 16" />
                    </svg>
                </div>
                <h3>Native Customer Reach</h3>
                <p>Connect through a modern messaging experience without asking customers to download another app or learn a new platform.</p>
            </article>

        </div>
    </div>
</section>