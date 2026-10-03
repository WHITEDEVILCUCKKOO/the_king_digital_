<style>
    .qcontact-wrap {
        background: #ffffff;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        padding: 80px 20px;
    }

    .qcontact-inner {
        max-width: 1180px;
        margin: 0 auto;
    }

    /* ---------- Head ---------- */

    .qcontact-head {
        text-align: center;
        margin-bottom: 50px;
    }

    .qcontact-title {
        font-size: 44px;
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -0.5px;
        color: #171a2b;
        margin: 0 0 16px;
        opacity: 0;
        transform: translateY(18px);
        animation: qcontactFadeUp 0.7s ease forwards;
    }

    .qcontact-title-accent {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
        background-size: 250% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes aboutHeadingGradient {

        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }


    .qcontact-sub {
        font-size: 15px;
        line-height: 1.7;
        color: #5c6178;
        max-width: 620px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(18px);
        animation: qcontactFadeUp 0.7s ease forwards 0.12s;
    }

    @keyframes qcontactFadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ---------- Layout ---------- */

    .qcontact-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 24px;
        align-items: start;
    }

    /* ---------- Left panel ---------- */

    .qcontact-panel {
        background: #f3eae2;
        border-radius: 22px;
        padding: 34px 30px;
        opacity: 0;
        transform: translateY(24px);
        animation: qcontactFadeUp 0.7s ease forwards 0.2s;
    }

    .qcontact-panel-title {
        font-size: 21px;
        font-weight: 700;
        color: #141414;
        margin: 0 0 12px;
    }

    .qcontact-panel-desc {
        font-size: 13.8px;
        line-height: 1.7;
        color: #636364;
        margin: 0 0 24px;
    }

    .qcontact-info-card {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: #ffffff8f;
        border-radius: 14px;
        padding: 16px 18px;
        margin-bottom: 14px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qcontact-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(23, 176, 110, 0.12);
    }

    .qcontact-info-icon {
        flex-shrink: 0;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #f3e7d8;
        color: #17b06e;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .qcontact-info-card:hover .qcontact-info-icon {
        transform: rotate(-8deg) scale(1.1);
    }

    .qcontact-info-icon svg {
        width: 18px;
        height: 18px;
    }

    .qcontact-info-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        color: #8a8fa3;
        margin: 0 0 4px;
    }

    .qcontact-info-value {
        font-size: 15px;
        font-weight: 700;
        color: #171a2b;
        margin: 0;
    }

    .qcontact-info-value.qcontact-teal {
        color: #111111;
    }

    .qcontact-response-card {
        background: #ffffff6e;
        border-radius: 14px;
        padding: 18px 18px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qcontact-response-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(23, 176, 110, 0.1);
    }

    .qcontact-response-head {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
    }

    .qcontact-response-head span:first-child {
        font-size: 18px;
    }

    .qcontact-response-title {
        font-size: 14.5px;
        font-weight: 700;
        color: #171a2b;
        margin: 0;
    }

    .qcontact-response-text {
        font-size: 13.3px;
        line-height: 1.6;
        color: #5c6178;
        margin: 0;
    }

    .qcontact-response-text strong {
        color: #df710a;
    }

    /* ---------- Right form panel ---------- */

    .qcontact-form-panel {

        background: #1C3D7B;
        border: 1px solid #ececf5;
        border-radius: 22px;
        padding: 20px 34px 12px;

        box-shadow: 0 20px 50px rgba(30, 34, 90, 0.06);
        opacity: 0;
        transform: translateY(24px);
        animation: qcontactFadeUp 0.7s ease forwards 0.3s;
    }

    .qcontact-field {
        margin-bottom: 20px;
    }

    .qcontact-field-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .qcontact-label {
        display: block;
        font-size: 13.5px;
        font-weight: 700;
        color: #f4f5f8;
        margin-bottom: 8px;
    }

    .qcontact-required {
        color: #e0447e;
    }

    .qcontact-input,
    .qcontact-select,
    .qcontact-textarea {
        width: 100%;
        box-sizing: border-box;
        font-family: inherit;
        font-size: 14px;
        color: #171a2b;
        background: #ffffff;
        border: 1px solid #dcdfe8;
        border-radius: 10px;
        padding: 8px 14px;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .qcontact-input::placeholder,
    .qcontact-textarea::placeholder {
        color: #a7abbb;
    }

    .qcontact-input:focus,
    .qcontact-select:focus,
    .qcontact-textarea:focus {
        outline: none;
        border-color: #17b06e;
        box-shadow: 0 0 0 4px rgba(23, 176, 110, 0.12);
    }

    .qcontact-textarea {
        resize: vertical;
        min-height: 68px;
    }

    .qcontact-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%235c6178' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        background-size: 16px;
        cursor: pointer;
    }

    .qcontact-captcha-row {
        display: flex;
        gap: 14px;
        align-items: stretch;
    }

    .qcontact-captcha-code {
        flex-shrink: 0;
        min-width: 110px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        font-weight: 800;
        letter-spacing: 3px;
        color: #3d3fae;
        background: #eef0fe;
        border-radius: 10px;
        padding: 0 16px;
        user-select: none;
    }

    .qcontact-captcha-input {
        flex: 1;
    }

    .qcontact-submit-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 15px;
        font-weight: 700;
        color: #ffffff;
        background: linear-gradient(100deg, #db681b, #c46914);
        border: none;
        border-radius: 12px;
        padding: 15px 20px;
        cursor: pointer;
        margin-top: 4px;
        transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
    }

    .qcontact-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 32px rgba(176, 79, 23, 0.28);
        filter: brightness(1.04);
    }

    .qcontact-submit-btn svg {
        width: 17px;
        height: 17px;
    }

    .qcontact-terms {
        text-align: center;
        font-size: 12px;
        color: #8a8fa3;
        margin: 14px 0 0;
    }

    .qcontact-terms a {
        color: #17b06e;
        font-weight: 600;
        text-decoration: none;
    }

    .qcontact-terms a:hover {
        text-decoration: underline;
    }

    .qcontact-form-msg {
        text-align: center;
        font-size: 13.5px;
        font-weight: 600;
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 18px;
        display: none;
    }

    .qcontact-form-msg.qcontact-msg-show {
        display: block;
    }

    .qcontact-form-msg.qcontact-msg-success {
        background: #e3f7ee;
        color: #128a56;
    }

    .qcontact-form-msg.qcontact-msg-error {
        background: #fde5ea;
        color: #c23158;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 960px) {
        .qcontact-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 620px) {
        .qcontact-wrap {
            padding: 56px 16px;
        }

        .qcontact-title {
            font-size: 27px;
        }

        .qcontact-sub {
            font-size: 13.8px;
        }

        .qcontact-panel {
            padding: 26px 22px;
        }

        .qcontact-form-panel {
            padding: 26px 22px 24px;
        }

        .qcontact-field-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .qcontact-captcha-row {
            flex-direction: column;
        }

        .qcontact-captcha-code {
            min-width: 0;
            padding: 12px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .qcontact-title,
        .qcontact-sub,
        .qcontact-panel,
        .qcontact-form-panel {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }

        .qcontact-info-card:hover,
        .qcontact-response-card:hover,
        .qcontact-submit-btn:hover {
            transform: none;
        }
    }

    .check-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14.5px;
        color: #fff;
    }

    .check-item input {
        width: 16px;
        height: 16px;
        accent-color: var(--blue);
        margin: 0;
    }

    .checks {
        display: flex;
        gap: 20px;
        padding: 10px 0 30px;
        flex-wrap: wrap;
    }

    .req {
        color: red;
    }

    .field {
        display: flex;
        flex-direction: column;
    }

    .field.full {
        grid-column: 1 / -1;
    }

    .aer5454 {
        display: flex;
        color: #fff;
        font-weight: 700;

    }

    @media (max-width: 900px) {
        .field.full {
            grid-column: 1;
        }
    }


    .iauwe {
        position: relative;
    }

    .whatsapp_qr20 {


        display: flex;
        position: absolute;
        left: 100%;
        top: 0%;
        transform: translateX(57%) translateY(50%);


        animation: qrLeftAnimation 1.5s ease-in-out infinite;
        width: 40px;
        height: 40px;

    }

    .ohterivcon_qr20 {


        display: flex;
        position: absolute;
        left: -50%;
        top: 100%;
        transform: translateX(10%) translateY(-150%);


        animation: qrRightAnimation 1.5s ease-in-out infinite;
        width: 40px;
        height: 40px;

    }



