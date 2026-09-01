
<style>
    :root {

        /* ========================================
       PRIMARY — ORANGE
        ======================================== */

        --host-primary: #F97316;
        --host-primary-light: #FB923C;
        --host-primary-dark: #EA580C;

        --host-primary-soft: #FFF7ED;


        /* ========================================
       SECONDARY — BLUE
       Used sparingly for technology
        ======================================== */

        --host-secondary: #2563EB;
        --host-secondary-light: #60A5FA;
        --host-secondary-dark: #1D4ED8;

        --host-secondary-soft: #EFF6FF;


        /* ========================================
       DARK INFRASTRUCTURE
        ======================================== */

        --host-dark: #111827;
        --host-dark-2: #1F2937;
        --host-dark-card: #273449;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --host-bg: #FFFFFF;
        --host-bg-soft: #FAFAF9;
        --host-bg-orange: #FFF7ED;
        --host-bg-blue: #F8FAFF;


        /* ========================================
       TEXT
        ======================================== */

        --host-text: #111827;
        --host-text-secondary: #374151;
        --host-text-muted: #6B7280;

        --host-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --host-border: #E5E7EB;
        --host-border-orange: #FED7AA;
        --host-border-blue: #BFDBFE;


        /* ========================================
       STATUS
        ======================================== */

        --host-success: #16A34A;
        --host-warning: #F59E0B;
        --host-danger: #DC2626;


        /* ========================================
       GRADIENTS
        ======================================== */

        --host-gradient: linear-gradient(135deg, #F97316, #EA580C);
        --host-gradient-tech: linear-gradient(135deg, #F97316 0%, #F97316 65%, #2563EB 100%);
        --host-gradient-soft: linear-gradient(135deg, #FFF7ED, #FFFFFF);


        /* ========================================
       SHADOWS
        ======================================== */

        --host-shadow-sm: 0 2px 8px rgba(17, 24, 39, 0.05);
        --host-shadow-md: 0 10px 30px rgba(17, 24, 39, 0.08);
        --host-shadow-lg: 0 20px 50px rgba(249, 115, 22, 0.12);
        --host-shadow-orange: 0 12px 30px rgba(249, 115, 22, 0.20);


        /* ========================================
       RADIUS
        ======================================== */

        --host-radius-sm: 10px;
        --host-radius-md: 16px;
        --host-radius-lg: 24px;
        --host-radius-xl: 32px;


        /* ========================================
       LAYOUT
        ======================================== */

        --host-container: 1240px;
        --host-section-space: clamp(70px, 8vw, 120px);
    }

    /* ========================================
       SECTION
       ======================================== */

    .hguarantee {
        position: relative;
        background: var(--host-gradient-soft);
        padding: var(--host-section-space) 24px;
        overflow: hidden;
        isolation: isolate;
    }

    /* ---- decorative blobs + dot grid ---- */

    .hguarantee::before,
    .hguarantee::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        z-index: -1;
    }

    .hguarantee::before {
        width: 380px;
        height: 380px;
        background: rgba(249, 115, 22, 0.16);
        top: -140px;
        left: -120px;
        animation: float-a 9s ease-in-out infinite;
    }

    .hguarantee::after {
        width: 320px;
        height: 320px;
        background: rgba(37, 99, 235, 0.14);
        bottom: -120px;
        right: -100px;
        animation: float-b 11s ease-in-out infinite;
    }

    .hg_dotgrid {
        position: absolute;
        top: 48px;
        right: 6%;
        width: 130px;
        height: 130px;
        background-image: radial-gradient(circle, var(--host-primary) 1.6px, transparent 1.6px);
        background-size: 16px 16px;
        opacity: 0.18;
        z-index: -1;
    }

    .hg_ring {
        position: absolute;
        bottom: 30px;
        left: 5%;
        width: 160px;
        height: 160px;
        border: 2px dashed var(--host-border-blue);
        border-radius: 50%;
        opacity: 0.6;
        z-index: -1;
        animation: spin 30s linear infinite;
    }

    @keyframes float-a {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 24px); }
    }

    @keyframes float-b {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(-24px, -20px); }
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* ---- content ---- */

    .hg_content {
        max-width: var(--host-container);
        margin: 0 auto;
        position: relative;
    }

    .hg_content-heading {
        text-align: center;
        max-width: 560px;
        margin: 0 auto 56px;
    }

    .hg_content-heading .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: var(--host-primary-dark);
        background: var(--host-white);
        border: 1px solid var(--host-border-orange);
        padding: 6px 16px;
        border-radius: 999px;
        margin-bottom: 18px;
        box-shadow: var(--host-shadow-sm);
    }

    .hg_content-heading .eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--host-primary);
    }

    .hg_content-heading h2 {
        margin: 0;
        font-size: clamp(28px, 3.4vw, 42px);
        line-height: 1.2;
        letter-spacing: -0.01em;
        color: var(--host-text);
        font-weight: 700;
    }

    .hg_content-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    /* ---- card ---- */

    .hg_content-card {
        position: relative;
        background: var(--host-white);
        border: 1px solid var(--host-border);
        border-radius: var(--host-radius-lg);
        padding: 36px 28px;
        text-align: center;
        box-shadow: var(--host-shadow-sm);
        opacity: 0;
        transform: translateY(24px);
        animation: rise 0.7s ease forwards;
        transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    }

    .hg_content-card:nth-child(1) { animation-delay: 0.05s; }
    .hg_content-card:nth-child(2) { animation-delay: 0.2s; }
    .hg_content-card:nth-child(3) { animation-delay: 0.35s; }

    @keyframes rise {
        to { opacity: 1; transform: translateY(0); }
    }

    .hg_content-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--host-shadow-lg);
        border-color: var(--host-border-orange);
    }

    .hg_content-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: var(--host-radius-lg);
        padding: 1px;
        background: var(--host-gradient-tech);
        opacity: 0;
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        transition: opacity 0.25s ease;
        pointer-events: none;
    }

    .hg_content-card:hover::before {
        opacity: 1;
    }

    .card-icon {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 84px;
        height: 84px;
        margin: 0 auto 22px;
        border-radius: 50%;
        background: var(--host-bg-orange);
        color: var(--host-primary);
        transition: transform 0.3s ease;
    }

    .card-icon::after {
        content: "";
        position: absolute;
        inset: -8px;
        border-radius: 50%;
        border: 1.5px dashed var(--host-border-orange);
        animation: spin 22s linear infinite;
    }

    .hg_content-card:hover .card-icon {
        transform: scale(1.08) rotate(-4deg);
    }

    .hg_content-card:nth-child(2) .card-icon {
        background: var(--host-bg-blue);
        color: var(--host-secondary);
    }

    .hg_content-card:nth-child(2) .card-icon::after {
        border-color: var(--host-border-blue);
    }

    .card-icon svg {
        width: 34px;
        height: 34px;
        fill: currentColor;
        stroke: currentColor;
        position: relative;
        z-index: 1;
    }

    .card-heading {
        margin: 0 0 10px;
        font-size: 20px;
        font-weight: 700;
        color: var(--host-text);
        letter-spacing: -0.01em;
    }

    .card-text {
        margin: 0;
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--host-text-secondary);
    }

    @media (max-width: 900px) {
        .hg_content-container { grid-template-columns: 1fr; max-width: 440px; margin: 0 auto; }
    }

    @media (prefers-reduced-motion: reduce) {
        .hg_content-card, .hguarantee::before, .hguarantee::after, .card-icon::after, .hg_ring {
            animation: none;
            opacity: 1;
            transform: none;
        }
    }
