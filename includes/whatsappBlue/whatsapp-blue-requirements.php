<style>

.whatsappBlue-requirements {
    position: relative;
    padding: 40px 0 20px;
    background: var(--wa-bg);
    font-family: 'Inter', sans-serif;
}

.whatsappBlue-requirements .container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 24px;
}

/* ---------- Header ---------- */

.whatsappBlue-requirements_header {
    max-width: 620px;
    margin-bottom: 56px;
}

.whatsappBlue-requirements .whatsappBlue-section_badge {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 18px 9px 16px;
    background: var(--wa-green-soft);
    color: var(--wa-green-dark);
    font-size: 13px;
    font-weight: 600;
    border-radius: 18px 18px 18px 4px;
    margin-bottom: 22px;
}

.whatsappBlue-requirements .whatsappBlue-section_badge i {
    font-size: 12px;
}

.whatsappBlue-requirements_title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    font-size: clamp(32px, 4vw, 44px);
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: var(--wa-text-primary);
    margin-bottom: 20px;
}

.whatsappBlue-requirements_title span {
    display: block;
    background: var(--wa-gradient);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.whatsappBlue-requirements_description {
    font-size: 16.5px;
    line-height: 1.7;
    color: var(--wa-text-secondary);
    max-width: 52ch;
}

/* ---------- Wrapper ---------- */

.whatsappBlue-requirements_wrapper {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 32px;
    align-items: start;
    margin-bottom: 26px;
}

/* ---------- double tick ---------- */

.whatsappBlue-tick2 {
    position: relative;
    display: inline-block;
    width: 18px;
    height: 12px;
    flex-shrink: 0;
}

.whatsappBlue-tick2 i {
    position: absolute;
    top: 0;
    font-size: 12px;
    color: #93C5FD;
    transition: color 0.35s ease;
}

.whatsappBlue-tick2 i:first-child { left: 0; }
.whatsappBlue-tick2 i:last-child { left: 6px; }

.is-read .whatsappBlue-tick2 i {
    color: var(--wa-blue-light);
}

/* ---------- LEFT: chat panel ---------- */

.whatsappBlue-chatpanel {
    background: var(--wa-bg);
    border: 1px solid var(--wa-border);
    border-radius: var(--wa-radius-lg);
    overflow: hidden;
    box-shadow: var(--wa-shadow-sm);
}

.whatsappBlue-chatpanel_header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 22px;
    background: var(--wa-navy);
}

.whatsappBlue-chatpanel_avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: var(--wa-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    flex-shrink: 0;
}

.whatsappBlue-chatpanel_header strong {
    display: block;
    color: #fff;
    font-size: 14.5px;
    font-weight: 600;
}

.whatsappBlue-chatpanel_header small {
    color: #94A3B8;
    font-size: 12px;
}

.whatsappBlue-chatpanel_body {
    padding: 26px 22px 10px;
    background-image: radial-gradient(var(--wa-green-pale) 1px, transparent 1px);
    background-size: 22px 22px;
    background-position: -4px -4px;
}

.whatsappBlue-requirement_item {
    position: relative;
    max-width: 92%;
    margin: 0 0 22px auto;
    background: var(--wa-green-soft);
    border: 1px solid var(--wa-green-pale);
    border-radius: 16px 16px 4px 16px;
    padding: 14px 16px 10px 16px;
    opacity: 0;
    transform: translateY(10px) scale(0.98);
    transition: opacity 0.45s ease, transform 0.45s ease;
    transition-delay: var(--d, 0s);
}

.whatsappBlue-chatpanel.is-visible .whatsappBlue-requirement_item {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.whatsappBlue-requirement_item:nth-child(1) { --d: 0.05s; }
.whatsappBlue-requirement_item:nth-child(2) { --d: 0.18s; }
.whatsappBlue-requirement_item:nth-child(3) { --d: 0.31s; }
.whatsappBlue-requirement_item:nth-child(4) { --d: 0.44s; }
.whatsappBlue-requirement_item:nth-child(5) { --d: 0.57s; }
.whatsappBlue-requirement_item:nth-child(6) { --d: 0.7s; }

.whatsappBlue-requirement_top {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 6px;
}

.whatsappBlue-requirement_icon {
    width: 30px;
    height: 30px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    color: #fff;
    flex-shrink: 0;
}

.whatsappBlue-requirement_icon.green { background: var(--wa-gradient-green); }
.whatsappBlue-requirement_icon.blue { background: var(--wa-gradient-blue); }

.whatsappBlue-requirement_content h3 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 600;
    font-size: 14.5px;
    color: var(--wa-text-primary);
}

