<!-- ============================================================
     KING DIGITAL RCS – "Why Choose RCS" Section
     WordPress-safe version: all styles scoped under .kd-rcs-why
     so it will NOT break your theme's global fonts, links, buttons,
     margins, or box-sizing anywhere else on the site.
     ============================================================ -->


<style>
    .kd-rcs-why {
        --navy: #18283f;
        --blue: #315fc6;
        --indigo: #5b4bb7;
        --orange: #f0642f;
        --muted: #647087;
        --line: rgba(43, 67, 105, .12);
        --surface: #ffffff;
    }

    /* Scope box-sizing ONLY to elements inside this section */
    .kd-rcs-why,
    .kd-rcs-why *,
    .kd-rcs-why *:before,
    .kd-rcs-why *:after {
        box-sizing: border-box;
    }

    .kd-rcs-why {
        color: var(--navy);
        position: relative;
        overflow: hidden;
        padding: 76px 20px 84px;
        background:
            radial-gradient(circle at 8% 20%, rgba(49, 95, 198, .12), transparent 30%),
            radial-gradient(circle at 93% 74%, rgba(91, 75, 183, .10), transparent 28%),
            linear-gradient(180deg, #dce5f5 0%, #edf2fb 46%, #f4f7fc 100%);
    }

    .kd-rcs-why a {
        color: inherit;
        text-decoration: none;
    }

    .kd-rcs-why button {
        font-family: inherit;
        text-decoration: none;
    }

    .kd-rcs-why:before {
        content: "";
        position: absolute;
        width: 620px;
        height: 620px;
        border-radius: 50%;
        border: 1px solid rgba(49, 95, 198, .07);
        right: -330px;
        top: -410px;
        pointer-events: none;
    }

    .kd-rcs-why:after {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(49, 95, 198, .08), transparent 70%);
        left: -110px;
        bottom: -140px;
        pointer-events: none;
    }

    .kd-rcs-why .kd-wrap {
        width: min(1180px, 100%);
        margin: auto;
        position: relative;
        z-index: 1
    }

    .kd-rcs-why .kd-head {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(320px, .72fr);
        gap: 60px;
        align-items: end;
        margin-bottom: 42px;
    }

    .kd-rcs-why .kd-kicker {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        margin-bottom: 16px;
        border: 1px solid rgba(49, 89, 183, 0.16);
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.62);
        color: #3159b7;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.1px;
    }

    .kd-rcs-why .kd-kicker i {
        position: relative;
        flex: 0 0 8px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--orange);
        box-shadow: 0 0 0 6px rgba(240, 100, 47, .10);
        animation: kdKickerBlink 1.25s ease-in-out infinite;
        font-style: normal;
    }

    .kd-rcs-why .kd-kicker i:after {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        border: 1px solid rgba(240, 100, 47, .42);
        animation: kdKickerPulse 1.25s ease-out infinite;
    }

    @keyframes kdKickerBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 0 0 6px rgba(240, 100, 47, .10)
        }

        50% {
            opacity: .28;
            transform: scale(.72);
            box-shadow: 0 0 0 10px rgba(240, 100, 47, .03)
        }
    }

    @keyframes kdKickerPulse {
        0% {
            opacity: .75;
            transform: scale(.65)
        }

        70%,
        100% {
            opacity: 0;
            transform: scale(1.45)
        }
    }

    .kd-rcs-why .kd-head h2 {
        margin: 0;
        font-size: clamp(34px, 3.25vw, 48px);
        line-height: 1.1;
        letter-spacing: -1.55px;
        font-weight: 800;
        color: var(--navy);
    }

    .kd-rcs-why .kd-head h2 span {
        display: block;
        color: var(--blue)
    }

    .kd-rcs-why .kd-intro {
        margin: 0 0 3px;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.8
    }

    .kd-rcs-why .kd-grid {
        display: grid;
        grid-template-columns: minmax(360px, .82fr) minmax(510px, 1.18fr);
        gap: 54px;
        align-items: center;
    }

    .kd-rcs-why .kd-image-wrap {
        position: relative;
        min-height: 480px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kd-rcs-why .kd-image-orbit {
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        border: 1px dashed rgba(49, 95, 198, .18);
    }

    .kd-rcs-why .kd-image-frame {
        position: relative;
        z-index: 2;
        width: min(100%, 450px);
        border-radius: 28px;
        overflow: hidden;
        background: #fff;
        border: 1px solid rgba(255, 255, 255, .75);
        box-shadow: 0 28px 70px rgba(38, 56, 88, .20);
        transform: rotate(-1.2deg);
        transition: transform .45s ease, box-shadow .45s ease;
    }

    .kd-rcs-why .kd-image-frame:before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 2;
        pointer-events: none;
        background: linear-gradient(135deg, rgba(255, 255, 255, .15), transparent 34%, transparent 70%, rgba(49, 95, 198, .05));
    }

    .kd-rcs-why .kd-image-frame img {
        display: block;
        width: 100%;
        height: 480px;
        object-fit: contain;
        background: #FDF8F1;
        object-position: center;
        max-width: none;
    }

    .kd-rcs-why .kd-image-frame:hover {
        transform: rotate(0) translateY(-6px);
        box-shadow: 0 36px 82px rgba(38, 56, 88, .25)
    }

    .kd-rcs-why .kd-image-tag {
        position: absolute;
        z-index: 4;
        right: -18px;
        top: 42px;
        padding: 12px 15px;
        border-radius: 15px;
        background: rgba(255, 255, 255, .93);
        backdrop-filter: blur(10px);
        box-shadow: 0 16px 34px rgba(39, 57, 91, .15);
        border: 1px solid rgba(255, 255, 255, .8);
        animation: tagFloat 4.2s ease-in-out infinite;
    }

    .kd-rcs-why .kd-image-tag b {
        display: block;
        font-size: 17px;
        line-height: 1;
        color: var(--blue)
    }

    .kd-rcs-why .kd-image-tag span {
        display: block;
        margin-top: 5px;
        font-size: 9px;
        font-weight: 600;
        color: #69768c
    }

    .kd-rcs-why .kd-image-chip {
        position: absolute;
        z-index: 4;
        left: -18px;
        bottom: 44px;
        width: 55px;
        height: 55px;
        border-radius: 18px;
        display: grid;
        place-items: center;
        background: linear-gradient(135deg, var(--blue), var(--indigo));
        color: #fff;
        box-shadow: 0 16px 30px rgba(49, 95, 198, .28);
        animation: chipFloat 4.8s ease-in-out infinite;
    }

    .kd-rcs-why .kd-image-chip svg {
        width: 25px;
        height: 25px;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.9;
        stroke-linecap: round;
        stroke-linejoin: round
    }

    .kd-rcs-why .kd-feature-panel {
        padding: 2px 0
    }

    .kd-rcs-why .kd-feature {
        display: grid;
        grid-template-columns: 50px 1fr 28px;
        gap: 14px;
        align-items: center;
        padding: 17px 5px;
        border-bottom: 1px solid var(--line);
        cursor: pointer;
        transition: background .3s ease, transform .3s ease, padding .3s ease, box-shadow .3s ease;
    }

    .kd-rcs-why .kd-feature:first-child {
        border-top: 1px solid var(--line)
    }

    .kd-rcs-why .kd-feature-icon {
        width: 46px;
        height: 46px;
        border-radius: 14px;
        display: grid;
        place-items: center;
        background: #fff;
        border: 1px solid rgba(49, 95, 198, .10);
        color: var(--blue);
        box-shadow: 0 8px 18px rgba(42, 60, 95, .06);
        transition: .3s ease;
    }

    .kd-rcs-why .kd-feature:nth-child(2) .kd-feature-icon {
        color: #6652bd
    }

    .kd-rcs-why .kd-feature:nth-child(3) .kd-feature-icon {
        color: #218661
    }

    .kd-rcs-why .kd-feature:nth-child(4) .kd-feature-icon {
        color: #e16b34
    }

    .kd-rcs-why .kd-feature:nth-child(5) .kd-feature-icon {
        color: #4267b7
    }

    .kd-rcs-why .kd-feature:nth-child(6) .kd-feature-icon {
        color: #7a56bd
    }

    .kd-rcs-why .kd-feature-icon svg {
        width: 21px;
        height: 21px;
        stroke: currentColor;
        fill: none;
        stroke-width: 1.9;
        stroke-linecap: round;
        stroke-linejoin: round
    }

    .kd-rcs-why .kd-copy b {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #253750;
        transition: .25s ease
    }

    .kd-rcs-why .kd-copy span {
        display: block;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        margin-top: 0;
        color: #6b778b;
        font-size: 11px;
        line-height: 1.65;
        transition: max-height .35s ease, opacity .25s ease, margin .35s ease
    }

    .kd-rcs-why .kd-arrow {
        width: 25px;
        height: 25px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        color: #71809a;
        transition: .3s ease
    }

    .kd-rcs-why .kd-arrow:before {
        content: "+";
        font-size: 20px;
        font-weight: 400;
        line-height: 1
    }

    .kd-rcs-why .kd-feature.active {
        margin: 6px 0;
        padding: 15px 12px;
        border: 1px solid rgba(49, 95, 198, .12);
        border-radius: 17px;
        background: rgba(255, 255, 255, .78);
        box-shadow: 0 14px 30px rgba(41, 59, 91, .08);
    }

    .kd-rcs-why .kd-feature.active .kd-feature-icon {
        color: #fff;
        background: linear-gradient(135deg, var(--blue), var(--indigo));
        box-shadow: 0 11px 23px rgba(49, 95, 198, .24)
    }

    .kd-rcs-why .kd-feature.active .kd-copy span {
        max-height: 58px;
        opacity: 1;
        margin-top: 5px
    }

    .kd-rcs-why .kd-feature.active .kd-arrow {
        color: #fff;
        background: var(--orange);
        transform: rotate(45deg)
    }

    .kd-rcs-why .kd-feature:hover .kd-copy b {
        color: var(--blue)
    }

    .kd-rcs-why .kd-feature:hover .kd-feature-icon {
        transform: translateY(-2px)
    }

    @keyframes tagFloat {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-9px)
        }
    }

    @keyframes chipFloat {

        0%,
        100% {
            transform: translateY(0) rotate(0)
        }

        50% {
            transform: translateY(8px) rotate(4deg)
        }
    }

    @media(prefers-reduced-motion:reduce) {

        .kd-rcs-why *,
        .kd-rcs-why *:before,
        .kd-rcs-why *:after {
            animation: none !important;
            transition: none !important;
        }
    }

    @media(max-width:960px) {
        .kd-rcs-why {
            padding: 62px 18px 68px
        }

        .kd-rcs-why .kd-head {
            grid-template-columns: 1fr;
            gap: 14px;
            text-align: center;
            margin-bottom: 30px
        }

        .kd-rcs-why .kd-intro {
            max-width: 650px;
            margin: auto
        }

        .kd-rcs-why .kd-grid {
            grid-template-columns: 1fr;
            gap: 28px
        }

        .kd-rcs-why .kd-image-wrap {
            min-height: 500px
        }

        .kd-rcs-why .kd-feature-panel {
            max-width: 700px;
            margin: auto
        }
    }

    @media(max-width:600px) {
        .kd-rcs-why {
            padding: 48px 14px 54px
        }

        .kd-rcs-why .kd-kicker {
            font-size: 10px
        }

        .kd-rcs-why .kd-head h2 {
            font-size: 31px;
            line-height: 1.12;
            letter-spacing: -.9px
        }

        .kd-rcs-why .kd-intro {
            font-size: 12px;
            line-height: 1.72
        }

        .kd-rcs-why .kd-image-wrap {
            min-height: 380px
        }

        .kd-rcs-why .kd-image-orbit {
            width: 330px;
            height: 330px
        }

        .kd-rcs-why .kd-image-frame {
            width: 290px;
            border-radius: 22px
        }

        .kd-rcs-why .kd-image-frame img {
            height: 365px
        }

        .kd-rcs-why .kd-image-tag {
            right: 0;
            top: 24px;
            padding: 9px 11px;
            border-radius: 12px
        }

        .kd-rcs-why .kd-image-tag b {
            font-size: 14px
        }

        .kd-rcs-why .kd-image-tag span {
            font-size: 8px
        }

        .kd-rcs-why .kd-image-chip {
            left: 5px;
            bottom: 24px;
            width: 45px;
            height: 45px;
            border-radius: 14px
        }

        .kd-rcs-why .kd-image-chip svg {
            width: 21px;
            height: 21px
        }

        .kd-rcs-why .kd-feature {
            grid-template-columns: 43px 1fr 25px;
            gap: 10px;
            padding: 15px 2px
        }

        .kd-rcs-why .kd-feature.active {
            padding: 14px 9px
        }

        .kd-rcs-why .kd-feature-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px
        }

        .kd-rcs-why .kd-feature-icon svg {
            width: 18px;
            height: 18px
        }

        .kd-rcs-why .kd-copy b {
            font-size: 13px
        }

        .kd-rcs-why .kd-copy span {
            font-size: 10px
        }
    }