</style>

<section class="hguarantee">
    <div class="hg_dotgrid"></div>
    <div class="hg_ring"></div>

    <div class="hg_content">
        <div class="hg_content-heading">
            <div class="eyebrow">Our promise to you</div>
            <h2>The King Digital Guarantee</h2>
        </div>
        <div class="hg_content-container">

            <div class="hg_content-card">
                <span class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 21H5C4.06812 21 3.60218 21 3.23463 20.8478C2.74458 20.6448 2.35523 20.2554 2.15224 19.7654C2 19.3978 2 18.9319 2 18C2 17.0681 2 16.6022 2.15224 16.2346C2.35523 15.7446 2.74458 15.3552 3.23463 15.1522C3.60218 15 4.06812 15 5 15H19C19.9319 15 20.3978 15 20.7654 15.1522C21.2554 15.3552 21.6448 15.7446 21.8478 16.2346C22 16.6022 22 17.0681 22 18C22 18.9319 22 19.3978 21.8478 19.7654C21.6448 20.2554 21.2554 20.6448 20.7654 20.8478C20.3978 21 19.9319 21 19 21H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M2 12C2 11.0681 2 10.6022 2.15224 10.2346C2.35523 9.74458 2.74458 9.35523 3.23463 9.15224C3.60218 9 4.06812 9 5 9H19C19.9319 9 20.3978 9 20.7654 9.15224C21.2554 9.35523 21.6448 9.74458 21.8478 10.2346C22 10.6022 22 11.0681 22 12C22 12.9319 22 13.3978 21.8478 13.7654C21.6448 14.2554 21.2554 14.6448 20.7654 14.8478C20.3978 15 19.9319 15 19 15H5C4.06812 15 3.60218 15 3.23463 14.8478C2.74458 14.6448 2.35523 14.2554 2.15224 13.7654C2 13.3978 2 12.9319 2 12Z" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M10 3H19C19.9319 3 20.3978 3 20.7654 3.15224C21.2554 3.35523 21.6448 3.74458 21.8478 4.23463C22 4.60218 22 5.06812 22 6C22 6.93188 22 7.39782 21.8478 7.76537C21.6448 8.25542 21.2554 8.64477 20.7654 8.84776C20.3978 9 19.9319 9 19 9H5C4.06812 9 3.60218 9 3.23463 8.84776C2.74458 8.64477 2.35523 8.25542 2.15224 7.76537C2 7.39782 2 6.93188 2 6C2 5.06812 2 4.60218 2.15224 4.23463C2.35523 3.74458 2.74458 3.35523 3.23463 3.15224C3.60218 3 4.06812 3 5 3H6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <circle cx="5" cy="12" r="1" fill="currentColor"></circle>
                        <circle cx="5" cy="6" r="1" fill="currentColor"></circle>
                        <circle cx="5" cy="18" r="1" fill="currentColor"></circle>
                    </svg>
                </span>
                <h2 class="card-heading">99.9% Uptime</h2>
                <p class="card-text">The availability of your website is our top priority. We stand by that fact with our uptime guarantee!</p>
            </div>

            <div class="hg_content-card">
                <span class="card-icon">
                    <svg viewBox="0 0 59.333 59.333" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M40.52,30.413h8.426c-0.002-0.042-0.013-0.081-0.013-0.122c0-1.674,1.357-3.034,3.033-3.034V16.929 c-1.676,0-3.033-1.358-3.033-3.033h-7.969c1.955,2.11,3.158,4.926,3.158,8.028C44.122,25.257,42.737,28.265,40.52,30.413z M47.604,19.854c1.065,0,1.93,0.864,1.93,1.931c0,1.067-0.863,1.93-1.93,1.93c-1.067,0-1.932-0.863-1.932-1.93 C45.673,20.718,46.538,19.854,47.604,19.854z"></path>
                        <path fill="currentColor" d="M12.44,16.989v10.33c1.677,0,3.034,1.359,3.034,3.034c0,0.021-0.006,0.039-0.006,0.061h8.608 c-2.223-2.148-3.605-5.156-3.605-8.489c0-3.103,1.203-5.918,3.16-8.028h-8.163c0,0.022,0.006,0.04,0.006,0.06 C15.476,15.631,14.118,16.989,12.44,16.989z M17.693,22.236c0,0.994-0.806,1.802-1.8,1.802c-0.993,0-1.8-0.808-1.8-1.802 c0-0.992,0.807-1.798,1.8-1.798C16.889,20.439,17.693,21.244,17.693,22.236z"></path>
                        <path fill="currentColor" d="M32.298,31.6c5.344,0,9.677-4.332,9.677-9.676c0-5.343-4.333-9.676-9.677-9.676c-5.344,0-9.675,4.333-9.675,9.676 C22.623,27.268,26.954,31.6,32.298,31.6z M34.099,22.924c-0.146-0.139-0.36-0.292-0.647-0.464 c-0.283-0.172-0.646-0.359-1.092-0.563c-0.916-0.41-1.515-0.786-1.804-1.133c-0.458-0.513-0.686-1.127-0.686-1.845 c0-0.339,0.056-0.655,0.161-0.949c0.109-0.29,0.266-0.558,0.471-0.794c0.207-0.237,0.46-0.444,0.763-0.62 c0.301-0.175,0.644-0.31,1.024-0.409v-1.386h1.238v1.386c0.557,0.09,1.011,0.273,1.365,0.551c0.354,0.28,0.688,0.705,1.012,1.28 l-1.379,0.772c-0.416-0.756-0.958-1.133-1.627-1.133c-0.416,0-0.76,0.121-1.033,0.368c-0.274,0.246-0.41,0.552-0.41,0.921 c0,0.334,0.109,0.611,0.33,0.832c0.218,0.217,0.657,0.475,1.316,0.771c0.569,0.262,1.043,0.504,1.416,0.734 c0.371,0.228,0.651,0.45,0.842,0.661c0.533,0.575,0.799,1.271,0.799,2.085c0,0.803-0.241,1.509-0.721,2.123 c-0.478,0.608-1.115,1.021-1.91,1.229v1.466h-1.238v-1.422c-0.924-0.15-1.631-0.47-2.115-0.955 c-0.485-0.486-0.843-1.233-1.073-2.249l1.556-0.325c0.211,0.717,0.471,1.228,0.777,1.533c0.319,0.295,0.748,0.439,1.279,0.439 c0.521,0,0.953-0.167,1.302-0.502c0.346-0.329,0.517-0.758,0.517-1.279C34.529,23.582,34.387,23.207,34.099,22.924z"></path>
                        <path fill="currentColor" d="M58.331,1.753h-43c-0.553,0-1,0.447-1,1V10H9.916c-0.553,0-1,0.447-1,1v22.473c0,0.554,0.447,1,1,1h45.083 c0.554,0,1-0.446,1-1V11c0-0.553-0.446-1-1-1H16.332V3.753h41v24.802c0,0.553,0.447,1,1,1c0.554,0,1-0.447,1-1V2.753 C59.331,2.2,58.885,1.753,58.331,1.753z M53.999,32.473H10.916V12h43.083V32.473z"></path>
                        <path fill="currentColor" d="M58.331,39.836c-0.001,0-0.001,0-0.002,0l-4.666,0.01c-0.367,0.001-0.705,0.203-0.879,0.526l-4.051,7.542H35.057l-2.167-2 h5.441c0.224,0,0.439-0.074,0.615-0.211l2.188-1.705c0.229-0.181,0.369-0.451,0.384-0.743c0.014-0.292-0.103-0.575-0.314-0.775 l-2.52-2.363c-0.187-0.174-0.431-0.271-0.685-0.271l-10.144-0.01c-2.811-1.104-5.598-1.664-8.287-1.664 c-4.747,0-7.548,1.746-7.618,1.792L0.511,46.375c-0.251,0.141-0.43,0.383-0.489,0.665c-0.059,0.281,0.006,0.576,0.179,0.807 l7,9.333c0.195,0.261,0.495,0.4,0.801,0.4c0.176,0,0.354-0.046,0.514-0.144l4.123-2.476l5.533,0.948l18.572,1.666 c0.075,0.008,0.153,0.006,0.229-0.006l16.5-2.334c0.328-0.047,0.611-0.252,0.759-0.549l5-10.205 c0.065-0.138,0.102-0.287,0.102-0.439v-3.207c0-0.266-0.104-0.521-0.294-0.708C58.851,39.942,58.597,39.836,58.331,39.836z M57.331,43.812l-4.665,9.521l-15.859,2.241l-18.378-1.646l-5.818-1c-0.056-0.01-0.112-0.015-0.169-0.015 c-0.181,0-0.358,0.049-0.515,0.143l-3.668,2.202L2.485,47.56l10.489-5.878c0.023-0.016,2.469-1.511,6.596-1.511 c2.491,0,5.09,0.536,7.724,1.592c0.118,0.049,0.244,0.072,0.371,0.072l9.938,0.01l1.38,1.293l-0.995,0.775h-7.656 c-0.412,0-0.78,0.252-0.932,0.636c-0.149,0.384-0.049,0.82,0.253,1.099l4.334,4c0.186,0.172,0.428,0.267,0.679,0.267h14.666 c0.368,0,0.707-0.202,0.881-0.526l4.053-7.543l3.066-0.007L57.331,43.812L57.331,43.812z"></path>
                    </svg>
                </span>
                <h2 class="card-heading">45 Day Guarantee</h2>
                <p class="card-text">Try our services at no risk! If you're not completely satisfied, you can cancel within 45 days for a complete refund.</p>
            </div>

            <div class="hg_content-card">
                <span class="card-icon">
                    <svg viewBox="0 0 48.401 48.401" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M16.36,18.515l-3.17,3.17c-0.586,0.588-0.979,1.354-0.979,2.208v1.422c0,0.553,0.448,1,1,1h4.838 c0.552,0,1-0.422,1-0.942c0-0.522-0.448-0.944-1.001-0.944h-2.629c-0.552,0-1-0.12-1-0.267c0-0.149,0-0.268,0-0.268 c0-0.32,0.124-0.623,0.338-0.819l3.17-3.169c0.587-0.588,0.961-1.354,0.961-2.208v-1.532c0-1.548-1.46-2.813-3.259-2.813 c-1.798,0-3.258,1.264-3.258,2.813v0.623c0,0.345,0.447,0.624,1,0.624h0.208c0.552,0,1-0.279,1-0.624c0-0.344,0-0.623,0-0.623 c0-0.498,0.481-0.926,1.05-0.926c0.588,0,1.051,0.428,1.051,0.926v1.532C16.68,18.017,16.556,18.302,16.36,18.515z"></path>
                        <path fill="currentColor" d="M27.134,13.494h-0.207c-0.553,0-1.231,0.384-1.516,0.858l-4.064,6.779 c-0.283,0.474-0.514,1.281-0.514,1.802c0,0.52,0.447,0.943,1,0.943h3.091c0.554,0,1,0.447,1,1v0.439c0,0.553,0.447,1,1,1h0.209 c0.553,0,1-0.446,1-1v-0.439c0-0.553,0.158-1,0.354-1c0.198,0,0.356-0.422,0.356-0.943c0-0.522-0.158-0.945-0.355-0.945 c-0.195,0-0.355-0.447-0.355-1v-6.494C28.134,13.941,27.688,13.494,27.134,13.494z M25.925,20.988c0,0.553-0.446,1-1,0.999h-0.688 c-0.552,0-0.771-0.385-0.49-0.86l1.669-2.82c0.281-0.474,0.51-0.413,0.51,0.14L25.925,20.988L25.925,20.988z"></path>
                        <path fill="currentColor" d="M31.424,11.762c-0.381,0-0.689,0.447-0.689,1v6.635c0,0.553,0.309,1,0.689,0.999 c0.381,0,0.69-0.447,0.69-1v-3.401c0-0.324,0.312-0.576,0.685-0.576c0.371,0,0.684,0.252,0.684,0.576v3.401 c0,0.553,0.309,1,0.689,1c0.379,0,0.688-0.447,0.688-1v-3.401c0-0.935-0.923-1.691-2.062-1.691c-0.123,0-0.24,0.015-0.352,0.04 c-0.191,0.044-0.333-0.331-0.333-0.884v-0.698C32.114,12.209,31.804,11.762,31.424,11.762z"></path>
                        <path fill="currentColor" d="M47.463,25.801l-1.977-0.617c0.195-1.897,0.16-3.814-0.129-5.721 C43.487,7.105,31.913-1.427,19.553,0.444C7.197,2.315-1.335,13.891,0.536,26.249c0.214,1.408,0.554,2.769,1.006,4.069 c0.365,1.043,1.186,1.748,1.734,1.617c0.547-0.131,0.598-1.045,0.225-2.084c-0.447-1.244-0.78-2.549-0.986-3.904 C0.808,14.682,8.587,4.128,19.854,2.423c11.267-1.706,21.819,6.073,23.526,17.34c0.241,1.603,0.297,3.216,0.164,4.815 c0,0-0.826-0.258-1.846-0.576c-1.021-0.318-1.648,0.299-1.406,1.375l1.309,5.826c0.242,1.076,1.098,1.344,1.908,0.596l4.392-4.047 C48.713,27.003,48.515,26.13,47.463,25.801z"></path>
                        <path fill="currentColor" d="M46.551,41.784c0.054-0.286,0.027-0.589-0.102-0.881c-0.866-1.956-3.608-6.686-10.331-8.334 c-3.082-0.758-7.685-1.661-12.108-1.661l-0.453,0.003c-6.573,0.098-12.463,1.432-12.65,1.477 c-0.206,0.033-5.076,0.869-8.325,4.352l0.012,0.012c-0.562,0.469-1.082,1.321-1.314,1.738l-0.02-0.013 c-0.431,0.713-0.754,1.413-0.988,2.14c-0.094,0.293-0.09,0.59-0.014,0.867c-0.14,0.241-0.228,0.517-0.23,0.813L0,45.834 c-0.008,0.913,0.728,1.664,1.645,1.674l10.928,0.09h0.009c0.909,0,1.653-0.738,1.661-1.646l0.028-3.538 c0.002-0.277-0.071-0.535-0.19-0.767c0.053-0.076,0.116-0.15,0.157-0.228c0.152-0.291,0.882-1.258,3.875-1.442 c0.96-0.06,2.111-0.089,3.421-0.089c3.779,0,7.694,0.25,7.733,0.253l0.122,0.001c0.407,0,2.446,0.072,2.576,1.493 c0.015,0.163,0.057,0.314,0.109,0.46c-0.188,0.279-0.297,0.615-0.286,0.977l0.117,3.543c0.033,0.896,0.763,1.599,1.659,1.599 l11.745-0.386c0.912-0.034,1.63-0.802,1.6-1.712l-0.117-3.539C46.782,42.284,46.692,42.017,46.551,41.784z M12.244,45.595 L2.002,45.511l0.022-2.856l10.242,0.084L12.244,45.595z M29.405,38.144c-0.003,0-0.007,0-0.01,0 c-0.039-0.002-4.016-0.257-7.862-0.257c-1.351,0-2.544,0.031-3.544,0.093c-3.598,0.223-4.99,1.489-5.525,2.514 c-0.016,0.03-0.061,0.072-0.016,0.072L2.43,40.557c0.149-0.346,0.329-0.69,0.54-1.042c0.139-0.197,0.84-1.129,1.035-1.367 l0.042-0.044c2.774-2.975,7.145-3.736,7.248-3.756c0.059-0.014,5.929-1.344,12.292-1.438l0.424-0.003 c4.224,0,8.656,0.872,11.632,1.604c5.107,1.253,7.564,4.511,8.606,6.442l-10.327,0.229C33.553,38.948,31.289,38.144,29.405,38.144 z M33.892,46.202l-0.095-2.856l11.007-0.36l0.095,2.854L33.892,46.202z"></path>
                    </svg>
                </span>
                <h2 class="card-heading">Free Support</h2>
                <p class="card-text">Our support staff is available to assist you via Telephone, LiveChat, or Email with any hosting-related issues</p>
            </div>

        </div>
    </div>
</section>