.whatsappBlue-requirement_content p {
    font-size: 13.5px;
    line-height: 1.6;
    color: var(--wa-text-secondary);
    margin-bottom: 8px;
}

.whatsappBlue-requirement_meta {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 6px;
}

.whatsappBlue-requirement_meta time {
    font-size: 11px;
    color: var(--wa-text-muted);
}

/* ---------- RIGHT: phone mockup ---------- */

.whatsappBlue-requirements_visual {
    position: relative;
}

.whatsappBlue-requirements_glow {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 240px;
    height: 240px;
    background: var(--wa-gradient-soft);
    border-radius: 50%;
    filter: blur(70px);
    opacity: 0.6;
    z-index: -1;
}

.whatsappBlue-phone {
    background: var(--wa-navy);
    border-radius: 34px;
    padding: 10px;
    max-width: 320px;
    margin: 0 auto;
    box-shadow: var(--wa-shadow-blue);
}

.whatsappBlue-phone_screen {
    background: var(--wa-bg);
    border-radius: 26px;
    overflow: hidden;
}

.whatsappBlue-phone_bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px 4px;
    font-size: 11px;
    font-weight: 600;
    color: var(--wa-text-primary);
}

.whatsappBlue-phone_header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 16px 14px;
}

.whatsappBlue-phone_header i.back {
    color: var(--wa-blue);
    font-size: 15px;
}

.whatsappBlue-phone_avatar {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: var(--wa-gradient);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 13px;
    flex-shrink: 0;
}

.whatsappBlue-phone_header-name {
    display: flex;
    align-items: center;
    gap: 5px;
}

.whatsappBlue-phone_header-name strong {
    font-size: 13.5px;
    font-weight: 600;
    color: var(--wa-text-primary);
}

.whatsappBlue-phone_header-name .badge {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: var(--wa-blue);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8px;
}

.whatsappBlue-phone_header small {
    display: block;
    font-size: 11px;
    color: var(--wa-text-muted);
}

.whatsappBlue-phone_body {
    padding: 16px 14px 18px;
    background-image: radial-gradient(var(--wa-blue-pale) 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 300px;
}

.whatsappBlue-phone_system {
    text-align: center;
    margin-bottom: 16px;
}

.whatsappBlue-phone_system span {
    display: inline-block;
    background: rgba(37, 99, 235, 0.08);
    color: var(--wa-blue-dark);
    font-size: 11px;
    font-weight: 600;
    padding: 5px 12px;
    border-radius: 10px;
}

.whatsappBlue-phone_bubble {
    max-width: 84%;
    margin: 0 0 10px auto;
    background: var(--wa-green-soft);
    border: 1px solid var(--wa-green-pale);
    border-radius: 14px 14px 3px 14px;
    padding: 9px 12px 7px;
    opacity: 0;
    transform: translateY(8px);
    transition: opacity 0.4s ease, transform 0.4s ease;
    transition-delay: var(--d, 0s);
}

.whatsappBlue-phone.is-visible .whatsappBlue-phone_bubble {
    opacity: 1;
    transform: translateY(0);
}

.whatsappBlue-phone_bubble:nth-of-type(1) { --d: 0.2s; }
.whatsappBlue-phone_bubble:nth-of-type(2) { --d: 0.4s; }
.whatsappBlue-phone_bubble:nth-of-type(3) { --d: 0.6s; }
.whatsappBlue-phone_bubble:nth-of-type(4) { --d: 0.8s; }

.whatsappBlue-phone_bubble p {
    font-size: 12.5px;
    color: var(--wa-text-primary);
    margin-bottom: 5px;
}

.whatsappBlue-phone_bubble .meta {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 5px;
}

.whatsappBlue-phone_bubble .meta time {
    font-size: 10px;
    color: var(--wa-text-muted);
}

.whatsappBlue-phone_final {
    margin-top: 4px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.5s ease;
    transition-delay: 1.05s;
}

.whatsappBlue-phone.is-visible .whatsappBlue-phone_final {
    opacity: 1;
}

.whatsappBlue-phone_final span {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--wa-gradient-green);
    color: #fff;
    font-size: 12.5px;
    font-weight: 600;
    padding: 9px 16px;
    border-radius: 14px;
}