</style>

<section class="kd-rcs-why">
    <div class="kd-wrap">

        <div class="kd-head">
            <div>
                <div class="kd-kicker"><i></i> Why Businesses Choose RCS</div>
                <h2>Engage More.<span>Convert Better.</span></h2>
            </div>
            <p class="kd-intro">Create richer customer interactions with branded, interactive messaging powered by KING DIGITAL RCS.</p>
        </div>

        <div class="kd-grid">

            <div class="kd-image-wrap">
                <div class="kd-image-orbit"></div>
                <div class="kd-image-tag">
                    <b>98%</b>
                    <span>Message read rate</span>
                </div>
                <div class="kd-image-chip" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 12h16" />
                        <path d="m13 5 7 7-7 7" />
                    </svg>
                </div>
                <div class="kd-image-frame">
                    <img src="assets/images/rcs1.png" alt="KING DIGITAL RCS business messaging experience" loading="lazy">
                </div>
            </div>

            <div class="kd-feature-panel">
                <div class="kd-feature active">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3 1.4-4.2A7 7 0 0 1 3 14V8a5 5 0 0 1 5-5h9a4 4 0 0 1 4 4z" />
                        </svg></div>
                    <div class="kd-copy"><b>Interactive RCS Rich Cards & Carousels</b><span>Show products, services and offers with branded media and action buttons directly inside the conversation.</span></div>
                    <div class="kd-arrow"></div>
                </div>

                <div class="kd-feature">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <path d="M12 3v18" />
                            <path d="M7 7h7a3 3 0 0 1 0 6H10a3 3 0 0 0 0 6h7" />
                        </svg></div>
                    <div class="kd-copy"><b>Personalized RCS Messaging at Scale</b><span>Deliver relevant messages based on customer journeys, preferences and business requirements.</span></div>
                    <div class="kd-arrow"></div>
                </div>

                <div class="kd-feature">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <path d="M20 6 9 17l-5-5" />
                        </svg></div>
                    <div class="kd-copy"><b>Higher Deliverability & Engagement</b><span>Create messaging experiences designed to be seen, opened and acted upon.</span></div>
                    <div class="kd-arrow"></div>
                </div>

                <div class="kd-feature">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <path d="M4 19V9" />
                            <path d="M10 19V5" />
                            <path d="M16 19v-8" />
                            <path d="M22 19V3" />
                        </svg></div>
                    <div class="kd-copy"><b>Real-Time RCS Analytics & Reporting</b><span>Understand campaign performance and customer engagement through actionable insights.</span></div>
                    <div class="kd-arrow"></div>
                </div>

                <div class="kd-feature">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18" />
                            <path d="m9 12 2 2 4-5" />
                        </svg></div>
                    <div class="kd-copy"><b>Google Verified Brand Identity</b><span>Build customer confidence with a professional and recognizable business messaging presence.</span></div>
                    <div class="kd-arrow"></div>
                </div>

                <div class="kd-feature">
                    <div class="kd-feature-icon"><svg viewBox="0 0 24 24">
                            <rect x="3" y="3" width="7" height="7" rx="1" />
                            <rect x="14" y="14" width="7" height="7" rx="1" />
                            <path d="M10 6h4v11" />
                            <path d="M10 17h4" />
                        </svg></div>
                    <div class="kd-copy"><b>Seamless CRM & API Integration</b><span>Connect RCS campaigns with your existing systems and create a smoother customer workflow.</span></div>
                    <div class="kd-arrow"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        document.querySelectorAll('.kd-rcs-why .kd-feature').forEach(function(item) {
            item.addEventListener('click', function() {
                document.querySelectorAll('.kd-rcs-why .kd-feature').forEach(function(el) {
                    if (el !== item) el.classList.remove('active');
                });
                item.classList.toggle('active');
            });
        });
    })();
</script>