</style>

<section class="qcontact-wrap">
    <div class="qcontact-inner">

        <div class="qcontact-head">
            <h2 class="qcontact-title">Get in touch with <span class="qcontact-title-accent"> King Digital</span></h2>
            <p class="qcontact-sub">Have questions about WhatsApp API or Bulk SMS? Reach out to King Digital leading communication experts.</p>
        </div>

        <div class="qcontact-grid">

            <!-- Left info panel -->

            <div class="qcontact-form-panel">

                <div class="qcontact-form-msg" id="qcontactFormMsg"></div>

                <form id="qcontactForm" novalidate>

                    <div class="qcontact-field qcontact-field-row">
                        <div>
                            <label class="qcontact-label" for="qcontactName">Full Name <span class="qcontact-required">*</span></label>
                            <input class="qcontact-input" type="text" id="qcontactName" name="fullName" placeholder="John Doe" required>
                        </div>
                        <div>
                            <label class="qcontact-label" for="qcontactEmail">Work Email <span class="qcontact-required">*</span></label>
                            <input class="qcontact-input" type="email" id="qcontactEmail" name="workEmail" placeholder="you@company.com" required>
                        </div>
                    </div>

                    <div class="qcontact-field qcontact-field-row">
                        <div>
                            <label class="qcontact-label" for="qcontactPhone">Phone Number</label>
                            <input class="qcontact-input" type="tel" id="qcontactPhone" name="phone" placeholder="9900000000">
                        </div>
                        <div>
                            <label class="qcontact-label" for="qcontactSubject">Subject <span class="qcontact-required">*</span></label>
                            <select class="qcontact-select" id="qcontactSubject" name="subject" required>
                                <option value="" selected disabled>Select Service</option>
                                <option value="bulk-sms">Bulk SMS</option>
                                <option value="whatsapp-api">WhatsApp API</option>
                                <option value="otp-sms">OTP SMS</option>
                                <option value="voice">Voice / IVR</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="qcontact-field">

                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactMessage">Message <span class="qcontact-required">*</span></label>
                        <textarea class="qcontact-textarea" id="qcontactMessage" name="message" placeholder="Tell us about your requirements, use case, or question..." required></textarea>
                    </div>

                    <div class="field full aer5454">
                        <label>Interested In<span class="req">*</span></label>
                        <div class="checks">
                            <label class="check-item"><input type="checkbox"> Partnership</label>
                            <label class="check-item"><input type="checkbox"> Bulk Purchase</label>
                            <label class="check-item"><input type="checkbox"> Integration</label>
                            <label class="check-item"><input type="checkbox"> Reseller</label>
                            <label class="check-item"><input type="checkbox"> Other</label>
                        </div>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label">Enter CAPTCHA: <span class="qcontact-required">*</span></label>
                        <div class="qcontact-captcha-row">
                            <div class="qcontact-captcha-code" id="qcontactCaptchaCode"></div>
                            <input class="qcontact-input qcontact-captcha-input" type="text" id="qcontactCaptchaInput" placeholder="Enter the CAPTCHA" required>
                        </div>
                    </div>

                    <button type="submit" class="qcontact-submit-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13" />
                            <polygon points="22 2 15 22 11 13 2 9 22 2" />
                        </svg>
                        Send Inquiry
                    </button>

                    <p class="qcontact-terms">By submitting, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>

                </form>
            </div>



            <!-- Right form panel -->
            <div class="qcontact-panel">
                <h3 class="qcontact-panel-title">Let's Connect</h3>
                <p class="qcontact-panel-desc">Have a question or a project in mind? Fill out the form and our team will get back to you within 24 hours.
                </p>

                <div class="qcontact-info-card">
                    <div class="qcontact-info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#F97B30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16v16H4z" opacity="0" />
                            <path d="M22 6c0 1.1-.9 2-2 2H4a2 2 0 0 1-2-2" />
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6z" />
                            <polyline points="2 6 12 13 22 6" />
                        </svg>
                    </div>
                    <div style="display: none;">
                        <p class="qcontact-info-label"></p>
                        <p class="qcontact-info-value"></p>
                        <!-- <p class="qcontact-info-value">sales@staticking.com</p> -->
                        <p class="qcontact-info-value"></p>
                        <!-- <p class="qcontact-info-value">billing@staticking.com</p> -->
                    </div>
                    <div>
                        <p class="qcontact-info-label">MAIN EMAIL</p>
                        <p class="qcontact-info-value qcontact-teal">info@kingdigital.in</p>

                    </div>
                    <div></div>
                    <div>
                        <p class="qcontact-info-label">Sales</p>

                        <!-- <p class="qcontact-info-value qcontact-teal">+91-9211339966</p> -->
                        <p class="qcontact-info-value qcontact-teal">support@kingdigital.in</p>
                    </div>
                </div>

                <div class="qcontact-info-card">
                    <div class="qcontact-info-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.48 1.34 5L2 22l5.2-1.36a9.94 9.94 0 0 0 4.84 1.23h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.85 14.24c-.24.68-1.4 1.3-1.93 1.35-.5.05-1.02.24-3.43-.72-2.9-1.16-4.76-4.13-4.9-4.33-.14-.2-1.17-1.56-1.17-2.97 0-1.4.74-2.09 1-2.38.26-.28.57-.35.76-.35.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.82 2 .89 2.15.07.15.12.32.02.52-.1.2-.15.32-.3.5-.15.18-.32.4-.45.53-.15.15-.31.31-.13.61.18.3.79 1.3 1.7 2.1 1.17 1.04 2.15 1.37 2.45 1.52.3.15.48.13.66-.08.18-.2.75-.87.95-1.17.2-.3.4-.25.66-.15.27.1 1.72.81 2.02.96.3.15.5.22.57.35.08.13.08.75-.16 1.43z" />
                        </svg>
                    </div>
                    <div>
                        <p class="qcontact-info-label">WHATSAPP</p>
                        <p class="qcontact-info-value qcontact-teal">+91-9211-33-9966</p>

                    </div>
                    <div></div>
                    <div>
                        <p class="qcontact-info-label">Sales</p>

                        <!-- <p class="qcontact-info-value qcontact-teal">+91-9211339966</p> -->
                        <p class="qcontact-info-value qcontact-teal">+91-9210763636</p>
                    </div>
                </div>

                <div class="qcontact-response-card" >
                    <div class="qcontact-response-head" style="justify-content: center;">
                        <span>⏱️</span>
                        <p class="qcontact-response-title">Scan To Connect ( 24 / 7 )</p>
                    </div>
                    <!-- Yahan text aur QR code ke liye naya layout structure add kiya hai -->
                    <div class="qcontact-response-body" style="display: flex; align-items: center; justify-content: space-around; gap: 40px; flex-wrap: wrap;">

                        <!-- Pehla QR Code (Left wala) -->
                        <div class="qr-code-container iauwe" style="flex-shrink: 0; position: relative;">
                            <img src="assets/whatsapp_qr_9641.png" alt="Scan QR Code" style="width: 133px; height: 151px; object-fit: contain;">
                            <span class="whatsapp_qr20" style="display: none;">
                                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z" fill="#BFC8D0"></path>
                                    <path d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z" fill="url(#paint0_linear_87_7264)"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z" fill="white"></path>
                                    <path d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z" fill="white"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_87_7264" x1="26.5" y1="7" x2="4" y2="28" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#5BD066"></stop>
                                            <stop offset="1" stop-color="#27B43E"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </div>

                        <!-- Doosra QR Code (Right wala) - Aap yahan bhi upar wale ki tarah icon class add kar sakte hain agar zaroorat ho -->
                        <div class="qr-code-container iauwe" style="flex-shrink: 0; position: relative;">
                            <img src="assets/contact-qr.jpg.jpeg" alt="Scan QR Code" style="width: 133px; height: 151px; object-fit: contain;">
                            <!-- Agar right wale par bhi icon chahiye toh yahan span class dal sakte hain -->

                            <span class="ohterivcon_qr20" style="display: none;">
                                <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M66 485.5a399.2 315.1 0 1 0 798.4 0 399.2 315.1 0 1 0-798.4 0Z" fill="#438444"></path>
                                        <path d="M198.6 666.6L148 866.1l197.3-80z" fill="#438444"></path>
                                        <path d="M906.9 528.5C900.4 672.9 756.6 836 564.7 836c-30.9 0-60 1.3-88.6-4.3 50.1 34.6 118.4 43.7 191.5 43.7 155.9 0 269.3-84.5 276.1-212.4 3-56.3-19-106.4-36.8-134.5z" fill="#48A4FF"></path>
                                        <path d="M890.3 764.4l35.8 135.5-139.5-54.3z" fill="#48A4FF"></path>
                                        <path d="M309.6 470m-46.6 0a46.6 46.6 0 1 0 93.2 0 46.6 46.6 0 1 0-93.2 0Z" fill="#FFFFFF"></path>
                                        <path d="M465.6 470m-46.6 0a46.6 46.6 0 1 0 93.2 0 46.6 46.6 0 1 0-93.2 0Z" fill="#FFFFFF"></path>
                                        <path d="M620.8 470m-46.6 0a46.6 46.6 0 1 0 93.2 0 46.6 46.6 0 1 0-93.2 0Z" fill="#FFFFFF"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function qcontactInit() {
        var qcontactCaptchaEl = document.getElementById('qcontactCaptchaCode');
        var qcontactCaptchaInput = document.getElementById('qcontactCaptchaInput');
        var qcontactForm = document.getElementById('qcontactForm');
        var qcontactMsgEl = document.getElementById('qcontactFormMsg');
        var qcontactCurrentCode = '';

        function qcontactGenerateCaptcha() {
            qcontactCurrentCode = String(Math.floor(100000 + Math.random() * 900000));
            qcontactCaptchaEl.textContent = qcontactCurrentCode;
            qcontactCaptchaInput.value = '';
        }

        function qcontactShowMsg(text, type) {
            qcontactMsgEl.textContent = text;
            qcontactMsgEl.className = 'qcontact-form-msg qcontact-msg-show ' + (type === 'success' ? 'qcontact-msg-success' : 'qcontact-msg-error');
        }

        qcontactGenerateCaptcha();

        qcontactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!qcontactForm.checkValidity()) {
                qcontactForm.reportValidity();
                return;
            }

            if (qcontactCaptchaInput.value.trim() !== qcontactCurrentCode) {
                qcontactShowMsg('Incorrect CAPTCHA. Please try again.', 'error');
                qcontactGenerateCaptcha();
                return;
            }

            qcontactShowMsg("Thanks! Your inquiry has been sent — we'll get back to you within 24 hours.", 'success');
            qcontactForm.reset();
            qcontactGenerateCaptcha();
        });
    })();
</script>