/* floating verified badge */

.whatsappBlue-requirements_tick {
    position: absolute;
    left: -14px;
    bottom: 22px;
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--wa-bg);
    border: 1px solid var(--wa-border);
    border-radius: 14px;
    padding: 12px 16px;
    box-shadow: var(--wa-shadow-sm);
    max-width: 210px;
}

.whatsappBlue-requirements_tick span {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--wa-blue);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    flex-shrink: 0;
}

.whatsappBlue-requirements_tick strong {
    display: block;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: var(--wa-text-primary);
}

.whatsappBlue-requirements_tick small {
    font-size: 11.5px;
    color: var(--wa-text-muted);
}

/* ---------- Bottom note ---------- */

.whatsappBlue-requirements_note {
    display: flex;
    align-items: center;
    gap: 18px;
    padding: 20px 24px;
    border-left: 3px solid var(--wa-green);
    background: var(--wa-bg-soft);
    border-radius: 0 var(--wa-radius-md) var(--wa-radius-md) 0;
    margin-top: 44px;
    flex-wrap: wrap;
}

.whatsappBlue-requirements_note-icon {
    color: var(--wa-green-dark);
    font-size: 18px;
    flex-shrink: 0;
}

.whatsappBlue-requirements_note-content {
    flex: 1;
    min-width: 240px;
    font-size: 14px;
    line-height: 1.65;
    color: var(--wa-text-secondary);
}

.whatsappBlue-requirements_note-content strong {
    display: block;
    color: var(--wa-text-primary);
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 2px;
}

.whatsappBlue-requirements_note-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 22px 12px 18px;
    background: var(--wa-green);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    border-radius: 999px;
    text-decoration: none;
    white-space: nowrap;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.whatsappBlue-requirements_note-btn:hover {
    transform: translateY(-2px);
    box-shadow: var(--wa-shadow-green);
}

.whatsappBlue-requirements_note-btn i {
    font-size: 13px;
}

@media (prefers-reduced-motion: reduce) {
    .whatsappBlue-requirement_item,
    .whatsappBlue-phone_bubble,
    .whatsappBlue-phone_final,
    .whatsappBlue-tick2 i {
        transition: none;
    }
}

/* ---------- Responsive ---------- */

@media (max-width: 900px) {
    .whatsappBlue-requirements_wrapper {
        grid-template-columns: 1fr;
    }

    .whatsappBlue-phone {
        margin: 0;
    }

    .whatsappBlue-requirements_tick {
        position: static;
        margin-top: 16px;
        max-width: none;
    }
}

