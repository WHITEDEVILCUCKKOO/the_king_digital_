<?php require_once __DIR__ . '/includes/header.php' ?>

<main style="overflow: hidden; font-family:'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif">

    <style>
        :root {
            --nav: #0f172a;
            --nav-soft: #475569;
            --border: #e5e7eb;
            --bg: #ffffff;
            --bg-soft: #f8fafc;
            --accent: #059669;
            --accent-soft: #ecfdf5;
            --get: #0284c7;
            --post: #059669;
            --put: #d97706;
            --delete: #dc2626;
            --auth: #6b7280;
            --radius: 8px;
            --shadow: 0 1px 2px rgba(15, 23, 42, 0.06), 0 1px 8px rgba(15, 23, 42, 0.04);
        }

        .omni {
            color: var(--nav);
            background: var(--bg);
        }

        .omni_content {
            display: grid;
            grid-template-columns: 272px minmax(0, 1fr) 380px;
            max-width: 1440px;
            margin: 0 auto;
            min-height: 100vh;
        }

        /* ============ LEFT SIDEBAR ============ */

        .omni_content--leftside {
            border-right: 1px solid var(--border);
            padding: 16px 12px 60px;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .omni_content--input {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid var(--border);
            background: var(--bg-soft);
            border-radius: var(--radius);
            padding: 8px 10px;
            cursor: pointer;
            margin-bottom: 18px;
            transition: border-color .15s ease, background .15s ease;
        }

        .omni_content--input:hover {
            border-color: #cbd5e1;
            background: #fff;
        }

        .omni_content--input span svg {
            width: 16px;
            height: 16px;
            opacity: .5;
        }

        .omni_content--input input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 13px;
            color: var(--nav-soft);
            pointer-events: none;
            width: 100%;
        }

        .omni_content--input .kbd-hint {
            margin-left: auto;
            font-size: 11px;
            color: #94a3b8;
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 1px 5px;
        }

        .sidebar-eyebrow {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: #94a3b8;
            margin: 4px 8px 8px;
        }

        .sidebar-group {
            margin-bottom: 4px;
        }

        .sidebar-group-head {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            border: none;
            font-size: 12.5px;
            font-weight: 700;
            color: var(--nav);
            padding: 8px 8px;
            cursor: pointer;
            border-radius: 6px;
        }

        .sidebar-group-head:hover {
            color: var(--accent);
        }

        .sidebar-group-head svg {
            width: 11px;
            height: 11px;
            transition: transform .15s ease;
            flex-shrink: 0;
        }

        .sidebar-group.collapsed .sidebar-group-head svg {
            transform: rotate(-90deg);
        }

        .sidebar-group-items {
            display: flex;
            flex-direction: column;
            gap: 1px;
            overflow: hidden;
        }

        .sidebar-group.collapsed .sidebar-group-items {
            display: none;
        }

        .sidebar-endpoint {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 8px;
            text-align: left;
            border: none;
            background: transparent;
            font-size: 13px;
            font-weight: 500;
            color: var(--nav-soft);
            padding: 6px 8px;
            border-radius: 6px;
            cursor: pointer;
        }

        .sidebar-endpoint:hover {
            background: var(--bg-soft);
            color: var(--nav);
        }

        .sidebar-endpoint.active {
            background: var(--accent-soft);
            color: var(--accent);
        }

        .sidebar-endpoint .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .method-badge {
            flex-shrink: 0;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .02em;
            color: #fff;
            padding: 3px 7px;
            border-radius: 5px;
            min-width: 36px;
            text-align: center;
            line-height: 1.3;
        }

        .method-GET {
            background: var(--get);
        }

        .method-POST {
            background: var(--post);
        }

        .method-PUT,
        .method-PATCH {
            background: var(--put);
        }

        .method-DELETE {
            background: var(--delete);
        }

        .method-AUTH {
            background: var(--auth);
        }

        .status-pill {
            margin-left: auto;
            font-size: 10px;
            font-weight: 600;
            background: #fffbeb;
            color: #b45309;
            border: 1px solid #fde68a;
            padding: 1px 7px;
            border-radius: 999px;
        }

        /* ============ MAIN CONTENT ============ */

        .omni_content--main {
            padding: 40px 48px 120px;
            min-width: 0;
            border-right: 1px solid var(--border);
        }

        .omni_content--main-heading {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
        }

        .omni_content--main-heading h2 {
            font-size: 26px;
            font-weight: 700;
            margin: 0 0 10px;
            letter-spacing: -.01em;
        }

        .authorize-btn {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1px solid #a7f3d0;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 13px;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background .15s ease, border-color .15s ease;
            white-space: nowrap;
        }

        .authorize-btn:hover {
            background: #d1fae5;
            border-color: var(--accent);
        }

        .authorize-btn svg {
            width: 14px;
            height: 14px;
        }

        .endpoint-meta {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
        }

        .endpoint-path {
            font-size: 13.5px;
            background: var(--bg-soft);
            border: 1px solid var(--border);
            padding: 8px 12px;
            border-radius: 8px;
            color: var(--nav-soft);
            overflow-x: auto;
            white-space: nowrap;
            flex: 1;
            min-width: 0;
        }

        .endpoint-desc {
            font-size: 14.5px;
            line-height: 1.65;
            color: var(--nav-soft);
            margin: 0 0 32px;
            max-width: 62ch;
        }

        .doc-section {
            margin-bottom: 34px;
        }

        .doc-section h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--nav);
            margin: 0 0 14px;
        }

        .doc-empty {
            font-size: 13px;
            color: #94a3b8;
            font-style: italic;
            padding: 10px 0;
        }

        .table-scroll {
            width: 100%;
            overflow-x: auto;
        }

        table.props-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
            min-width: 480px;
        }

        table.props-table th {
            text-align: left;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .03em;
            color: #94a3b8;
            font-weight: 700;
            padding: 6px 10px;
            border-bottom: 1px solid var(--border);
        }

        table.props-table td {
            padding: 10px 10px;
            border-bottom: 1px solid var(--border);
            vertical-align: top;
        }

        table.props-table tr:last-child td {
            border-bottom: none;
        }

        .prop-name {
            font-weight: 600;
            color: var(--nav);
        }

        .prop-required {
            color: var(--delete);
            margin-left: 2px;
        }

        .prop-type {
            color: var(--accent);
            font-size: 12px;
        }

        .prop-desc {
            color: var(--nav-soft);
        }

        pre.code-block {
            background: var(--nav);
            color: #e2e8f0;
            padding: 14px 16px;
            border-radius: var(--radius);
            font-size: 12.5px;
            line-height: 1.6;
            overflow-x: auto;
            margin: 0;
            max-width: 100%;
        }

        .code-panel {
            border-radius: 10px;
            overflow: hidden;
            background: var(--nav);
        }

        .code-panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 14px;
            font-size: 10.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: #94a3b8;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .code-panel-head svg {
            width: 12px;
            height: 12px;
            opacity: .7;
        }

        .code-panel pre.code-block {
            border-radius: 0;
        }

        .tok-str {
            color: #fca5a5;
        }

        .tok-key {
            color: #7dd3fc;
        }

        .tok-flag {
            color: #93c5fd;
        }

        .tok-num {
            color: #fcd34d;
        }

        .tok-punct {
            color: #64748b;
        }

        /* ============ RIGHT PANEL ============ */

        .omni_content--rightside {
            padding: 24px 24px 60px;
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            background: var(--bg-soft);
        }

        .omni_content--rightside h4 {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: #94a3b8;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .rightside-language-btn {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 20px;
        }

        .rightside-language-btn button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 6px;
            width: 56px;
            border: 1px solid var(--border);
            background: #fff;
            border-radius: 10px;
            padding: 10px 4px;
            font-size: 11px;
            font-weight: 600;
            color: var(--nav-soft);
            cursor: pointer;
            transition: all .15s ease;
        }

        .rightside-language-btn button p {
            margin: 0;
        }

        .rightside-language-btn button span svg {
            width: 18px;
            height: 18px;
        }

        .rightside-language-btn button:hover {
            border-color: #cbd5e1;
            color: var(--nav);
        }

        .rightside-language-btn button.active {
            background: #fff;
            border-color: var(--nav);
            color: var(--nav);
            box-shadow: 0 0 0 1px var(--nav);
        }

        .rightside-request,
        .right-response {
            margin-bottom: 20px;
        }

        .rightside-request h5,
        .right-response h5 {
            font-size: 12px;
            font-weight: 700;
            color: var(--nav-soft);
            margin: 0 0 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .status-code {
            font-size: 11px;
            background: var(--accent-soft);
            color: var(--accent);
            padding: 1px 7px;
            border-radius: 4px;
            font-weight: 700;
        }

        .code-panel-scroll {
            max-height: 420px;
            overflow: auto;
        }

        /* ============ SEARCH MODAL ============ */

        .search-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(2px);
            display: none;
            align-items: flex-start;
            justify-content: center;
            padding-top: 10vh;
            z-index: 1000;
            opacity: 0;
            transition: opacity .15s ease;
        }

        .search-overlay.open {
            display: flex;
            opacity: 1;
        }

        .search-modal {
            width: 100%;
            max-width: 560px;
            max-height: 70vh;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, .25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transform: scale(.97) translateY(-6px);
            transition: transform .15s ease;
            margin: 0 16px;
        }

        .search-overlay.open .search-modal {
            transform: scale(1) translateY(0);
        }

        .search-modal-head {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
        }

        .search-modal-head svg {
            width: 17px;
            height: 17px;
            opacity: .45;
            flex-shrink: 0;
        }

        .search-modal-head input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 15px;
            color: var(--nav);
        }

        .search-modal-close {
            border: none;
            background: var(--bg-soft);
            width: 24px;
            height: 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            color: var(--nav-soft);
            flex-shrink: 0;
        }

        .search-modal-results {
            overflow-y: auto;
            padding: 6px;
            flex: 1;
        }

        .search-result-item {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 10px;
            text-align: left;
            border: none;
            background: transparent;
            padding: 9px 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .search-result-item:hover,
        .search-result-item.selected {
            background: var(--bg-soft);
        }

        .search-result-text {
            min-width: 0;
        }

        .search-result-title {
            font-size: 13.5px;
            font-weight: 600;
            color: var(--nav);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .search-result-cat {
            font-size: 11.5px;
            color: #94a3b8;
        }

        .search-empty {
            text-align: center;
            color: #94a3b8;
            font-size: 13px;
            padding: 40px 0;
        }

        .search-modal-foot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 16px;
            border-top: 1px solid var(--border);
            font-size: 11.5px;
            color: #94a3b8;
        }

        .search-modal-foot kbd {
            background: var(--bg-soft);
            border: 1px solid var(--border);
            border-radius: 4px;
            padding: 1px 5px;
            margin-left: 4px;
        }

        /* ============ MOBILE / TABLET TOPBAR + DRAWER ============ */

        .mobile-topbar {
            display: none;
        }

        .sidebar-backdrop {
            display: none;
        }

        .sidebar-drawer-head {
            display: none;
        }

        /* ============ RESPONSIVE ============ */

        @media (max-width: 1180px) and (min-width: 1025px) {
            .omni_content {
                grid-template-columns: 240px minmax(0, 1fr) 320px;
            }
        }

        @media (max-width: 1024px) {
            .omni_content {
                grid-template-columns: 1fr;
            }

            .mobile-topbar {
                display: flex;
                align-items: center;
                gap: 12px;
                position: sticky;
                top: 0;
                z-index: 900;
                background: #fff;
                border-bottom: 1px solid var(--border);
                padding: 12px 16px;
            }

            .hamburger-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
                border: 1px solid var(--border);
                background: var(--bg-soft);
                border-radius: 8px;
                cursor: pointer;
                flex-shrink: 0;
                color: var(--nav);
                transition: background .15s ease, border-color .15s ease;
            }

            .hamburger-btn:hover {
                background: #fff;
                border-color: #cbd5e1;
            }

            .hamburger-btn svg {
                width: 18px;
                height: 18px;
            }

            .mobile-topbar-title {
                font-size: 14px;
                font-weight: 700;
                color: var(--nav);
            }

            .omni_content--leftside {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 280px;
                max-width: 84vw;
                background: #fff;
                border-right: 1px solid var(--border);
                transform: translateX(-100%);
                transition: transform .25s ease;
                z-index: 1100;
                box-shadow: 8px 0 24px rgba(15, 23, 42, .12);
            }

            .omni_content--leftside.mobile-open {
                transform: translateX(0);
            }

            .sidebar-drawer-head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 14px;
                padding: 0 2px;
            }

            .sidebar-drawer-head span {
                font-size: 13px;
                font-weight: 700;
                color: var(--nav);
            }

            .sidebar-close-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 28px;
                height: 28px;
                border: none;
                background: var(--bg-soft);
                border-radius: 6px;
                cursor: pointer;
                color: var(--nav-soft);
            }

            .sidebar-close-btn svg {
                width: 15px;
                height: 15px;
            }

            .sidebar-backdrop {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(15, 23, 42, .45);
                z-index: 1050;
                opacity: 0;
                transition: opacity .2s ease;
            }

            .sidebar-backdrop.open {
                display: block;
                opacity: 1;
            }

            .omni_content--main {
                border-right: none;
                padding: 24px 20px 80px;
            }

            .omni_content--rightside {
                position: static;
                height: auto;
                border-top: 1px solid var(--border);
            }
        }

        @media (max-width: 560px) {
            .search-modal {
                max-height: 80vh;
                margin: 0 10px;
            }

            .search-modal-head input {
                font-size: 14px;
            }
        }
    </style>

    <section class="omni">
        <div class="mobile-topbar">
            <button class="hamburger-btn" id="hamburgerBtn" type="button" aria-label="Open menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <span class="mobile-topbar-title">API Reference</span>
        </div>
        <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

        <div class="omni_content">
            <div class="omni_content--leftside" id="sidebarContainer">
                <div class="sidebar-drawer-head">
                    <span>Menu</span>
                    <button class="sidebar-close-btn" id="sidebarCloseBtn" type="button" aria-label="Close menu">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <button class="omni_content--input" id="searchOpenBtn" type="button">
                    <span>
                        <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.156 29.961l-0.709 0.709c-0.785 0.784-2.055 0.784-2.838 0l-5.676-5.674c-0.656-0.658-0.729-1.644-0.281-2.412l-3.104-3.102c-1.669 1.238-3.728 1.979-5.965 1.979-5.54 0-10.031-4.491-10.031-10.031s4.491-10.032 10.031-10.032c5.541 0 10.031 4.491 10.031 10.032 0 2.579-0.98 4.923-2.58 6.7l3.035 3.035c0.768-0.447 1.754-0.375 2.41 0.283l5.676 5.674c0.784 0.785 0.784 2.056 0.001 2.839zM18.088 11.389c0-4.155-3.369-7.523-7.524-7.523s-7.524 3.367-7.524 7.523 3.368 7.523 7.523 7.523 7.525-3.368 7.525-7.523z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search endpoints, categories..." tabindex="-1">
                    <span class="kbd-hint">/</span>
                </button>

                <div id="sidebarGroups"><!-- rendered by renderSidebar() --></div>
            </div>

            <div class="omni_content--main" id="mainContent">
                <div class="omni_content--main-heading">
                    <h2 id="endpointTitle"></h2>
                    <button class="authorize-btn" id="authorizeBtn" type="button">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="7.5" cy="15.5" r="5.5"></circle>
                            <path d="m21 2-9.6 9.6"></path>
                            <path d="m15.5 7.5 3 3L22 7l-3-3"></path>
                        </svg>
                        <span>Authorize</span>
                    </button>
                </div>
                <div class="endpoint-meta" id="endpointMeta"></div>
                <p class="endpoint-desc" id="endpointDesc"></p>

                <div class="doc-section">
                    <h3>Headers</h3>
                    <div id="headersSection"></div>
                </div>

                <div class="doc-section">
                    <h3>Request Body</h3>
                    <div id="bodySection"></div>
                </div>

                <div class="doc-section">
                    <h3>Response</h3>
                    <div id="responseMainSection"></div>
                </div>
            </div>

            <div class="omni_content--rightside">
                <h4>Language</h4>
                <div class="rightside-language-btn" id="languageButtons"><!-- rendered by renderLanguageButtons() --></div>

                <div class="rightside-request">
                    <div class="code-panel">
                        <div class="code-panel-head">
                            <span id="requestPanelLabel">SHELL REQUEST</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                        <div class="code-panel-scroll">
                            <pre class="code-block" id="requestCode"></pre>
                        </div>
                    </div>
                </div>

                <div class="right-response">
                    <div class="code-panel">
                        <div class="code-panel-head">
                            <span>RESPONSE</span>
                            <span class="status-code" id="responseStatus">200 OK</span>
                        </div>
                        <div class="code-panel-scroll">
                            <pre class="code-block" id="responseCode"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ SEARCH MODAL ============ -->
        <div class="search-overlay" id="searchOverlay">
            <div class="search-modal">
                <div class="search-modal-head">
                    <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.156 29.961l-0.709 0.709c-0.785 0.784-2.055 0.784-2.838 0l-5.676-5.674c-0.656-0.658-0.729-1.644-0.281-2.412l-3.104-3.102c-1.669 1.238-3.728 1.979-5.965 1.979-5.54 0-10.031-4.491-10.031-10.031s4.491-10.032 10.031-10.032c5.541 0 10.031 4.491 10.031 10.032 0 2.579-0.98 4.923-2.58 6.7l3.035 3.035c0.768-0.447 1.754-0.375 2.41 0.283l5.676 5.674c0.784 0.785 0.784 2.056 0.001 2.839zM18.088 11.389c0-4.155-3.369-7.523-7.524-7.523s-7.524 3.367-7.524 7.523 3.368 7.523 7.523 7.523 7.525-3.368 7.525-7.523z"></path>
                    </svg>
                    <input type="text" id="searchInput" placeholder="Search endpoints, categories...">
                    <button class="search-modal-close" id="searchCloseBtn" type="button">&times;</button>
                </div>
                <div class="search-modal-results" id="searchResults"></div>
                <div class="search-modal-foot">
                    <span>Start typing to filter results</span>
                    <span><kbd>ESC</kbd> to close</span>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            "use strict";

            /* =========================================================
               1. DATA — single source of truth for the whole doc page
               ========================================================= */
            const BASE_URL = "https://omni.icpaas.ai";

            const apiData = {
                categories: [{
                        name: "Getting Started",
                        endpoints: [{
                            id: "authentication",
                            title: "Authentication",
                            method: "AUTH",
                            path: "",
                            description: "Learn how to authenticate API requests.",
                            status: "Not Set"
                        }]
                    },
                    {
                        name: "Balance",
                        endpoints: [{
                            id: "wallet-balance",
                            title: "Get Wallet Balance",
                            method: "GET",
                            path: "/api/v1/balance",
                            description: "Returns the current wallet balance for the authenticated account.",
                            headers: [{
                                name: "Authorization",
                                type: "string",
                                required: true,
                                description: "Bearer token"
                            }],
                            response: {
                                balance: 1520.75,
                                currency: "INR"
                            },
                            languages: {
                                shell: "curl -X GET https://api.example.com/api/v1/balance \\\n  -H \"Authorization: Bearer YOUR_API_KEY\"",
                                node: "const res = await fetch('https://api.example.com/api/v1/balance', {\n  headers: { Authorization: 'Bearer YOUR_API_KEY' }\n});\nconst data = await res.json();",
                                ruby: "require 'net/http'\nuri = URI('https://api.example.com/api/v1/balance')\nreq = Net::HTTP::Get.new(uri)\nreq['Authorization'] = 'Bearer YOUR_API_KEY'",
                                php: "$ch = curl_init('https://api.example.com/api/v1/balance');\ncurl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer YOUR_API_KEY']);\ncurl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\n$response = curl_exec($ch);",
                                python: "import requests\nres = requests.get(\n    'https://api.example.com/api/v1/balance',\n    headers={'Authorization': 'Bearer YOUR_API_KEY'}\n)"
                            }
                        }]
                    },
                    {
                        name: "Sms API's",
                        endpoints: [{
                                id: "sms-manytomany",
                                title: "POST /api/v1/sms/manytomany",
                                method: "POST",
                                path: "/api/v1/sms/manytomany",
                                description: "Send an SMS to multiple recipients."
                            },
                            {
                                id: "sms-createtemplate",
                                title: "POST /api/v1/sms/createtemplate",
                                method: "POST",
                                path: "/api/v1/sms/createtemplate",
                                description: "Create a reusable SMS template."
                            },
                            {
                                id: "sms-gettemplate",
                                title: "GET /api/v1/sms/getTemplate",
                                method: "GET",
                                path: "/api/v1/sms/getTemplate",
                                description: "Retrieve an existing SMS template."
                            },
                            {
                                id: "sms-createsenderid",
                                title: "POST /api/v1/sms/createsenderid",
                                method: "POST",
                                path: "/api/v1/sms/createsenderid",
                                description: "Register a new SMS sender ID."
                            },
                            {
                                id: "sms-sendsms",
                                title: "GET /api/v1/sms/sendsms",
                                method: "GET",
                                path: "/api/v1/sms/sendsms",
                                description: "Send a single SMS."
                            },
                            {
                                id: "sms-getsenderids",
                                title: "GET /api/v1/sms/getSenderIds",
                                method: "GET",
                                path: "/api/v1/sms/getSenderIds",
                                description: "List all registered sender IDs."
                            },
                            {
                                id: "sms-report",
                                title: "GET /api/v1/sms/report",
                                method: "GET",
                                path: "/api/v1/sms/report",
                                description: "Fetch SMS delivery reports."
                            },
                            {
                                id: "sms-send-a-sms",
                                title: "Send a SMS",
                                method: "POST",
                                path: "/api/v1/sms/sendsms",
                                description: "Sends an SMS through the SMS API.",
                                headers: [{
                                        name: "Content-Type",
                                        type: "string",
                                        required: true,
                                        description: "Content type of the request"
                                    },
                                    {
                                        name: "Authorization",
                                        type: "string",
                                        required: true,
                                        description: "Bearer token"
                                    }
                                ],
                                body: {
                                    senderid: "string",
                                    destination: "string",
                                    message: "string"
                                },
                                languages: {
                                    shell: "curl -X POST https://api.example.com/api/v1/sms/sendsms \\\n  -H \"Content-Type: application/json\" \\\n  -H \"Authorization: Bearer YOUR_API_KEY\" \\\n  -d '{\"senderid\":\"BRAND\",\"destination\":\"91XXXXXXXXXX\",\"message\":\"Hello\"}'",
                                    node: "const res = await fetch('https://api.example.com/api/v1/sms/sendsms', {\n  method: 'POST',\n  headers: {\n    'Content-Type': 'application/json',\n    Authorization: 'Bearer YOUR_API_KEY'\n  },\n  body: JSON.stringify({ senderid: 'BRAND', destination: '91XXXXXXXXXX', message: 'Hello' })\n});",
                                    ruby: "uri = URI('https://api.example.com/api/v1/sms/sendsms')\nreq = Net::HTTP::Post.new(uri, 'Content-Type' => 'application/json')\nreq['Authorization'] = 'Bearer YOUR_API_KEY'\nreq.body = { senderid: 'BRAND', destination: '91XXXXXXXXXX', message: 'Hello' }.to_json",
                                    php: "$data = ['senderid' => 'BRAND', 'destination' => '91XXXXXXXXXX', 'message' => 'Hello'];\n$ch = curl_init('https://api.example.com/api/v1/sms/sendsms');\ncurl_setopt($ch, CURLOPT_POST, true);\ncurl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));",
                                    python: "import requests\nrequests.post(\n    'https://api.example.com/api/v1/sms/sendsms',\n    json={'senderid': 'BRAND', 'destination': '91XXXXXXXXXX', 'message': 'Hello'},\n    headers={'Authorization': 'Bearer YOUR_API_KEY'}\n)"
                                }
                            },
                            {
                                id: "sms-send-mt-sms",
                                title: "Send MT SMS",
                                method: "POST",
                                path: "",
                                description: "Sends a mobile-terminated SMS."
                            },
                            {
                                id: "sms-moengage-integration",
                                title: "MoEngage SMS Integration",
                                method: "POST",
                                path: "",
                                description: "Integrate SMS delivery with MoEngage campaigns."
                            }
                        ]
                    },
                    {
                        name: "User API's",
                        endpoints: [{
                            id: "user-balance",
                            title: "GET /api/v1/user/balance",
                            method: "GET",
                            path: "/api/v1/user/balance",
                            description: "Returns balance details for the current user."
                        }]
                    },
                    {
                        name: "Send Message",
                        endpoints: [{
                            id: "send-rcs-message",
                            title: "Send RCS message",
                            method: "POST",
                            path: "/api/v1/Rcs/sendmessage",
                            description: "Sends an RCS message through the RCS API.",
                            headers: [{
                                    name: "Content-Type",
                                    type: "string",
                                    required: true,
                                    description: "Content type of the request"
                                },
                                {
                                    name: "Authorization",
                                    type: "string",
                                    required: true,
                                    description: "Bearer token"
                                }
                            ],
                            body: {
                                botid: "string",
                                templatename: "string",
                                destination: ["string"],
                                var: {
                                    key1: "value1"
                                }
                            },
                            response: {
                                status: "success",
                                messageid: "string"
                            },
                            languages: {
                                shell: "curl -X POST https://api.example.com/api/v1/Rcs/sendmessage \\\n  -H \"Content-Type: application/json\" \\\n  -H \"Authorization: Bearer YOUR_API_KEY\" \\\n  -d '{\"botid\":\"string\",\"templatename\":\"string\",\"destination\":[\"string\"],\"var\":{\"key1\":\"value1\"}}'",
                                node: "const res = await fetch('https://api.example.com/api/v1/Rcs/sendmessage', {\n  method: 'POST',\n  headers: {\n    'Content-Type': 'application/json',\n    Authorization: 'Bearer YOUR_API_KEY'\n  },\n  body: JSON.stringify({\n    botid: 'string',\n    templatename: 'string',\n    destination: ['string'],\n    var: { key1: 'value1' }\n  })\n});",
                                ruby: "uri = URI('https://api.example.com/api/v1/Rcs/sendmessage')\nreq = Net::HTTP::Post.new(uri, 'Content-Type' => 'application/json')\nreq['Authorization'] = 'Bearer YOUR_API_KEY'\nreq.body = {\n  botid: 'string',\n  templatename: 'string',\n  destination: ['string'],\n  var: { key1: 'value1' }\n}.to_json",
                                php: "$data = [\n    'botid' => 'string',\n    'templatename' => 'string',\n    'destination' => ['string'],\n    'var' => ['key1' => 'value1']\n];\n$ch = curl_init('https://api.example.com/api/v1/Rcs/sendmessage');\ncurl_setopt($ch, CURLOPT_POST, true);\ncurl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));",
                                python: "import requests\nrequests.post(\n    'https://api.example.com/api/v1/Rcs/sendmessage',\n    json={\n        'botid': 'string',\n        'templatename': 'string',\n        'destination': ['string'],\n        'var': {'key1': 'value1'}\n    },\n    headers={'Authorization': 'Bearer YOUR_API_KEY'}\n)"
                            }
                        }]
                    },
                    {
                        name: "Template API's",
                        endpoints: [{
                                id: "template-create-rcs",
                                title: "Create RCS Template",
                                method: "POST",
                                path: "",
                                description: "Creates a new RCS message template."
                            },
                            {
                                id: "template-delete-rcs",
                                title: "Delete Template",
                                method: "POST",
                                path: "",
                                description: "Deletes an existing RCS template."
                            },
                            {
                                id: "template-get-rcs",
                                title: "Get Template",
                                method: "GET",
                                path: "",
                                description: "Retrieves an RCS template by name or ID."
                            },
                            {
                                id: "template-get-agent",
                                title: "Get AgentID and AgentName",
                                method: "GET",
                                path: "",
                                description: "Retrieves the agent ID and agent name associated with the account."
                            }
                        ]
                    },
                    {
                        name: "RCS API's",
                        endpoints: [{
                            id: "rcs-send-message",
                            title: "Send a RCS message",
                            method: "POST",
                            path: "/api/v1/Rcs/sendmessage",
                            description: "Sends an RCS message through the RCS API."
                        }]
                    },
                    {
                        name: "WhatsApp API",
                        endpoints: [{
                                id: "wa-webhook",
                                title: "Webhook",
                                method: "POST",
                                path: "",
                                description: "Receives inbound WhatsApp delivery and status events."
                            },
                            {
                                id: "wa-get-templates",
                                title: "Get Templates",
                                method: "GET",
                                path: "",
                                description: "Lists all WhatsApp message templates."
                            },
                            {
                                id: "wa-create-template",
                                title: "Create Template",
                                method: "POST",
                                path: "",
                                description: "Creates a new WhatsApp message template."
                            },
                            {
                                id: "wa-delete-template",
                                title: "Delete Template",
                                method: "DELETE",
                                path: "",
                                description: "Deletes an existing WhatsApp message template."
                            },
                            {
                                id: "wa-get-template-media",
                                title: "Get Template or Media By ID",
                                method: "GET",
                                path: "",
                                description: "Retrieves a template or media asset by its ID."
                            },
                            {
                                id: "wa-edit-template",
                                title: "Edit Template",
                                method: "POST",
                                path: "",
                                description: "Edits an existing WhatsApp message template."
                            },
                            {
                                id: "wa-send-message",
                                title: "Send WhatsApp Message",
                                method: "POST",
                                path: "",
                                description: "Sends a WhatsApp message to a recipient."
                            },
                            {
                                id: "wa-get-channels",
                                title: "Get Channels",
                                method: "GET",
                                path: "",
                                description: "Lists WhatsApp business channels connected to the account."
                            }
                        ]
                    },
                    {
                        name: "WhatsApp Media API",
                        endpoints: [{
                            id: "wa-media-upload",
                            title: "Upload WhatsApp Media",
                            method: "POST",
                            path: "",
                            description: "Uploads a media asset for use in WhatsApp messages."
                        }]
                    },
                    {
                        name: "Voice API's",
                        endpoints: [{
                                id: "voice-outbound-call",
                                title: "Make a new outbound voice call",
                                method: "POST",
                                path: "",
                                description: "Initiates a new outbound voice call."
                            },
                            {
                                id: "voice-upload-file",
                                title: "Upload Voice File",
                                method: "POST",
                                path: "",
                                description: "Uploads an audio file for use in voice calls."
                            },
                            {
                                id: "voice-upload-status",
                                title: "Get Uploaded Voice File Status",
                                method: "GET",
                                path: "",
                                description: "Checks the processing status of an uploaded voice file."
                            },
                            {
                                id: "voice-delivery-report",
                                title: "Get voice delivery report",
                                method: "POST",
                                path: "",
                                description: "Retrieves the delivery report for a voice call."
                            },
                            {
                                id: "voice-send-message",
                                title: "Send a voice message",
                                method: "POST",
                                path: "",
                                description: "Sends a pre-recorded voice message."
                            }
                        ]
                    },
                    {
                        name: "Ivr API's",
                        endpoints: [{
                            id: "ivr-getivrreports",
                            title: "POST /api/v1/Ivr/Inbound/getivrreports",
                            method: "POST",
                            path: "/api/v1/Ivr/Inbound/getivrreports",
                            description: "Fetches inbound IVR call reports."
                        }]
                    },
                    {
                        name: "Tts API's",
                        endpoints: [{
                                id: "tts-outbound-call",
                                title: "Make a new outbound voice call",
                                method: "POST",
                                path: "",
                                description: "Initiates a new outbound text-to-speech call."
                            },
                            {
                                id: "tts-send",
                                title: "Send a text to speech",
                                method: "POST",
                                path: "",
                                description: "Converts text to speech and delivers it as a call."
                            }
                        ]
                    },
                    {
                        name: "Ctc API's",
                        endpoints: [{
                                id: "ctc-outbound-call",
                                title: "Make a new outbound CTC call",
                                method: "POST",
                                path: "",
                                description: "Initiates a new outbound click-to-call session."
                            },
                            {
                                id: "ctc-click-to-call",
                                title: "Send a click to call",
                                method: "POST",
                                path: "",
                                description: "Triggers a click-to-call connection between two numbers."
                            }
                        ]
                    },
                    {
                        name: "WhatsApp API's",
                        endpoints: [{
                            id: "wa2-get-templates",
                            title: "Get Templates",
                            method: "GET",
                            path: "",
                            description: "Lists WhatsApp templates available under this integration."
                        }]
                    },
                    {
                        name: "Moengage/Meta API's Templates",
                        endpoints: [{
                                id: "meta-get-templates",
                                title: "Get templates",
                                method: "GET",
                                path: "",
                                description: "Lists Meta/MoEngage-synced templates."
                            },
                            {
                                id: "meta-get-template-by-id",
                                title: "GET /api/v1/meta/templates/{templateId}",
                                method: "GET",
                                path: "/api/v1/meta/templates/{templateId}",
                                description: "Retrieves a single Meta template by its ID."
                            },
                            {
                                id: "meta-sync-templates",
                                title: "POST /api/v1/meta/templates/sync",
                                method: "POST",
                                path: "/api/v1/meta/templates/sync",
                                description: "Syncs templates from Meta into the platform."
                            }
                        ]
                    },
                    {
                        name: "Moengage API's - Whatsapp",
                        endpoints: [{
                                id: "moengage-wa",
                                title: "POST /api/v1/meta/moengage",
                                method: "POST",
                                path: "/api/v1/meta/moengage",
                                description: "Sends a WhatsApp message triggered from MoEngage."
                            },
                            {
                                id: "webengage-wa",
                                title: "POST /api/v1/meta/webengage",
                                method: "POST",
                                path: "/api/v1/meta/webengage",
                                description: "Sends a WhatsApp message triggered from WebEngage."
                            }
                        ]
                    },
                    {
                        name: "CleverTap API's - Whatsapp",
                        endpoints: [{
                            id: "clevertap-wa",
                            title: "POST /api/v1/meta/clevertap",
                            method: "POST",
                            path: "/api/v1/meta/clevertap",
                            description: "Sends a WhatsApp message triggered from CleverTap."
                        }]
                    }
                ]
            };

            const LANGUAGES = [{
                    key: "shell",
                    label: "Shell"
                },
                {
                    key: "node",
                    label: "Node Js"
                },
                {
                    key: "ruby",
                    label: "Ruby"
                },
                {
                    key: "php",
                    label: "PHP"
                },
                {
                    key: "python",
                    label: "Python"
                }
            ];

            /* =========================================================
               2. STATE
               ========================================================= */
            let currentEndpointId = null;
            let currentLanguage = "shell";

            /* =========================================================
               3. HELPERS
               ========================================================= */
            function escapeHtml(str) {
                return String(str).replace(/[&<>"']/g, (c) => ({
                    "&": "&amp;",
                    "<": "&lt;",
                    ">": "&gt;",
                    '"': "&quot;",
                    "'": "&#39;"
                } [c]));
            }

            function fuzzyMatch(text, search) {
                let si = 0;
                text = String(text).toLowerCase();
                search = String(search).toLowerCase();
                for (let i = 0; i < text.length; i++) {
                    if (text[i] === search[si]) si++;
                    if (si === search.length) return true;
                }
                return si === search.length;
            }

            function flattenEndpoints() {
                const out = [];
                apiData.categories.forEach((cat) => {
                    cat.endpoints.forEach((ep) => out.push({
                        ...ep,
                        category: cat.name
                    }));
                });
                return out;
            }

            function findEndpoint(id) {
                return flattenEndpoints().find((ep) => ep.id === id) || null;
            }

            function methodClass(method) {
                const m = (method || "").toUpperCase();
                if (m.startsWith("GET")) return "method-GET";
                if (m.startsWith("POST")) return "method-POST";
                if (m.startsWith("PUT") || m.startsWith("PATCH")) return "method-PUT";
                if (m.startsWith("DEL")) return "method-DELETE";
                return "method-AUTH";
            }

            function methodBadgeText(method) {
                const m = (method || "").toUpperCase();
                if (m === "AUTH") return "AUTH";
                return m.slice(0, 3);
            }

            /* =========================================================
               4. JSON -> HTML renderer (handles nested objects/arrays)
               ========================================================= */
            function jsonToPretty(value) {
                return JSON.stringify(value, null, 2);
            }

            // Lightweight token highlighter for request/response code panels.
            // Tokenizes the RAW (unescaped) string first, escaping each piece as it's
            // emitted, so HTML entities never collide with the matching logic.
            function highlightCode(code) {
                const pattern = /("(?:[^"\\]|\\.)*"|'(?:[^'\\]|\\.)*')(\s*:)?|(--[a-zA-Z-]+|(?:^|\s)-[a-zA-Z])|\b(\d+(?:\.\d+)?)\b/g;
                let result = "";
                let lastIndex = 0;
                let m;
                while ((m = pattern.exec(code)) !== null) {
                    result += escapeHtml(code.slice(lastIndex, m.index));
                    if (m[1]) {
                        result += m[2] ?
                            `<span class="tok-key">${escapeHtml(m[1])}</span>${escapeHtml(m[2])}` :
                            `<span class="tok-str">${escapeHtml(m[1])}</span>`;
                    } else if (m[3]) {
                        result += `<span class="tok-flag">${escapeHtml(m[3])}</span>`;
                    } else if (m[4]) {
                        result += `<span class="tok-num">${escapeHtml(m[4])}</span>`;
                    }
                    lastIndex = pattern.lastIndex;
                }
                result += escapeHtml(code.slice(lastIndex));
                return result;
            }

            /* =========================================================
               5. SIDEBAR
               ========================================================= */
            function renderSidebar() {
                const container = document.getElementById("sidebarGroups");
                container.innerHTML = "";

                apiData.categories.forEach((cat, catIndex) => {
                    const group = document.createElement("div");
                    group.className = "sidebar-group";
                    group.dataset.category = cat.name;

                    const head = document.createElement("button");
                    head.type = "button";
                    head.className = "sidebar-group-head";
                    head.innerHTML = `<span>${escapeHtml(cat.name)}</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>`;
                    head.addEventListener("click", () => group.classList.toggle("collapsed"));

                    const items = document.createElement("div");
                    items.className = "sidebar-group-items";

                    cat.endpoints.forEach((ep) => {
                        const btn = document.createElement("button");
                        btn.type = "button";
                        btn.className = "sidebar-endpoint";
                        btn.dataset.endpointId = ep.id;

                        const isAuth = ep.method === "AUTH";
                        btn.innerHTML = `
                    <span class="method-badge ${methodClass(ep.method)}">${escapeHtml(methodBadgeText(ep.method))}</span>
                    <span class="truncate" title="${escapeHtml(ep.title)}">${escapeHtml(ep.title)}</span>
                    ${isAuth && ep.status ? `<span class="status-pill">${escapeHtml(ep.status)}</span>` : ""}
                `;
                        btn.addEventListener("click", () => loadEndpoint(ep.id));
                        items.appendChild(btn);
                    });

                    group.appendChild(head);
                    group.appendChild(items);
                    container.appendChild(group);

                    if (catIndex === 0) {
                        const eyebrow = document.createElement("div");
                        eyebrow.className = "sidebar-eyebrow";
                        eyebrow.textContent = "API Endpoints";
                        container.appendChild(eyebrow);
                    }
                });

                updateActiveSidebarItem();
            }

            function updateActiveSidebarItem() {
                document.querySelectorAll(".sidebar-endpoint").forEach((btn) => {
                    btn.classList.toggle("active", btn.dataset.endpointId === currentEndpointId);
                });
            }

            /* =========================================================
               6. MAIN CONTENT RENDERERS
               ========================================================= */
            function renderHeaders(headers) {
                const el = document.getElementById("headersSection");
                if (!headers || headers.length === 0) {
                    el.innerHTML = `<div class="doc-empty">No headers required for this endpoint.</div>`;
                    return;
                }
                const rows = headers.map((h) => `
            <tr>
                <td class="prop-name">${escapeHtml(h.name)}${h.required ? '<span class="prop-required">*</span>' : ""}</td>
                <td class="prop-type">${escapeHtml(h.type || "string")}</td>
                <td class="prop-desc">${escapeHtml(h.description || "")}</td>
            </tr>`).join("");
                el.innerHTML = `
            <div class="table-scroll">
                <table class="props-table">
                    <thead><tr><th>Property</th><th>Type</th><th>Description</th></tr></thead>
                    <tbody>${rows}</tbody>
                </table>
            </div>`;
            }

            function renderBody(body) {
                const el = document.getElementById("bodySection");
                if (body === undefined || body === null) {
                    el.innerHTML = `<div class="doc-empty">This endpoint does not accept a request body.</div>`;
                    return;
                }
                el.innerHTML = `<pre class="code-block">${escapeHtml(jsonToPretty(body))}</pre>`;
            }

            function renderResponseMain(response) {
                const el = document.getElementById("responseMainSection");
                if (response === undefined || response === null) {
                    el.innerHTML = `<div class="doc-empty">No sample response has been documented yet.</div>`;
                    return;
                }
                el.innerHTML = `<pre class="code-block">${escapeHtml(jsonToPretty(response))}</pre>`;
            }

            function renderLanguageButtons() {
                const iconMap = {
                    shell: `<svg width="13" height="13" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.792725 12.2929L5.08562 8.00002L0.792725 3.70712L2.20694 2.29291L7.91405 8.00002L2.20694 13.7071L0.792725 12.2929Z" fill="currentColor"></path><path d="M7.00006 15H15.0001V13H7.00006V15Z" fill="currentColor"></path></svg>`,
                    node: `<svg fill="#000000" width="64px" height="64px" viewBox="-1.5 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m10.639 24c-.001 0-.002 0-.003 0-.339 0-.656-.091-.928-.251l.009.005-2.937-1.737c-.438-.246-.224-.332-.08-.383.506-.159.946-.365 1.352-.618l-.024.014c.028-.013.06-.02.094-.02.046 0 .089.014.125.038l-.001-.001 2.256 1.339c.039.021.086.034.136.034s.097-.013.138-.035l-.002.001 8.794-5.077c.081-.05.134-.138.134-.238 0-.001 0-.001 0-.002v-10.147c-.001-.101-.055-.19-.136-.239l-.001-.001-8.791-5.072c-.039-.022-.086-.035-.135-.035s-.096.013-.137.036l.001-.001-8.789 5.073c-.083.049-.138.138-.139.24v10.149c0 .101.055.188.137.234l.001.001 2.41 1.392c1.307.654 2.107-.116 2.107-.889v-10.022c0-.14.114-.254.254-.254h.003 1.115.001c.14 0 .254.113.254.254v10.022c0 1.745-.95 2.746-2.604 2.746-.02 0-.043.001-.066.001-.725 0-1.402-.205-1.976-.56l-2.29-1.318c-.556-.328-.922-.923-.922-1.605v-10.151c.001-.68.368-1.273.914-1.595l.009-.005 8.795-5.082c.267-.149.585-.236.924-.236s.658.088.934.241l-.01-.005 8.794 5.082c.555.327.921.92.923 1.6v10.15c-.001.681-.368 1.276-.915 1.6l-.009.005-8.792 5.078c-.264.155-.582.246-.922.246-.002 0-.005 0-.007 0z"></path><path d="m13.356 17.009c-3.848 0-4.655-1.766-4.655-3.249v-.001c0-.14.113-.253.253-.253h.002 1.137.001c.127 0 .232.093.252.214v.001c.171 1.158.683 1.742 3.01 1.742 1.853 0 2.64-.419 2.64-1.402 0-.567-.223-.987-3.102-1.269-2.406-.24-3.894-.77-3.894-2.695 0-1.774 1.496-2.833 4-2.833 2.818 0 4.212.978 4.388 3.076.001.007.001.015.001.022 0 .141-.114.254-.254.254h-1.133c-.12 0-.221-.085-.246-.198v-.002c-.274-1.218-.94-1.607-2.746-1.607-2.023 0-2.258.705-2.258 1.232 0 .64.278.826 3.009 1.187 2.702.358 3.986.863 3.986 2.762-.004 1.919-1.601 3.017-4.388 3.017z"></path></g></svg>`,
                    ruby: `<svg fill="#000000" width="64px" height="64px" viewBox="-1.5 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m6.28 7.906-.014-.014-2.96 2.96 7.186 7.174 2.96-2.946 4.226-4.226-2.96-2.96v-.014h-8.452z"></path><path d="m10.466 0-10.466 6v12l10.466 6 10.466-6v-12zm8.466 16.854-8.466 4.88-8.466-4.88v-9.734l8.466-4.88 8.466 4.88z"></path></g></svg>`,
                    php: `<svg fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="5151e0c8492e5103c096af88a51e39be"> <path display="inline" d="M171.844,204.374c-11.137-12.748-28.856-19.123-53.146-19.123H37.96L0.5,377.99h41.984l9.96-51.241 h35.963c15.869,0,28.923-1.663,39.173-5.003c10.247-3.33,19.562-8.92,27.945-16.767c7.037-6.467,12.725-13.599,17.087-21.4 c4.354-7.797,7.448-16.401,9.278-25.812C186.333,234.919,182.98,217.124,171.844,204.374z M138.493,254.823 c-2.903,14.917-8.492,25.563-16.775,31.941c-8.288,6.38-20.897,9.569-37.822,9.569H58.354l15.678-80.667H102.8 c15.952,0,26.582,2.943,31.896,8.832C140.006,230.39,141.275,240.497,138.493,254.823z M337.828,237.059l-17.429,89.69h-42.317 l16.572-85.278c1.884-9.702,1.193-16.32-2.084-19.847c-3.272-3.529-10.242-5.296-20.9-5.296h-33.289l-21.458,110.421h-41.656 l37.46-192.739h41.656l-9.959,51.241h37.111c23.346,0,39.452,4.077,48.317,12.218C338.718,205.615,341.371,218.813,337.828,237.059 z M499.554,204.374c-11.137-12.748-28.856-19.123-53.142-19.123h-80.738l-37.46,192.739h41.984l9.96-51.241h35.963 c15.869,0,28.918-1.663,39.169-5.003c10.247-3.33,19.562-8.92,27.945-16.767c7.036-6.467,12.729-13.599,17.088-21.4 c4.354-7.797,7.447-16.401,9.277-25.812C514.042,234.919,510.694,217.124,499.554,204.374z M466.206,254.823 c-2.902,14.917-8.491,25.563-16.779,31.941c-8.284,6.38-20.896,9.569-37.822,9.569h-25.537l15.678-80.667h28.765 c15.952,0,26.581,2.943,31.899,8.832C467.72,230.39,468.984,240.497,466.206,254.823z"> </path> </g> </g></svg>`,
                    python: `<svg width="64px" height="64px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>python [#127]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7599.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M296.744,7457.45798 C296.262,7457.45798 295.872,7457.06594 295.872,7456.58142 C295.872,7456.0969 296.262,7455.70587 296.744,7455.70587 C297.226,7455.70587 297.616,7456.0969 297.616,7456.58142 C297.616,7457.06594 297.226,7457.45798 296.744,7457.45798 M294.072,7459 C299.15,7459 298.833,7456.78649 298.833,7456.78649 L298.827,7454.49357 L293.982,7454.49357 L293.982,7453.80499 L300.751,7453.80499 C300.751,7453.80499 304,7454.17591 304,7449.02614 C304,7443.87636 301.165,7444.0583 301.165,7444.0583 L299.472,7444.0583 L299.472,7446.44873 C299.472,7446.44873 299.563,7449.29855 296.682,7449.29855 L291.876,7449.29855 C291.876,7449.29855 289.176,7449.25533 289.176,7451.9222 L289.176,7456.33112 C289.176,7456.33112 288.766,7459 294.072,7459 M291.257,7440.54202 C291.739,7440.54202 292.128,7440.93406 292.128,7441.41858 C292.128,7441.9031 291.739,7442.29413 291.257,7442.29413 C290.775,7442.29413 290.385,7441.9031 290.385,7441.41858 C290.385,7440.93406 290.775,7440.54202 291.257,7440.54202 M293.928,7439 C288.851,7439 289.168,7441.21351 289.168,7441.21351 L289.174,7443.50643 L294.019,7443.50643 L294.019,7444.19501 L287.249,7444.19501 C287.249,7444.19501 284,7443.82409 284,7448.97386 C284,7454.12364 286.836,7453.9417 286.836,7453.9417 L288.528,7453.9417 L288.528,7451.55127 C288.528,7451.55127 288.437,7448.70145 291.319,7448.70145 L296.124,7448.70145 C296.124,7448.70145 298.824,7448.74467 298.824,7446.0778 L298.824,7441.66888 C298.824,7441.66888 299.234,7439 293.928,7439" id="python-[#127]"> </path> </g> </g> </g> </g></svg>`
                };

                const container = document.getElementById("languageButtons");
                container.innerHTML = LANGUAGES.map((lang) => `
            <button type="button" data-lang="${lang.key}" class="${lang.key === currentLanguage ? "active" : ""}">
                <span>${iconMap[lang.key] || ""}</span>
                <p>${escapeHtml(lang.label)}</p>
            </button>
        `).join("");

                container.querySelectorAll("button").forEach((btn) => {
                    btn.addEventListener("click", () => {
                        currentLanguage = btn.dataset.lang;
                        container.querySelectorAll("button").forEach((b) => b.classList.toggle("active", b === btn));
                        renderCodePanels(findEndpoint(currentEndpointId));
                    });
                });
            }

            function renderCodePanels(endpoint) {
                const reqEl = document.getElementById("requestCode");
                const resEl = document.getElementById("responseCode");
                const statusEl = document.getElementById("responseStatus");
                const labelEl = document.getElementById("requestPanelLabel");

                const langMeta = LANGUAGES.find((l) => l.key === currentLanguage);
                labelEl.textContent = `${(langMeta ? langMeta.label : currentLanguage).toUpperCase()} REQUEST`;

                const langCode = endpoint && endpoint.languages ? endpoint.languages[currentLanguage] : null;
                reqEl.innerHTML = langCode ? highlightCode(langCode) : "// No code example available for this language yet.";

                if (endpoint && endpoint.response !== undefined) {
                    resEl.innerHTML = highlightCode(jsonToPretty(endpoint.response));
                    statusEl.textContent = "200 OK";
                    statusEl.style.display = "";
                } else {
                    resEl.textContent = "// No sample response documented yet.";
                    statusEl.style.display = "none";
                }
            }

            /* =========================================================
               7. loadEndpoint — the core render function
               ========================================================= */
            function loadEndpoint(endpointId, skipScroll) {
                const endpoint = findEndpoint(endpointId);
                if (!endpoint) return;

                currentEndpointId = endpointId;
                currentLanguage = "shell";

                document.getElementById("endpointTitle").textContent = endpoint.title;

                const authBtn = document.getElementById("authorizeBtn");
                authBtn.style.display = endpoint.method === "AUTH" ? "none" : "flex";

                const metaEl = document.getElementById("endpointMeta");
                if (endpoint.method === "AUTH") {
                    metaEl.innerHTML = `<span class="method-badge ${methodClass(endpoint.method)}">AUTH</span>`;
                } else {
                    const fullUrl = endpoint.path ? `${BASE_URL}${endpoint.path}` : "";
                    metaEl.innerHTML = `
                <span class="method-badge ${methodClass(endpoint.method)}">${escapeHtml(methodBadgeText(endpoint.method))}</span>
                ${fullUrl ? `<code class="endpoint-path">${escapeHtml(fullUrl)}</code>` : `<code class="endpoint-path">Path not documented yet</code>`}
            `;
                }

                document.getElementById("endpointDesc").textContent = endpoint.description || "";

                renderHeaders(endpoint.headers);
                renderBody(endpoint.body);
                renderResponseMain(endpoint.response);
                renderLanguageButtons();
                renderCodePanels(endpoint);
                updateActiveSidebarItem();

                // collapse mobile/tablet sidebar drawer after selection
                if (window.innerWidth <= 1024) {
                    document.getElementById("sidebarContainer").classList.remove("mobile-open");
                    document.getElementById("sidebarBackdrop").classList.remove("open");
                }

                if (!skipScroll) {
                    document.getElementById("mainContent").scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            }

            /* =========================================================
               8. SEARCH MODAL
               ========================================================= */
            const overlay = document.getElementById("searchOverlay");
            const searchInput = document.getElementById("searchInput");
            const resultsEl = document.getElementById("searchResults");

            function openSearch() {
                overlay.classList.add("open");
                renderSearchResults("");
                setTimeout(() => searchInput.focus(), 30);
                document.body.style.overflow = "hidden";
            }

            function closeSearch() {
                overlay.classList.remove("open");
                searchInput.value = "";
                document.body.style.overflow = "";
            }

            function renderSearchResults(query) {
                const q = query.trim().toLowerCase();
                const all = flattenEndpoints();

                let matches;
                if (!q) {
                    matches = all;
                } else {
                    matches = all.filter((ep) => {
                        const haystacks = [ep.title, ep.category, ep.path || "", ep.description || ""];
                        return haystacks.some((h) => h.toLowerCase().includes(q) || fuzzyMatch(h, q));
                    });
                }

                if (matches.length === 0) {
                    resultsEl.innerHTML = `<div class="search-empty">No endpoints found</div>`;
                    return;
                }

                resultsEl.innerHTML = matches.map((ep) => `
            <button type="button" class="search-result-item" data-endpoint-id="${escapeHtml(ep.id)}">
                <span class="method-badge ${methodClass(ep.method)}">${escapeHtml(methodBadgeText(ep.method))}</span>
                <span class="search-result-text">
                    <div class="search-result-title">${escapeHtml(ep.title)}</div>
                    <div class="search-result-cat">${escapeHtml(ep.category)}</div>
                </span>
            </button>
        `).join("");

                resultsEl.querySelectorAll(".search-result-item").forEach((item) => {
                    item.addEventListener("click", () => {
                        const id = item.dataset.endpointId;
                        closeSearch();
                        loadEndpoint(id);
                    });
                });
            }

            document.getElementById("searchOpenBtn").addEventListener("click", openSearch);
            document.getElementById("searchCloseBtn").addEventListener("click", closeSearch);
            searchInput.addEventListener("input", (e) => renderSearchResults(e.target.value));

            overlay.addEventListener("click", (e) => {
                if (e.target === overlay) closeSearch();
            });

            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && overlay.classList.contains("open")) {
                    closeSearch();
                } else if (e.key === "Escape" && sidebarEl.classList.contains("mobile-open")) {
                    closeSidebarDrawer();
                } else if (e.key === "/" && !overlay.classList.contains("open") && document.activeElement.tagName !== "INPUT") {
                    e.preventDefault();
                    openSearch();
                }
            });

            /* =========================================================
               9. MOBILE / TABLET NAV DRAWER
               ========================================================= */
            const sidebarEl = document.getElementById("sidebarContainer");
            const sidebarBackdrop = document.getElementById("sidebarBackdrop");

            function openSidebarDrawer() {
                sidebarEl.classList.add("mobile-open");
                sidebarBackdrop.classList.add("open");
                document.body.style.overflow = "hidden";
            }

            function closeSidebarDrawer() {
                sidebarEl.classList.remove("mobile-open");
                sidebarBackdrop.classList.remove("open");
                document.body.style.overflow = "";
            }

            document.getElementById("hamburgerBtn").addEventListener("click", openSidebarDrawer);
            document.getElementById("sidebarCloseBtn").addEventListener("click", closeSidebarDrawer);
            sidebarBackdrop.addEventListener("click", closeSidebarDrawer);

            /* =========================================================
               10. INIT
               ========================================================= */
            renderSidebar();
            const firstEndpoint = flattenEndpoints()[0];
            if (firstEndpoint) loadEndpoint(firstEndpoint.id, true);
        })();
    </script>


</main>

<?php require_once __DIR__ . '/includes/footer.php' ?>