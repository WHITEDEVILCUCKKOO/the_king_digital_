<style>
    :root {
        --ivr-primary: #6366F1;
        --ivr-primary-dark: #4F46E5;
        --ivr-primary-light: #818CF8;

        --ivr-blue: #2563EB;
        --ivr-blue-dark: #1D4ED8;
        --ivr-blue-light: #60A5FA;

        --ivr-cyan: #22D3EE;
        --ivr-purple: #8B5CF6;
        --ivr-violet: #A78BFA;
        --ivr-gold: #F97316;

        --ivr-bg: #F8FAFC;
        --ivr-bg-light: #EEF2FF;
        --ivr-bg-blue: #EFF6FF;
        --ivr-bg-dark: #0F172A;
        --ivr-bg-dark-alt: #111827;

        --ivr-card: #FFFFFF;
        --ivr-card-dark: #1E293B;
        --ivr-border: #E2E8F0;
        --ivr-border-purple: #C7D2FE;

        --ivr-text-primary: #0F172A;
        --ivr-text-secondary: #475569;
        --ivr-text-muted: #64748B;
        --ivr-text-light: #F8FAFC;
        --ivr-text-muted-light: #A5B4CB;

        --ivr-gradient-primary: linear-gradient(135deg, #6366F1 0%, #2563EB 100%);
        --ivr-gradient-ai: linear-gradient(135deg, #8B5CF6 0%, #6366F1 45%, #2563EB 100%);
        --ivr-gradient-glow: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        --ivr-gradient-dark: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #172554 100%);

        --ivr-glow-purple: 0 0 40px rgba(139, 92, 246, 0.25);
        --ivr-glow-blue: 0 0 40px rgba(37, 99, 235, 0.25);
        --ivr-glow-cyan: 0 0 40px rgba(34, 211, 238, 0.20);

        --ivr-shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06);
        --ivr-shadow-md: 0 10px 30px rgba(15, 23, 42, 0.10);
        --ivr-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.14);

        --ivr-radius-sm: 8px;
        --ivr-radius-md: 14px;
        --ivr-radius-lg: 20px;
        --ivr-radius-xl: 28px;
        --ivr-radius-pill: 999px;

        --ivr-transition-fast: 0.2s ease;
        --ivr-transition: 0.35s ease;
        --ivr-transition-slow: 0.6s ease;

        /* Line color — deliberately NOT the same as the section background */
        --ivr-line: rgba(79, 70, 229, 0.38);
        --ivr-line-active: #4F46E5;
    }

    .ivr-section {
        position: relative;
        background: var(--ivr-border-purple);
        padding: 60px 100px 70px;
        overflow: hidden;
    }

    /* Decorative ambient glow blobs */
    .ivr-section::before,
    .ivr-section::after {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: 0.18;
        filter: blur(70px);
        pointer-events: none;
    }

    .ivr-section::before {
        top: -160px;
        left: -120px;
    }

    .ivr-section::after {
        bottom: -180px;
        right: -100px;
        background: var(--ivr-gradient-primary);
    }

    .wrap {
        position: relative;
        width: 100%;
        max-width: 1120px;
        margin: 0 auto;
    }

    .ivr-section_content-heading {
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 8px;
    }

    .ivr-section_content-heading h1 {
        font-size: 40px;
        font-weight: 700;
        margin: 0 auto;
        background: var(--ivr-gradient-primary);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .heading-underline {
        width: 64px;
        height: 4px;
        border-radius: var(--ivr-radius-pill);
        background: var(--ivr-gradient-glow);
        margin-top: -2px;
    }

    .ivr-section_content-heading p {
        font-size: 16px;
        font-weight: 500;
        color: var(--ivr-text-muted);
        margin: 0;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
    }

    .t {
        font-size: 14px;
        fill: var(--ivr-text-primary);
    }

    .ts {
        font-size: 12px;
        fill: var(--ivr-text-muted);
    }

    .th {
        font-size: 14px;
        font-weight: 700;
        fill: var(--ivr-text-primary);
    }

    /* Connector lines — visible against the lavender background, with an animated flowing dash */
    .flow-line {
        stroke: var(--ivr-line);
        stroke-width: 2.25;
        fill: none;
        stroke-dasharray: 6 6;
        animation: dashflow 1.4s linear infinite;
        transition: stroke var(--ivr-transition), stroke-width var(--ivr-transition), filter var(--ivr-transition);
    }

    .flow-line.active {
        stroke: var(--ivr-line-active);
        stroke-width: 3;
        filter: drop-shadow(0 0 5px rgba(79, 70, 229, 0.45));
    }

    @keyframes dashflow {
        to {
            stroke-dashoffset: -24;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .flow-line {
            animation: none;
        }
    }

    .ivr-box {
        transition: filter 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1), transform 0.4s cubic-bezier(0.34, 1.3, 0.64, 1);
        opacity: .55;
        transform-origin: center;
    }

    .ivr-box.active {
        opacity: 1;
        transform: scale(1.03);
        filter: drop-shadow(0 8px 18px rgba(79, 70, 229, 0.22));
    }

    .c-neutral rect {
        fill: var(--ivr-card);
        stroke: var(--ivr-border);
    }

    .c-neutral .th {
        fill: var(--ivr-text-primary);
    }

    .c-neutral .ts {
        fill: var(--ivr-text-muted);
    }

    .c-hub rect {
        fill: url(#hubGradient);
        stroke: var(--ivr-primary-dark);
    }

    .c-hub .th {
        fill: var(--ivr-text-light);
    }

    .c-hub .ts {
        fill: var(--ivr-text-muted-light);
    }

    .hub-pulse {
        fill: none;
        stroke: var(--ivr-cyan);
        stroke-width: 2;
        opacity: 0;
        transform-origin: 245px 170px;
    }

    .ivr-box.active .hub-pulse {
        animation: pulseRing 1.6s ease-out infinite;
    }

    @keyframes pulseRing {
        0% {
            opacity: .55;
            transform: scale(1);
        }

        100% {
            opacity: 0;
            transform: scale(1.35);
        }
    }

    .c-blue rect {
        fill: var(--ivr-bg-blue);
        stroke: var(--ivr-blue);
    }

    .c-blue .th {
        fill: var(--ivr-blue-dark);
    }

    .c-blue .ts {
        fill: var(--ivr-blue);
    }

    .c-violet rect {
        fill: var(--ivr-bg-light);
        stroke: var(--ivr-purple);
    }

    .c-violet .th {
        fill: var(--ivr-primary-dark);
    }

    .c-violet .ts {
        fill: var(--ivr-primary);
    }

    .ivr-dot {
        transition: transform 0.45s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease;
        opacity: 0;
        filter: drop-shadow(0 0 8px rgba(34, 211, 238, 0.65));
    }

    .ivr-dot.on {
        opacity: 1;
    }

    .controls {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 16px;
        margin-top: 28px;
    }

    .ivr-btn {
        border: none;
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        border-radius: var(--ivr-radius-pill);
        padding: 13px 24px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: var(--ivr-glow-blue);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), opacity var(--ivr-transition-fast);
    }

    .ivr-btn svg {
        flex: none;
    }

    .ivr-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-btn:disabled {
        opacity: .4;
        cursor: default;
        box-shadow: none;
        transform: none;
    }

    /* Big status badge — sits between the two main buttons */
    .status-badge {
        max-width: 380px;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: var(--ivr-primary-dark);
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border-purple);
        border-radius: var(--ivr-radius-pill);
        padding: 14px 24px;
        box-shadow: var(--ivr-shadow-md);
        transition: color var(--ivr-transition), border-color var(--ivr-transition), box-shadow var(--ivr-transition);
        margin: 0 auto;
    }

    .status-badge.state-progress {
        color: var(--ivr-blue-dark);
        border-color: var(--ivr-blue-light);
        box-shadow: var(--ivr-glow-blue);
    }

    .status-badge.state-done {
        color: #047857;
        border-color: #6EE7B7;
        box-shadow: 0 0 40px rgba(16, 185, 129, 0.20);
    }

    .controls-secondary {
        display: flex;
        justify-content: center;
        margin-top: 14px;
    }

    .ivr-btn.reset {
        background: var(--ivr-card);
        color: var(--ivr-text-secondary);
        border: 1px solid var(--ivr-border);
        box-shadow: none;
        padding: 10px 20px;
        font-size: 13px;
    }

    .ivr-btn.reset:hover:not(:disabled) {
        background: var(--ivr-bg);
        transform: none;
        box-shadow: none;
    }

    @media (max-width: 720px) {
        .ivr-section {
            padding: 44px 20px 50px;
        }

        .status-badge {
            order: 0;
            flex-basis: 100%;
            max-width: none;
        }

        .ivr-section_content-heading h1 {
            font-size: 30px;
        }

        .controls {
            gap: 10px;
        }

        .ivr-btn {
            padding: 10px 16px;
            font-size: 12.5px;
            gap: 6px;
        }

        .ivr-btn svg {
            width: 13px;
            height: 13px;
        }

        .ivr-btn.reset {
            padding: 8px 16px;
            font-size: 12px;
        }
    }

    @media (max-width: 420px) {
        .controls {
            flex-direction: column;
            align-items: stretch;
        }

        .ivr-btn {
            justify-content: center;
            padding: 10px 14px;
            font-size: 12px;
        }
    }