@media (max-width: 560px) {
    .whatsappBlue-requirements {
        padding: 80px 0 90px;
    }

    .whatsappBlue-requirement_item {
        max-width: 100%;
    }

    .whatsappBlue-requirements_note {
        flex-direction: column;
        align-items: flex-start;
        border-left: none;
        border-top: 3px solid var(--wa-green);
        border-radius: var(--wa-radius-md);
    }

    .whatsappBlue-requirements_note-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>


<section class="whatsappBlue-requirements" id="whatsappBlueRequirements">

    <div class="container">

        <div class="whatsappBlue-requirements_header">
            <span class="whatsappBlue-section_badge">
                <i class="fa-solid fa-clipboard-check"></i>
                Verification requirements
            </span>
            <h2 class="whatsappBlue-requirements_title">
                Get your business
                <span>verification ready</span>
            </h2>
            <p class="whatsappBlue-requirements_description">
                Preparing accurate and consistent business information
                can help make the verification process clearer and more
                organized.
            </p>
        </div>


        <div class="whatsappBlue-requirements_wrapper">

            <!-- LEFT — CHAT CHECKLIST -->

            <div class="whatsappBlue-chatpanel" id="whatsappBlueChatPanel">

                <div class="whatsappBlue-chatpanel_header">
                    <div class="whatsappBlue-chatpanel_avatar"><i class="fa-solid fa-clipboard-list"></i></div>
                    <div>
                        <strong>Requirements checklist</strong>
                        <small>6 items to review</small>
                    </div>
                </div>

                <div class="whatsappBlue-chatpanel_body">

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon green"><i class="fa-solid fa-building"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>Business information</h3></div>
                        </div>
                        <p>Keep your official business name and relevant business details accurate and consistent.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:14</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon blue"><i class="fa-solid fa-globe"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>Online business presence</h3></div>
                        </div>
                        <p>Maintain a clear and professional online presence that represents your business.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:15</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon green"><i class="fa-solid fa-address-card"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>Business identity</h3></div>
                        </div>
                        <p>Ensure your business identity and public-facing information are properly established.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:16</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon blue"><i class="fa-brands fa-whatsapp"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>WhatsApp Business setup</h3></div>
                        </div>
                        <p>Have your WhatsApp Business setup and relevant account information ready for the process.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:17</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon green"><i class="fa-solid fa-file-lines"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>Supporting information</h3></div>
                        </div>
                        <p>Be prepared to provide additional business information or documentation when required.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:18</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                    <div class="whatsappBlue-requirement_item is-read">
                        <div class="whatsappBlue-requirement_top">
                            <div class="whatsappBlue-requirement_icon blue"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="whatsappBlue-requirement_content"><h3>Accurate &amp; consistent details</h3></div>
                        </div>
                        <p>Make sure the information you provide is accurate and consistent across relevant business profiles and records.</p>
                        <div class="whatsappBlue-requirement_meta">
                            <time>09:19</time>
                            <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                        </div>
                    </div>

                </div>

            </div>


            <!-- RIGHT — PHONE MOCKUP -->

            <div class="whatsappBlue-requirements_visual">

                <div class="whatsappBlue-requirements_glow"></div>

                <div class="whatsappBlue-phone" id="whatsappBluePhone">
                    <div class="whatsappBlue-phone_screen">

                        <div class="whatsappBlue-phone_bar">
                            <span>9:41</span>
                            <span><i class="fa-solid fa-signal"></i> <i class="fa-solid fa-wifi"></i> <i class="fa-solid fa-battery-full"></i></span>
                        </div>

                        <div class="whatsappBlue-phone_header">
                            <i class="fa-solid fa-arrow-left back"></i>
                            <div class="whatsappBlue-phone_avatar"><i class="fa-solid fa-shield-halved"></i></div>
                            <div>
                                <div class="whatsappBlue-phone_header-name">
                                    <strong>Readiness Check</strong>
                                    <span class="badge"><i class="fa-solid fa-check"></i></span>
                                </div>
                                <small>online</small>
                            </div>
                        </div>

                        <div class="whatsappBlue-phone_body">

                            <div class="whatsappBlue-phone_system">
                                <span>Business readiness scan</span>
                            </div>

                            <div class="whatsappBlue-phone_bubble">
                                <p>Business details confirmed</p>
                                <div class="meta">
                                    <time>09:20</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>

                            <div class="whatsappBlue-phone_bubble">
                                <p>Business presence confirmed</p>
                                <div class="meta">
                                    <time>09:20</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>

                            <div class="whatsappBlue-phone_bubble">
                                <p>Account information confirmed</p>
                                <div class="meta">
                                    <time>09:21</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>

                            <div class="whatsappBlue-phone_bubble">
                                <p>Supporting details confirmed</p>
                                <div class="meta">
                                    <time>09:21</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>

                            <div class="whatsappBlue-phone_final">
                                <span><i class="fa-solid fa-circle-check"></i> You're verification ready</span>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="whatsappBlue-requirements_tick">
                    <span><i class="fa-solid fa-check"></i></span>
                    <div>
                        <strong>Verified Business</strong>
                        <small>Requirements can vary by route</small>
                    </div>
                </div>

            </div>

        </div>


        <div class="whatsappBlue-requirements_note">
            <i class="fa-solid fa-lightbulb whatsappBlue-requirements_note-icon"></i>
            <div class="whatsappBlue-requirements_note-content">
                <strong>Preparation matters.</strong>
                Having your business information organized can make the verification journey easier to navigate.
            </div>
            <a href="#contact" class="whatsappBlue-requirements_note-btn">
                Get assistance
                <i class="fa-solid fa-paper-plane"></i>
            </a>
        </div>

    </div>

</section>


<script>
(function () {
    var chatPanel = document.getElementById('whatsappBlueChatPanel');
    var phone = document.getElementById('whatsappBluePhone');
    if (typeof IntersectionObserver === 'undefined') return;

    [chatPanel, phone].forEach(function (el) {
        if (!el) return;
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        observer.observe(el);
    });
})();
</script>