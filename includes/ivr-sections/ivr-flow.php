<style>
    /* =========================================
   AI IVR HORIZONTAL FLOW  (water-flow version)
========================================= */
    .ai-ivr-flow {
        --ease: cubic-bezier(.45, .05, .25, 1);
        --water: linear-gradient(90deg, #2563eb, #60a5fa, #2563eb);
        --water-o: linear-gradient(90deg, #f97316, #fdba74, #f97316);
        --water-v: linear-gradient(180deg, #2563eb, #60a5fa, #2563eb);
        width: 100%;
        padding: 40px 20px;
        background: #f7f9fc;
        overflow: hidden
    }

    .ai-ivr-wrap {
        max-width: 1450px;
        margin: auto
    }

    /* HEADING */
    .ai-ivr-heading {
        text-align: center;
        margin-bottom: 65px
    }

    .ai-ivr-heading>span {
        display: inline-block;
        padding: 7px 15px;
        border-radius: 30px;
        background: #eaf2ff;
        color: #2563eb;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.5px;
        margin-bottom: 15px
    }

    .ai-ivr-heading h2 {
        margin: 0;
        color: #14213d;
        font-size: clamp(32px, 4vw, 50px);
        line-height: 1.1;
        font-weight: 800
    }

    .ai-ivr-heading h2 strong {
        color: #2563eb
    }

    .ai-ivr-heading p {
        max-width: 650px;
        margin: 18px auto 0;
        color: #667085;
        font-size: 16px;
        line-height: 1.7
    }

    /* FLOW ROW */
    .ivr-horizontal {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 1250px
    }

    /* MAIN NODES */
    .ivr-step {
        position: relative;
        flex: 0 0 auto
    }

    .ivr-step::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 18px;
        border: 2px solid #2563eb;
        opacity: 0;
        pointer-events: none
    }

    .ivr-step.active::after {
        animation: ring 1.3s ease-out var(--d, 0ms)
    }

    .ivr-node {
        position: relative;
        overflow: hidden;
        width: 190px;
        min-height: 92px;
        padding: 15px 18px;
        display: flex;
        align-items: center;
        gap: 13px;
        background: #fff;
        border: 2px solid #dbe3ef;
        border-radius: 18px;
        cursor: pointer;
        transition: transform .5s var(--ease), border-color .45s var(--ease), box-shadow .5s var(--ease)
    }

    .ivr-node:hover {
        transform: translateY(-4px);
        border-color: #2563eb;
        transition-delay: 0ms
    }

    .ivr-node>* {
        position: relative;
        z-index: 1
    }

    /* liquid fill: floods in from the left like water entering the node */
    .ivr-node::before,
    .vertical-branch-node::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        background: #eff6ff;
        opacity: .6;
        clip-path: circle(0% at 0 50%);
        transition: clip-path .5s ease-in, opacity .4s ease
    }

    /* light sheen that glides across on arrival */
    .ivr-node::after,
    .vertical-branch-node::after,
    .ivr-final::after {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        transform: translateX(-110%);
        background: linear-gradient(105deg, transparent 35%, rgba(255, 255, 255, .8) 50%, transparent 65%)
    }

    .ivr-step.on .ivr-node {
        border-color: rgba(37, 99, 235, .4);
        transition-delay: var(--d, 0ms)
    }

    .ivr-step.on .ivr-node::before {
        clip-path: circle(150% at 0 50%);
        transition: clip-path .95s var(--ease) var(--d, 0ms), opacity .4s ease var(--d, 0ms)
    }

    .ivr-step.active .ivr-node {
        transform: translateY(-7px) scale(1.04);
        border-color: #2563eb;
        box-shadow: 0 0 0 6px rgba(37, 99, 235, .08), 0 15px 35px rgba(37, 99, 235, .18)
    }

    .ivr-step.active .ivr-node::before {
        opacity: 1
    }

    .ivr-step.active .ivr-node::after {
        animation: sheen 1.2s ease var(--d, 0ms)
    }

    /* ICON */
    .ivr-icon {
        width: 45px;
        height: 45px;
        flex: 0 0 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: #edf4ff;
        color: #2563eb;
        font-size: 17px;
        font-weight: 800
    }

    .ivr-node small {
        display: block;
        margin-bottom: 4px;
        color: #98a2b3;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1px
    }

    .ivr-node h3 {
        margin: 0;
        color: #14213d;
        font-size: 14px;
        line-height: 1.35;
        font-weight: 750
    }

    /* =========================================
   WATER PIPES (arrows)
========================================= */
    .ivr-arrow,
    .branch-arrow {
        display: flex;
        align-items: center;
        flex: 0 0 auto
    }

    .ivr-arrow {
        width: 55px;
        padding: 0 6px 0 4px
    }

    .ivr-arrow[data-arrow="2"] {
        padding-right: 22px
    }

    .branch-arrow {
        width: 66px;
        padding: 0 6px 0 20px
    }

    .pipe {
        position: relative;
        flex: 1;
        height: 4px;
        border-radius: 4px;
        background: #d8e1ef
    }

    .pipe i {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 0;
        border-radius: 4px;
        background: var(--water) 0 0/40px 100%;
        transition: width .45s ease-in;
        animation: flowX .9s linear infinite
    }

    .pipe i::after {
        /* droplet at the leading edge */
        content: "";
        position: absolute;
        right: -3px;
        top: 50%;
        width: 10px;
        height: 10px;
        margin-top: -5px;
        border-radius: 50%;
        background: #93c5fd;
        box-shadow: 0 0 12px 3px rgba(37, 99, 235, .55);
        opacity: 0
    }

    .ivr-arrow.flowed .pipe i,
    .branch-arrow.flowed .pipe i {
        width: 100%;
        transition: width .8s var(--ease) var(--d, 0ms)
    }

    .ivr-arrow.flowed .pipe i::after,
    .branch-arrow.flowed .pipe i::after {
        animation: head .8s ease var(--d, 0ms)
    }

    .ivr-arrow::after,
    .branch-arrow::after {
        content: "";
        flex: 0 0 9px;
        height: 9px;
        margin-left: -8px;
        border-top: 2px solid #b8c3d3;
        border-right: 2px solid #b8c3d3;
        transform: rotate(45deg);
        transition: border-color .3s ease
    }

    .ivr-arrow.flowed::after {
        border-color: #2563eb;
        transition-delay: calc(var(--d, 0ms) + 600ms)
    }

    .branch-arrow.flowed::after {
        border-color: #f97316;
        transition-delay: calc(var(--d, 0ms) + 600ms)
    }

    .branch-arrow.flowed .pipe i {
        background-image: var(--water-o)
    }

    .branch-arrow.flowed .pipe i::after {
        background: #fdba74;
        box-shadow: 0 0 12px 3px rgba(249, 115, 22, .55)
    }

    /* =========================================
   BRANCHES
========================================= */
    .ivr-branches-vertical {
        position: relative;
        width: 230px;
        display: flex;
        flex-direction: column;
        gap: 12px;
        padding: 18px 0
    }

    .vertical-branch-title {
        position: absolute;
        top: -7px;
        left: 50%;
        transform: translateX(-50%);
        color: #98a2b3;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1.5px;
        white-space: nowrap
    }

    /* vertical trunks (left = split, right = merge) */
    .trunk {
        position: absolute;
        top: 52px;
        bottom: 52px;
        width: 3px;
        display: flex;
        flex-direction: column
    }

    .trunk-l {
        left: -23px
    }

    .trunk-r {
        left: calc(100% + 17px)
    }

    .trunk i {
        flex: 1;
        position: relative;
        background: #d8e1ef
    }

    .trunk i:first-child {
        border-radius: 3px 3px 0 0
    }

    .trunk i:last-child {
        border-radius: 0 0 3px 3px
    }

    .trunk b {
        position: absolute;
        left: 0;
        right: 0;
        height: 0;
        background: var(--water-v) 0 0/100% 40px;
        transition: height .35s ease-in;
        animation: flowY .9s linear infinite
    }

    .trunk-l i:first-child b,
    .trunk-r i:last-child b {
        bottom: 0;
        animation-direction: reverse
    }

    .trunk-l i:last-child b,
    .trunk-r i:first-child b {
        top: 0
    }

    .ivr-branches-vertical[data-s="3"] .trunk-l i:first-child b,
    .ivr-branches-vertical[data-s="5"] .trunk-l i:last-child b,
    .ivr-branches-vertical[data-s="3"] .trunk-r i:first-child b,
    .ivr-branches-vertical[data-s="5"] .trunk-r i:last-child b {
        height: 100%;
        transition: height .5s var(--ease) var(--d, 0ms)
    }

    .vertical-branch-item {
        position: relative;
        display: flex;
        align-items: center;
        gap: 5px;
        width: 100%;
        cursor: pointer
    }

    /* pipe from trunk into the node */
    .vertical-branch-item::before,
    .vertical-branch-item::after {
        content: "";
        position: absolute;
        left: -22px;
        top: 50%;
        width: 22px;
        height: 3px;
        margin-top: -1.5px
    }

    .vertical-branch-item::before {
        background: #d8e1ef
    }

    .vertical-branch-item::after {
        background: var(--water) 0 0/40px 100%;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .2s ease-in;
        animation: flowX .9s linear infinite
    }

    .vertical-branch-item.active::after {
        transform: scaleX(1);
        transition: transform .3s ease var(--d1, 0ms)
    }

    .vertical-branch-item[data-step="4"]::after {
        background-image: var(--water-o)
    }

    .vertical-branch-node {
        position: relative;
        overflow: hidden;
        flex: 0 0 155px;
        width: 155px;
        min-height: 68px;
        padding: 10px 12px;
        display: flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        border: 2px solid #dbe3ef;
        border-radius: 15px;
        transition: transform .45s var(--ease), border-color .4s var(--ease), box-shadow .45s var(--ease)
    }

    .vertical-branch-node>* {
        position: relative;
        z-index: 1
    }

    .vertical-branch-node.orange::before {
        background: #fff7ed
    }

    .vertical-branch-item.active .vertical-branch-node {
        border-color: #2563eb;
        transform: translateX(5px);
        box-shadow: 0 0 0 5px rgba(37, 99, 235, .07), 0 10px 25px rgba(37, 99, 235, .14);
        transition-delay: var(--d2, 0ms)
    }

    .vertical-branch-item.active .vertical-branch-node::before {
        opacity: 1;
        clip-path: circle(150% at 0 50%);
        transition: clip-path .9s var(--ease) var(--d2, 0ms), opacity .4s ease var(--d2, 0ms)
    }

    .vertical-branch-item.active .vertical-branch-node::after {
        animation: sheen 1.1s ease var(--d2, 0ms)
    }

    .vertical-branch-item[data-step="4"].active .vertical-branch-node {
        border-color: #f97316;
        box-shadow: 0 0 0 5px rgba(249, 115, 22, .07), 0 10px 25px rgba(249, 115, 22, .14)
    }

    .branch-icon {
        width: 32px;
        height: 32px;
        flex: 0 0 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: #edf4ff;
        color: #2563eb;
        font-size: 13px;
        font-weight: 800
    }

    .vertical-branch-node.orange .branch-icon {
        background: #fff0e7;
        color: #f97316
    }

    .vertical-branch-node small {
        display: block;
        margin-bottom: 3px;
        color: #98a2b3;
        font-size: 8px;
        font-weight: 800
    }

    .vertical-branch-node strong {
        display: block;
        color: #344054;
        font-size: 11px;
        line-height: 1.3
    }

    /* result chip + stub into the merge trunk */
    .vertical-result {
        position: relative;
        flex: 0 0 70px;
        width: 70px;
        padding: 8px 5px;
        border-radius: 8px;
        text-align: center;
        background: #f8fafc;
        border: 1px solid #e5eaf2;
        color: #667085;
        font-size: 8px;
        font-weight: 700;
        transition: background .35s ease, border-color .35s ease, color .35s ease
    }

    .vertical-result::after {
        content: "";
        position: absolute;
        left: 100%;
        top: 50%;
        width: 18px;
        height: 3px;
        margin-top: -1.5px;
        background: linear-gradient(90deg, #2563eb, #60a5fa) left center/0% 100% no-repeat, #d8e1ef;
        transition: background-size .2s ease-in
    }

    .vertical-branch-item.active .vertical-result {
        background: #f0fdf4;
        border-color: #86efac;
        color: #15803d;
        transition-delay: var(--dc, 0ms)
    }

    .vertical-branch-item.active .vertical-result::after {
        background-size: 100% 100%;
        transition: background-size .3s ease var(--dc, 0ms)
    }

    /* =========================================
   FINAL OUTCOME
========================================= */
    .ivr-final {
        position: relative;
        overflow: hidden;
        width: 200px;
        min-height: 92px;
        padding: 15px 18px;
        display: flex;
        align-items: center;
        gap: 13px;
        border-radius: 18px;
        background: linear-gradient(135deg, #14213d, #1d4ed8);
        color: #fff;
        transition: transform .5s var(--ease), box-shadow .5s var(--ease)
    }

    .ivr-final>* {
        position: relative;
        z-index: 1
    }

    .ivr-final::after {
        background: linear-gradient(105deg, transparent 35%, rgba(255, 255, 255, .28) 50%, transparent 65%)
    }

    .ivr-final.active {
        transform: translateY(-7px) scale(1.04);
        box-shadow: 0 18px 45px rgba(37, 99, 235, .28);
        transition-delay: var(--d, 0ms)
    }

    .ivr-final.pulse::after {
        animation: sheen 1.4s ease var(--d, 0ms)
    }

    .final-icon {
        width: 45px;
        height: 45px;
        flex: 0 0 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: rgba(255, 255, 255, .12);
        color: #fff;
        font-size: 21px
    }

    .ivr-final small {
        display: block;
        color: #bfdbfe;
        font-size: 8px;
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 4px
    }

    .ivr-final h3 {
        margin: 0;
        color: #fff;
        font-size: 14px
    }

    /* =========================================
   VALUE STRIP
========================================= */
    .ivr-values {
        max-width: 1000px;
        margin: 55px auto 0;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0
    }

    .ivr-values>div {
        padding: 20px;
        text-align: center;
        border-right: 1px solid #e2e8f0
    }

    .ivr-values>div:last-child {
        border-right: 0
    }

    .ivr-values span {
        display: block;
        color: #f97316;
        font-size: 10px;
        font-weight: 800;
        margin-bottom: 7px
    }

    .ivr-values strong {
        display: block;
        color: #14213d;
        font-size: 13px;
        margin-bottom: 5px
    }

    .ivr-values small {
        color: #667085;
        font-size: 10px
    }

    /* =========================================
   KEYFRAMES
========================================= */
    @keyframes flowX {
        to {
            background-position: 40px 0
        }
    }

    @keyframes flowY {
        to {
            background-position: 0 40px
        }
    }

    @keyframes sheen {
        from {
            transform: translateX(-110%)
        }

        to {
            transform: translateX(110%)
        }
    }

    @keyframes ring {
        0% {
            opacity: .55;
            transform: scale(1)
        }

        100% {
            opacity: 0;
            transform: scale(1.2, 1.4)
        }
    }

    @keyframes head {

        0%,
        75% {
            opacity: 1;
            transform: scale(1)
        }

        100% {
            opacity: 0;
            transform: scale(1.8)
        }
    }

    /* =========================================
   RESPONSIVE
========================================= */
    @media (max-width:1250px) {
        .ai-ivr-flow {
            overflow-x: auto
        }

        .ivr-horizontal {
            justify-content: flex-start;
            padding-bottom: 20px
        }
    }

    @media (max-width:700px) {
        .ai-ivr-flow {
            padding: 60px 15px
        }

        .ai-ivr-heading {
            margin-bottom: 45px
        }

        .ivr-values {
            grid-template-columns: repeat(2, 1fr)
        }

        .ivr-values>div:nth-child(2) {
            border-right: 0
        }

        .ivr-values>div:nth-child(1),
        .ivr-values>div:nth-child(2) {
            border-bottom: 1px solid #e2e8f0
        }
    }

    @media (prefers-reduced-motion:reduce) {

        *,
        *::before,
        *::after {
            animation: none !important;
            transition-duration: .01ms !important;
            transition-delay: 0ms !important
        }
    }
</style>

<section class="ai-ivr-flow">
    <div class="ai-ivr-wrap">

        <div class="ai-ivr-heading">
            <span>AI VOICE AUTOMATION</span>
            <h2>From Every Call to <strong>Business Outcome</strong></h2>
            <p>
                Intelligent conversations that understand, act,
                automate and connect customers to the right solution.
            </p>
        </div>

        <div class="ivr-horizontal">

            <div class="ivr-step" data-step="0">
                <div class="ivr-node">
                    <div class="ivr-icon">☎</div>
                    <div><small>01</small>
                        <h3>Incoming Call</h3>
                    </div>
                </div>
            </div>

            <div class="ivr-arrow" data-arrow="0"><span class="pipe"><i></i></span></div>

            <div class="ivr-step" data-step="1">
                <div class="ivr-node">
                    <div class="ivr-icon">AI</div>
                    <div><small>02</small>
                        <h3>AI Answers</h3>
                    </div>
                </div>
            </div>

            <div class="ivr-arrow" data-arrow="1"><span class="pipe"><i></i></span></div>

            <div class="ivr-step" data-step="2">
                <div class="ivr-node">
                    <div class="ivr-icon">◉</div>
                    <div><small>03</small>
                        <h3>Understand Intent</h3>
                    </div>
                </div>
            </div>

            <div class="ivr-arrow" data-arrow="2"><span class="pipe"><i></i></span></div>

            <div class="ivr-branches-vertical">

                <div class="vertical-branch-title">CALLER INTENT</div>

                <div class="trunk trunk-l"><i><b></b></i><i><b></b></i></div>
                <div class="trunk trunk-r"><i><b></b></i><i><b></b></i></div>

                <div class="vertical-branch-item" data-step="3">
                    <div class="vertical-branch-node">
                        <span class="branch-icon">?</span>
                        <div><small>04</small><strong>Questions / FAQ</strong></div>
                    </div>
                    <div class="vertical-result">AI Resolves</div>
                </div>

                <div class="vertical-branch-item" data-step="4">
                    <div class="vertical-branch-node orange">
                        <span class="branch-icon">✓</span>
                        <div><small>05</small><strong>Action / Booking</strong></div>
                    </div>
                    <div class="vertical-result">CRM / API</div>
                </div>

                <div class="vertical-branch-item" data-step="5">
                    <div class="vertical-branch-node">
                        <span class="branch-icon">↗</span>
                        <div><small>06</small><strong>Complex Request</strong></div>
                    </div>
                    <div class="vertical-result">Human Handoff</div>
                </div>

            </div>

            <div class="branch-arrow"><span class="pipe"><i></i></span></div>

            <div class="ivr-final" data-final="true">
                <div class="final-icon">✦</div>
                <div><small>OUTCOME</small>
                    <h3>Business Outcome</h3>
                </div>
            </div>

        </div>

        <div class="ivr-values">
            <div><span>01</span><strong>Always On</strong><small>24/7 customer availability</small></div>
            <div><span>02</span><strong>Smarter Conversations</strong><small>Intent-based interaction</small></div>
            <div><span>03</span><strong>Automated Actions</strong><small>Connected business workflows</small></div>
            <div><span>04</span><strong>Better Experience</strong><small>Human handoff when needed</small></div>
        </div>

    </div>
</section>

<script>
    (() => {
        const section = document.querySelector(".ai-ivr-flow");
        const steps = [...document.querySelectorAll(".ivr-step")];
        const arrows = [...document.querySelectorAll(".ivr-arrow")];
        const items = [...document.querySelectorAll(".vertical-branch-item")];
        const box = document.querySelector(".ivr-branches-vertical");
        const trunkL = box.querySelector(".trunk-l");
        const trunkR = box.querySelector(".trunk-r");
        const brArrow = document.querySelector(".branch-arrow");
        const fin = document.querySelector(".ivr-final");

        /* how long each step is held before the water moves on (ms) */
        const HOLD = [2000, 2400, 2400, 4600, 3600, 3900];

        let cur = -1,
            timer = null,
            cleanTimer = null,
            visible = true;

        const setD = (el, name, ms) => el.style.setProperty(name, ms + "ms");

        /* Delay chain so the water travels: pipe -> trunk -> pipe -> node -> chip -> merge -> outcome */
        function timeline(s, fresh) {
            const t = {};
            if (s === 4) {
                t.pipe = fresh ? 450 : 100;
            } else {
                t.trunkL = fresh ? 450 : 0;
                t.pipe = fresh ? 850 : 450;
            }
            t.node = t.pipe + 200;
            t.chip = t.node + 300;
            if (s !== 4) {
                t.trunkR = t.chip + 150;
                t.brArrow = t.trunkR + 350;
            } else {
                t.brArrow = t.chip + 150;
            }
            t.final = fresh ? t.brArrow + 450 : t.chip + 300;
            return t;
        }

        function show(step) {
            const prev = cur;
            cur = step;

            const branch = step >= 3;
            const fresh = branch && !(prev >= 3);
            const t = branch ? timeline(step, fresh) : {};

            /* main nodes */
            steps.forEach((el, i) => {
                el.classList.toggle("on", i <= step);
                el.classList.toggle("active", i === step);
                setD(el, "--d", i === step && prev < step ? 550 : 0);
            });

            /* main pipes */
            arrows.forEach((el, i) => {
                el.classList.toggle("flowed", i < step);
                setD(el, "--d", 0);
            });

            /* branches */
            box.dataset.s = branch ? step : "";
            setD(trunkL, "--d", t.trunkL || 0);
            setD(trunkR, "--d", t.trunkR || 0);

            items.forEach(el => {
                const on = Number(el.dataset.step) === step;
                el.classList.toggle("active", on);
                setD(el, "--d1", on ? t.pipe : 0);
                setD(el, "--d2", on ? t.node : 0);
                setD(el, "--dc", on ? t.chip : 0);
            });

            /* merge pipe + outcome */
            brArrow.classList.toggle("flowed", branch);
            setD(brArrow, "--d", branch && fresh ? t.brArrow : 0);

            fin.classList.toggle("active", branch);
            setD(fin, "--d", branch ? t.final : 0);
            fin.classList.remove("pulse");
            if (branch) {
                void fin.offsetWidth;
                fin.classList.add("pulse");
            }

            /* clear leftover delays so hover feels instant */
            clearTimeout(cleanTimer);
            cleanTimer = setTimeout(clearDelays, 3600);

            schedule();
        }

        function clearDelays() {
            [...steps, ...arrows, ...items, trunkL, trunkR, brArrow, fin].forEach(el => {
                ["--d", "--d1", "--d2", "--dc"].forEach(n => el.style.removeProperty(n));
            });
        }

        function schedule() {
            clearTimeout(timer);
            if (document.hidden || !visible) return;
            timer = setTimeout(() => show((cur + 1) % HOLD.length), HOLD[cur]);
        }

        /* click to jump */
        steps.forEach(el => el.addEventListener("click", () => show(Number(el.dataset.step))));
        items.forEach(el => el.addEventListener("click", () => show(Number(el.dataset.step))));

        /* pause when tab hidden or section off-screen */
        document.addEventListener("visibilitychange", schedule);
        if ("IntersectionObserver" in window) {
            new IntersectionObserver(([e]) => {
                visible = e.isIntersecting;
                visible ? schedule() : clearTimeout(timer);
            }, {
                threshold: .25
            }).observe(section);
        }

        show(0);
    })();
</script>