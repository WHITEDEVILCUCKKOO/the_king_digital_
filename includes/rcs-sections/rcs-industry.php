<!-- ============ Industry Applications: How Businesses Leverage RCS Services ============ -->
<style>
    .kd-rcs-industries {
        --navy: #18283f;
        --blue: #315fc6;
        --indigo: #5b4bb7;
        --orange: #f0642f;
        --muted: #647087;
        --line: rgba(43, 67, 105, .12);
        --surface: #ffffff;

        position: relative;
        padding: 40px 0;
        background: linear-gradient(180deg, #f5f6fd 0%, #ffffff 100%);
        color: var(--navy);
        font-family: inherit;
    }

    .kd-rcs-industries *,
    .kd-rcs-industries *::before,
    .kd-rcs-industries *::after {
        box-sizing: border-box;
    }

    .kd-rcs-industries__wrap {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ---------- Header ---------- */
    .kd-rcs-industries__head {
        max-width: 780px;
        margin: 0 auto clamp(28px, 4vw, 40px);
        text-align: center;
    }

    .kd-rcs-industries__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 7px 14px;
        margin-bottom: 20px;
        border: 1px solid var(--line);
        border-radius: 999px;
        background: var(--surface);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--blue);
        box-shadow: 0 6px 18px rgba(43, 67, 105, .06);
    }

    .kd-rcs-industries__eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--orange);
    }

    .kd-rcs-industries__title {
        margin: 0 0 20px;
        font-size: clamp(30px, 4.2vw, 50px);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -.02em;
        color: var(--navy);
    }

    .kd-rcs-industries__title span {
        background: linear-gradient(90deg, var(--blue), var(--indigo));
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: var(--blue);
        /* fallback */
    }

    .kd-rcs-industries__intro {
        margin: 0 auto;
        max-width: 62ch;
        font-size: 16.5px;
        line-height: 1.75;
        color: var(--muted);
    }

    /* ---------- Tabs (only shown when JS is running) ---------- */
    .kd-rcs-industries__tabs {
        display: none;
        justify-content: center;
        margin-bottom: 26px;
    }

    .kd-rcs-industries.is-js .kd-rcs-industries__tabs {
        display: flex;
    }

    .kd-rcs-industries__tablist {
        display: inline-flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 4px;
        padding: 5px;
        border: 1px solid var(--line);
        border-radius: 999px;
        background: #ebeefa;
    }

    .kd-rcs-industries__tab {
        appearance: none;
        padding: 12px 20px;
        border: 0;
        border-radius: 999px;
        background: transparent;
        font: inherit;
        font-size: 14px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--muted);
        cursor: pointer;
        white-space: nowrap;
        transition: background-color .2s ease, color .2s ease;
    }

    .kd-rcs-industries__tab:hover {
        color: var(--navy);
    }

    .kd-rcs-industries__tab[aria-selected="true"] {
        background: linear-gradient(90deg, var(--blue), var(--indigo));
        color: #ffffff;
        box-shadow: 0 10px 22px -10px rgba(49, 95, 198, .7);
    }

    .kd-rcs-industries__tab:focus-visible {
        outline: 3px solid rgba(49, 95, 198, .45);
        outline-offset: 2px;
    }

    /* ---------- Panels ---------- */
    .kd-rcs-industries__panel {
        --accent: var(--blue);
        --accent-soft: rgba(49, 95, 198, .1);
        --accent-wash: linear-gradient(160deg, rgba(49, 95, 198, .12), rgba(91, 75, 183, .06));

        display: grid;
        grid-template-columns: .9fr 1.1fr;
        border: 1px solid var(--line);
        border-radius: 28px;
        background: var(--surface);
        box-shadow: 0 34px 70px -38px rgba(43, 67, 105, .5);
        overflow: hidden;
    }

    .kd-rcs-industries__panel[hidden] {
        display: none;
    }

    .kd-rcs-industries:not(.is-js) .kd-rcs-industries__panel+.kd-rcs-industries__panel {
        margin-top: 24px;
    }

    .kd-rcs-industries__panel--indigo {
        --accent: var(--indigo);
        --accent-soft: rgba(91, 75, 183, .12);
        --accent-wash: linear-gradient(160deg, rgba(91, 75, 183, .14), rgba(49, 95, 198, .05));
    }

    .kd-rcs-industries__panel--orange {
        --accent: var(--orange);
        --accent-soft: rgba(240, 100, 47, .12);
        --accent-wash: linear-gradient(160deg, rgba(240, 100, 47, .13), rgba(91, 75, 183, .05));
    }

    .kd-rcs-industries__side {
        padding: clamp(28px, 4vw, 48px);
        background: var(--accent-wash);
        border-right: 1px solid var(--line);
    }

    .kd-rcs-industries__icon {
        display: grid;
        place-items: center;
        width: 60px;
        height: 60px;
        margin-bottom: 26px;
        border-radius: 18px;
        background: #ffffff;
        color: var(--accent);
        box-shadow: 0 16px 30px -16px rgba(43, 67, 105, .45);
    }

    .kd-rcs-industries__panel-title {
        margin: 0 0 14px;
        font-size: clamp(24px, 2.8vw, 32px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.015em;
        color: var(--navy);
    }

    .kd-rcs-industries__panel-text {
        margin: 0;
        max-width: 44ch;
        font-size: 16px;
        line-height: 1.75;
        color: var(--muted);
    }

    .kd-rcs-industries__list {
        margin: 0;
        padding: clamp(8px, 1.5vw, 14px) clamp(24px, 3.5vw, 44px);
        list-style: none;
        align-self: center;
    }

    .kd-rcs-industries__item {
        display: grid;
        grid-template-columns: 28px 1fr;
        gap: 16px;
        padding: 22px 0;
        font-size: 15.5px;
        line-height: 1.7;
        color: var(--navy);
    }

    .kd-rcs-industries__item+.kd-rcs-industries__item {
        border-top: 1px solid var(--line);
    }

    .kd-rcs-industries__check {
        display: grid;
        place-items: center;
        width: 28px;
        height: 28px;
        margin-top: 1px;
        border-radius: 50%;
        background: var(--accent-soft);
        color: var(--accent);
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 860px) {
        .kd-rcs-industries__panel {
            grid-template-columns: 1fr;
        }

        .kd-rcs-industries__side {
            border-right: 0;
            border-bottom: 1px solid var(--line);
        }

        .kd-rcs-industries__panel-text {
            max-width: 62ch;
        }
    }

    @media (max-width: 640px) {
        .kd-rcs-industries__wrap {
            padding: 0 18px;
        }

        .kd-rcs-industries__tabs {
            display: none;
            justify-content: stretch;
        }

        .kd-rcs-industries.is-js .kd-rcs-industries__tabs {
            display: flex;
        }

        .kd-rcs-industries__tablist {
            display: flex;
            flex-direction: column;
            width: 100%;
            border-radius: 22px;
        }

        .kd-rcs-industries__tab {
            padding: 13px 18px;
            text-align: center;
        }
    }
</style>

<section class="kd-rcs-industries" id="rcs-industry-applications" aria-labelledby="kd-rcs-industries-title">
    <div class="kd-rcs-industries__wrap">

        <header class="kd-rcs-industries__head">
            <span class="kd-rcs-industries__eyebrow">Industry Applications</span>
            <h2 class="kd-rcs-industries__title" id="kd-rcs-industries-title">
                How Businesses Leverage <span>RCS Services</span>
            </h2>
            <p class="kd-rcs-industries__intro">
                Custom RCS messaging workflows adapt to the marketing and operational needs of diverse commercial sectors:
            </p>
        </header>

        <div class="kd-rcs-industries__tabs">
            <div class="kd-rcs-industries__tablist" role="tablist" aria-label="RCS industry applications">
                <button class="kd-rcs-industries__tab" role="tab" type="button" id="kd-rcs-ind-tab-1" aria-controls="kd-rcs-ind-panel-1">E-Commerce &amp; Retail</button>
                <button class="kd-rcs-industries__tab" role="tab" type="button" id="kd-rcs-ind-tab-2" aria-controls="kd-rcs-ind-panel-2">BFSI</button>
                <button class="kd-rcs-industries__tab" role="tab" type="button" id="kd-rcs-ind-tab-3" aria-controls="kd-rcs-ind-panel-3">Travel &amp; Hospitality</button>
                <button class="kd-rcs-industries__tab" role="tab" type="button" id="kd-rcs-ind-tab-4" aria-controls="kd-rcs-ind-panel-4">Automotive</button>
                <button class="kd-rcs-industries__tab" role="tab" type="button" id="kd-rcs-ind-tab-5" aria-controls="kd-rcs-ind-panel-5">Healthcare</button>
            </div>
        </div>

        <!-- 1. E-Commerce & Retail -->
        <div class="kd-rcs-industries__panel" id="kd-rcs-ind-panel-1" aria-labelledby="kd-rcs-ind-tab-1">
            <div class="kd-rcs-industries__side">
                <div class="kd-rcs-industries__icon" aria-hidden="true">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 8h12l-1 12H7z" />
                        <path d="M9 8V6a3 3 0 0 1 6 0v2" />
                    </svg>
                </div>
                <h3 class="kd-rcs-industries__panel-title">E-Commerce &amp; Retail Brands</h3>
                <p class="kd-rcs-industries__panel-text">Custom RCS workflows built for online and in-store retail, from discovery through delivery and repeat purchase.</p>
            </div>
            <ul class="kd-rcs-industries__list">
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Utilize swipeable product carousels featuring interactive links that allow customers to purchase seasonal outfits or lines of electronic products.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Offer live delivery notifications that let customers track their orders in real time and also reschedule their delivery at a click of a button.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Send customized discounts or in-stock notifications to previous purchasers of items.</span>
                </li>
            </ul>
        </div>

        <!-- 2. BFSI -->
        <div class="kd-rcs-industries__panel kd-rcs-industries__panel--indigo" id="kd-rcs-ind-panel-2" aria-labelledby="kd-rcs-ind-tab-2">
            <div class="kd-rcs-industries__side">
                <div class="kd-rcs-industries__icon" aria-hidden="true">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3 4 6v5c0 5 3.4 8.7 8 10 4.6-1.3 8-5 8-10V6z" />
                        <path d="m9.5 12 1.8 1.8L15 10" />
                    </svg>
                </div>
                <h3 class="kd-rcs-industries__panel-title">Banking, Financial Services &amp; Insurance</h3>
                <p class="kd-rcs-industries__panel-text">Certified, branded messaging that lets customers trust every alert, renewal and application update they receive.</p>
            </div>
            <ul class="kd-rcs-industries__list">
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Provide safe account notifications, payment slips and credit card amount alerts including certified brand symbols to avoid scams.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Send engaging insurance policy renewal notifications with the instant option of clicking on &ldquo;Renew Now&rdquo; or &ldquo;Download Policy PDF.&rdquo;</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Assist clients in the loan application process or show them the closest branches using map-action buttons.</span>
                </li>
            </ul>
        </div>

        <!-- 3. Travel, Tourism & Hospitality -->
        <div class="kd-rcs-industries__panel kd-rcs-industries__panel--orange" id="kd-rcs-ind-panel-3" aria-labelledby="kd-rcs-ind-tab-3">
            <div class="kd-rcs-industries__side">
                <div class="kd-rcs-industries__icon" aria-hidden="true">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 16 22 9l-3 10-5-3-3 3-1-4-6-2z" />
                    </svg>
                </div>
                <h3 class="kd-rcs-industries__panel-title">Travel, Tourism &amp; Hospitality Operators</h3>
                <p class="kd-rcs-industries__panel-text">Keep travelers informed and upsell in-context, from booking confirmation to the moment they land.</p>
            </div>
            <ul class="kd-rcs-industries__list">
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Interactive mobile boarding passes, hotel reservations, and digital keys can be sent directly to the recipient's inbox.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Provide service in real time that informs of flight delays, gate changes, and baggage information.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Offer nearby tourist attractions, upgrade options of rooms, and local eateries available before the guest's stopover.</span>
                </li>
            </ul>
        </div>

        <!-- 4. Automotive -->
        <div class="kd-rcs-industries__panel" id="kd-rcs-ind-panel-4" aria-labelledby="kd-rcs-ind-tab-4">
            <div class="kd-rcs-industries__side">
                <div class="kd-rcs-industries__icon" aria-hidden="true">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 13l2-6h14l2 6" />
                        <path d="M3 13h18v5H3z" />
                        <circle cx="7.5" cy="18" r="1.6" />
                        <circle cx="16.5" cy="18" r="1.6" />
                    </svg>
                </div>
                <h3 class="kd-rcs-industries__panel-title">Automotive Industry &amp; Dealerships</h3>
                <p class="kd-rcs-industries__panel-text">Turn showroom interest into booked appointments and keep owners coming back for service.</p>
            </div>
            <ul class="kd-rcs-industries__list">
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Sends promotions for new car launches that include videos of the car's inner workings in HD as well as exterior photo carousels.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Simplifies booking for test drives through an interactive calendar selection process.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Sends automated reminders for vehicle maintenance while making it easy for the customer to schedule an appointment.</span>
                </li>
            </ul>
        </div>

        <!-- 5. Healthcare -->
        <div class="kd-rcs-industries__panel kd-rcs-industries__panel--indigo" id="kd-rcs-ind-panel-5" aria-labelledby="kd-rcs-ind-tab-5">
            <div class="kd-rcs-industries__side">
                <div class="kd-rcs-industries__icon" aria-hidden="true">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M12 8v8M8 12h8" />
                    </svg>
                </div>
                <h3 class="kd-rcs-industries__panel-title">Healthcare Facilities &amp; Diagnostic Labs</h3>
                <p class="kd-rcs-industries__panel-text">Send notifications regarding appointments with just one tap of the &ldquo;Confirm,&rdquo; &ldquo;Reschedule,&rdquo; or &ldquo;Get Directions&rdquo; buttons.</p>
            </div>
            <ul class="kd-rcs-industries__list">
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Provide safe download links for lab test results to pre-approved patient messaging channels.</span>
                </li>
                <li class="kd-rcs-industries__item">
                    <span class="kd-rcs-industries__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m5 12 4.5 4.5L19 7" />
                        </svg></span>
                    <span>Use rich media cards to advertise preventive health programs and seasonal health check-up deals.</span>
                </li>
            </ul>
        </div>

    </div>
</section>

<script>
    /* Tabs for the RCS industry applications section.
     Without JavaScript all five panels simply stack and stay visible. */
    (function() {
        var root = document.getElementById('rcs-industry-applications');
        if (!root) return;

        var tabs = [].slice.call(root.querySelectorAll('[role="tab"]'));
        var panels = [].slice.call(root.querySelectorAll('.kd-rcs-industries__panel'));
        if (!tabs.length || tabs.length !== panels.length) return;

        root.classList.add('is-js');
        panels.forEach(function(p) {
            p.setAttribute('role', 'tabpanel');
        });

        function select(index, moveFocus) {
            tabs.forEach(function(tab, n) {
                var on = n === index;
                tab.setAttribute('aria-selected', on ? 'true' : 'false');
                tab.tabIndex = on ? 0 : -1;
                panels[n].hidden = !on;
            });
            if (moveFocus) tabs[index].focus();
        }

        tabs.forEach(function(tab, i) {
            tab.addEventListener('click', function() {
                select(i, false);
            });
            tab.addEventListener('keydown', function(e) {
                var next = null;
                if (e.key === 'ArrowRight' || e.key === 'ArrowDown') next = (i + 1) % tabs.length;
                else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') next = (i - 1 + tabs.length) % tabs.length;
                else if (e.key === 'Home') next = 0;
                else if (e.key === 'End') next = tabs.length - 1;
                if (next !== null) {
                    e.preventDefault();
                    select(next, true);
                }
            });
        });

        select(0, false);
    })();
</script>
<!-- ============ /Industry Applications: How Businesses Leverage RCS Services ============ -->