</style>

<section class="ivr-section">
    <div class="wrap">
        <div class="ivr-section_content-heading">
            <h1>Simple IVR call flow</h1>
            <span class="heading-underline"></span>
            <p class="lede">Tap a button below to simulate a caller pressing 1 or 2.</p>
            <h2 class="sr-only">Interactive diagram of a simple IVR call flow: a caller hears a greeting, reaches the IVR menu, then presses 1 for sales or 2 for general enquiries, each ending with an automatic SMS after the call.</h2>
        </div>

        <svg width="100%" viewBox="0 0 900 340" role="img">
            <title>Simple IVR call flow</title>
            <desc>Greeting leads to an IVR menu. Pressing 1 routes to sales and then an automatic SMS. Pressing 2 routes to general enquiries, then voicemail, then an automatic SMS.</desc>
            <defs>
                <marker id="arrow" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                    <path d="M2 1L8 5L2 9" fill="none" stroke="context-stroke" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </marker>
                <linearGradient id="hubGradient" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#6366F1" />
                    <stop offset="100%" stop-color="#2563EB" />
                </linearGradient>
            </defs>

            <path id="ln-g-ivr" d="M140 170L190 170" class="flow-line" marker-end="url(#arrow)" />
            <path id="ln-ivr-sales" d="M300 170L325 170L325 70L350 70" class="flow-line" marker-end="url(#arrow)" />
            <path id="ln-ivr-enq" d="M300 170L325 170L325 270L350 270" class="flow-line" marker-end="url(#arrow)" />
            <path id="ln-sales-sms" d="M460 70L670 70" class="flow-line" marker-end="url(#arrow)" />
            <path id="ln-enq-vm" d="M460 270L510 270" class="flow-line" marker-end="url(#arrow)" />
            <path id="ln-vm-sms" d="M620 270L670 270" class="flow-line" marker-end="url(#arrow)" />

            <text class="ts" x="332" y="128" text-anchor="start">Press 1</text>
            <text class="ts" x="332" y="222" text-anchor="start">Press 2</text>

            <g id="box-greeting" class="ivr-box c-neutral">
                <rect x="30" y="142" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="85" y="162" text-anchor="middle" dominant-baseline="central">Greeting</text>
                <text class="ts" x="85" y="180" text-anchor="middle" dominant-baseline="central">New call</text>
            </g>

            <g id="box-ivr" class="ivr-box c-hub">
                <circle class="hub-pulse" cx="245" cy="170" r="34" />
                <rect x="190" y="142" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="245" y="162" text-anchor="middle" dominant-baseline="central">IVR</text>
                <text class="ts" x="245" y="180" text-anchor="middle" dominant-baseline="central">Listening</text>
            </g>

            <g id="box-sales" class="ivr-box c-blue">
                <rect x="350" y="42" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="405" y="62" text-anchor="middle" dominant-baseline="central">Sales</text>
                <text class="ts" x="405" y="80" text-anchor="middle" dominant-baseline="central">Press 1</text>
            </g>

            <g id="box-sms-top" class="ivr-box c-blue">
                <rect x="670" y="42" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="725" y="62" text-anchor="middle" dominant-baseline="central">SMS sent</text>
                <text class="ts" x="725" y="80" text-anchor="middle" dominant-baseline="central">Auto text</text>
            </g>

            <g id="box-enquiries" class="ivr-box c-violet">
                <rect x="350" y="242" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="405" y="262" text-anchor="middle" dominant-baseline="central">Enquiries</text>
                <text class="ts" x="405" y="280" text-anchor="middle" dominant-baseline="central">Press 2</text>
            </g>

            <g id="box-voicemail" class="ivr-box c-violet">
                <rect x="510" y="242" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="565" y="262" text-anchor="middle" dominant-baseline="central">Voicemail</text>
                <text class="ts" x="565" y="280" text-anchor="middle" dominant-baseline="central">No agent</text>
            </g>

            <g id="box-sms-bottom" class="ivr-box c-violet">
                <rect x="670" y="242" width="110" height="56" rx="14" stroke-width="1" />
                <text class="th" x="725" y="262" text-anchor="middle" dominant-baseline="central">SMS sent</text>
                <text class="ts" x="725" y="280" text-anchor="middle" dominant-baseline="central">Auto text</text>
            </g>

            <circle id="ivr-dot" class="ivr-dot" r="7" fill="var(--ivr-cyan)" transform="translate(85,170)" />
        </svg>

        <div id="ivr-status" class="status-badge">Tap a button to simulate the call.</div>
        <div class="controls">
            <button class="ivr-btn" id="btn1" onclick="playRoute(1)">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                Press 1 — sales
            </button>


            <button class="ivr-btn" id="btn2" onclick="playRoute(2)">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                </svg>
                Press 2 — general enquiries
            </button>
        </div>

        <div class="controls-secondary">
            <button class="ivr-btn reset" id="btnReset" onclick="resetFlow()">Reset</button>
        </div>
    </div>
</section>

<script>
    (function() {
        var dot = document.getElementById('ivr-dot');
        var status = document.getElementById('ivr-status');
        var btn1 = document.getElementById('btn1'),
            btn2 = document.getElementById('btn2');
        var boxes = ['box-greeting', 'box-ivr', 'box-sales', 'box-sms-top', 'box-enquiries', 'box-voicemail', 'box-sms-bottom'];
        var lines = ['ln-g-ivr', 'ln-ivr-sales', 'ln-ivr-enq', 'ln-sales-sms', 'ln-enq-vm', 'ln-vm-sms'];
        var playing = false;

        function setButtons(disabled) {
            btn1.disabled = disabled;
            btn2.disabled = disabled;
        }

        function clearActive() {
            boxes.forEach(function(id) {
                document.getElementById(id).classList.remove('active');
            });
            lines.forEach(function(id) {
                document.getElementById(id).classList.remove('active');
            });
        }

        function activate(id) {
            document.getElementById(id).classList.add('active');
        }

        function moveDot(x, y) {
            dot.classList.add('on');
            dot.setAttribute('transform', 'translate(' + x + ',' + y + ')');
        }

        function setStatus(msg, state) {
            status.textContent = msg;
            status.className = 'status-badge' + (state ? ' state-' + state : '');
        }

        function step(list, i, done) {
            if (i >= list.length) {
                done();
                return;
            }
            var s = list[i];
            moveDot(s.x, s.y);
            if (s.box) activate(s.box);
            if (s.line) activate(s.line);
            if (s.msg) setStatus(s.msg, s.state);
            setTimeout(function() {
                step(list, i + 1, done);
            }, s.wait || 460);
        }

        function playRoute(n) {
            if (playing) return;
            playing = true;
            clearActive();
            setButtons(true);
            dot.classList.remove('on');

            var common = [{
                    x: 85,
                    y: 170,
                    box: 'box-greeting',
                    msg: 'Ringing…',
                    state: 'progress'
                },
                {
                    x: 140,
                    y: 170,
                    line: 'ln-g-ivr'
                },
                {
                    x: 245,
                    y: 170,
                    box: 'box-ivr',
                    msg: 'Connected — press 1 for sales, press 2 for enquiries',
                    state: 'progress'
                },
                {
                    x: 300,
                    y: 170
                }
            ];

            var branch;
            if (n === 1) {
                branch = [{
                        x: 325,
                        y: 170,
                        line: 'ln-ivr-sales'
                    },
                    {
                        x: 325,
                        y: 70
                    },
                    {
                        x: 350,
                        y: 70
                    },
                    {
                        x: 405,
                        y: 70,
                        box: 'box-sales',
                        msg: 'Routing to sales…',
                        state: 'progress'
                    },
                    {
                        x: 460,
                        y: 70,
                        line: 'ln-sales-sms'
                    },
                    {
                        x: 725,
                        y: 70,
                        box: 'box-sms-top',
                        msg: 'Call ended — SMS sent',
                        state: 'done',
                        wait: 350
                    }
                ];
            } else {
                branch = [{
                        x: 325,
                        y: 170,
                        line: 'ln-ivr-enq'
                    },
                    {
                        x: 325,
                        y: 270
                    },
                    {
                        x: 350,
                        y: 270
                    },
                    {
                        x: 405,
                        y: 270,
                        box: 'box-enquiries',
                        msg: 'Routing to general enquiries…',
                        state: 'progress'
                    },
                    {
                        x: 460,
                        y: 270,
                        line: 'ln-enq-vm'
                    },
                    {
                        x: 510,
                        y: 270
                    },
                    {
                        x: 565,
                        y: 270,
                        box: 'box-voicemail',
                        msg: 'No agent free — leaving voicemail',
                        state: 'progress'
                    },
                    {
                        x: 620,
                        y: 270,
                        line: 'ln-vm-sms'
                    },
                    {
                        x: 670,
                        y: 270
                    },
                    {
                        x: 725,
                        y: 270,
                        box: 'box-sms-bottom',
                        msg: 'Call ended — SMS sent',
                        state: 'done',
                        wait: 350
                    }
                ];
            }

            step(common.concat(branch), 0, function() {
                playing = false;
                setButtons(false);
            });
        }

        function resetFlow() {
            if (playing) return;
            clearActive();
            dot.classList.remove('on');
            setStatus('Tap a button to simulate the call.', null);
        }

        window.playRoute = playRoute;
        window.resetFlow = resetFlow;
    })();
</script>