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
            padding: 10px 14px;
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
            padding: 5px 10px;
            border-radius: 4px;
            min-width: 38px;
            text-align: center;
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

        .omni_content--main-heading h2 {
            font-size: 34px;
            font-weight: 700;
            margin: 0 0 10px;
            letter-spacing: -.01em;
        }

        .endpoint-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
        }

        .endpoint-path {
            font-size: 13.5px;
            background: var(--bg-soft);
            border: 1px solid var(--border);
            padding: 6px 10px;
            border-radius: 6px;
            color: var(--nav-soft);
            overflow-x: auto;
            white-space: nowrap;
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
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .04em;
            color: var(--nav-soft);
            margin: 0 0 12px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
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
            margin-bottom: 18px;
        }

        .rightside-language-btn button {
            display: flex;
            align-items: center;
            gap: 6px;
            border: 1px solid var(--border);
            background: #fff;
            border-radius: 6px;
            padding: 6px 10px;
            font-size: 12.5px;
            font-weight: 600;
            color: var(--nav-soft);
            cursor: pointer;
            transition: all .15s ease;
        }

        .rightside-language-btn button span svg {
            width: 13px;
            height: 13px;
        }

        .rightside-language-btn button:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .rightside-language-btn button.active {
            background: #ffffff67;
            border-color: var(--nav);
            color: #000;
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

        /* ============ MOBILE NAV TOGGLE ============ */

        .mobile-nav-toggle {
            display: none;
        }

        /* ============ RESPONSIVE ============ */

        @media (max-width: 1180px) {
            .omni_content {
                grid-template-columns: 240px minmax(0, 1fr) 320px;
            }
        }

        @media (max-width: 900px) {
            .omni_content {
                grid-template-columns: 1fr;
            }

            .omni_content--leftside {
                position: static;
                height: auto;
                max-height: none;
                border-right: none;
                border-bottom: 1px solid var(--border);
                display: none;
            }

            .omni_content--leftside.mobile-open {
                display: block;
            }

            .mobile-nav-toggle {
                display: flex;
                align-items: center;
                gap: 8px;
                width: 100%;
                border: 1px solid var(--border);
                background: var(--bg-soft);
                border-radius: var(--radius);
                padding: 10px 12px;
                font-size: 13px;
                font-weight: 600;
                color: var(--nav);
                cursor: pointer;
                margin: 12px 16px 0;
                width: calc(100% - 32px);
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
        <button class="mobile-nav-toggle" id="mobileNavToggle" type="button">
            <span>&#9776;</span> Browse endpoints
        </button>

        <div class="omni_content">
            <div class="omni_content--leftside" id="sidebarContainer">
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
                    <div class="endpoint-meta" id="endpointMeta"></div>
                    <p class="endpoint-desc" id="endpointDesc"></p>
                </div>

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
                    <h5>Request</h5>
                    <div class="code-panel-scroll">
                        <pre class="code-block" id="requestCode"></pre>
                    </div>
                </div>

                <div class="right-response">
                    <h5>Response <span class="status-code" id="responseStatus">200 OK</span></h5>
                    <div class="code-panel-scroll">
                        <pre class="code-block" id="responseCode"></pre>
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
            const apiData = {
                categories: [{
                        name: "Getting Started",
                        endpoints: [{
                            id: "authentication",
                            title: "Authentication",
                            method: "AUTH",
                            path: "",
                            description: "Learn how to authenticate API requests.",
                            status: "Not Set",
                            headers: [{
                                name: "Authorization",
                                type: "string",
                                required: true,
                                description: "Bearer token"
                            }]
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
                    shell: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="rgb(116, 192, 252)" d="M9.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L146.7 256 9.4 118.6zM224 384l256 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-256 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>`,
                    node: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="rgb(37, 200, 14)" d="M224.5 508c-6.7 0-13.5-1.8-19.4-5.2l-61.7-36.5c-9.2-5.2-4.7-7-1.7-8 12.3-4.3 14.8-5.2 27.9-12.7 1.4-.8 3.2-.5 4.6 .4l47.4 28.1c1.7 1 4.1 1 5.7 0L412 367.5c1.7-1 2.8-3 2.8-5l0-213.2c0-2.1-1.1-4-2.9-5.1L227.3 37.7c-1.7-1-4-1-5.7 0L37.1 144.3c-1.8 1-2.9 3-2.9 5.1l0 213.1c0 2 1.1 4 2.9 4.9l50.6 29.2c27.5 13.7 44.3-2.4 44.3-18.7l0-210.4c0-3 2.4-5.3 5.4-5.3l23.4 0c2.9 0 5.4 2.3 5.4 5.3l0 210.5c0 36.6-20 57.6-54.7 57.6-10.7 0-19.1 0-42.5-11.6L20.6 396.1c-12-6.9-19.4-19.8-19.4-33.7l0-213.1c0-13.8 7.4-26.8 19.4-33.7L205.1 9c11.7-6.6 27.2-6.6 38.8 0L428.6 115.7c12 6.9 19.4 19.8 19.4 33.7l0 213.1c0 13.8-7.4 26.7-19.4 33.7L243.9 502.8c-5.9 3.4-12.6 5.2-19.4 5.2zM373.6 297.9c0-39.9-27-50.5-83.7-58-57.4-7.6-63.2-11.5-63.2-24.9 0-11.1 4.9-25.9 47.4-25.9 37.9 0 51.9 8.2 57.7 33.8 .5 2.4 2.7 4.2 5.2 4.2l24 0c1.5 0 2.9-.6 3.9-1.7s1.5-2.6 1.4-4.1c-3.7-44.1-33-64.6-92.2-64.6-52.7 0-84.1 22.2-84.1 59.5 0 40.4 31.3 51.6 81.8 56.6 60.5 5.9 65.2 14.8 65.2 26.7 0 20.6-16.6 29.4-55.5 29.4-48.9 0-59.6-12.3-63.2-36.6-.4-2.6-2.6-4.5-5.3-4.5l-23.9 0c-3 0-5.3 2.4-5.3 5.3 0 31.1 16.9 68.2 97.8 68.2 58.4-.1 92-23.2 92-63.4z"/></svg>`,
                    ruby: `<svg width="64px" height="64px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M22.5941 19.8407L8.8916 27.9998L26.6338 26.7925L28.0003 8.85254L22.5941 19.8407Z" fill="url(#paint0_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M26.6631 26.7806L25.1381 16.2261L20.9844 21.7262L26.6631 26.7806Z" fill="url(#paint1_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M26.6836 26.7803L15.5117 25.9009L8.95117 27.9769L26.6836 26.7803Z" fill="url(#paint2_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96674 27.9796L11.7576 18.811L5.61621 20.1279L8.96674 27.9796Z" fill="url(#paint3_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4176 11.8117L20.4706 6.12207L18.5361 12.3936L27.4176 11.8117Z" fill="url(#paint4_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.1684 4.09336L20.0826 6.35755L17.5049 4.06299L24.1684 4.09336Z" fill="url(#paint5_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4 23.2031L5.7116 20.0729L4.32706 16.3438L4 23.2031Z" fill="url(#paint6_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.23535 16.2259L5.62838 20.1883L11.6814 18.8265L18.592 12.3862L20.5422 6.17431L17.4714 4L12.2506 5.95931C10.6057 7.49347 7.41387 10.529 7.29879 10.5861C7.18493 10.6444 5.19109 14.4233 4.23535 16.2259Z" fill="white"></path> <path d="M11.7227 18.7882L18.592 12.3863L18.5951 12.3765L20.9832 21.7566L11.7227 18.7882Z" fill="url(#paint7_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.12619 9.10774C12.6911 5.56325 17.2869 3.46911 19.0506 5.2535C20.8132 7.03789 18.944 11.3744 15.3791 14.9176C11.8141 18.4609 7.27528 20.6705 5.5128 18.8861C3.74911 17.1029 5.56126 12.651 9.12619 9.10774Z" fill="url(#paint8_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9668 27.9755L11.7359 18.7778L20.9323 21.7405C17.6072 24.8671 13.909 27.5103 8.9668 27.9755Z" fill="url(#paint9_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6035 12.3679L20.9644 21.7454C23.742 18.8167 26.2349 15.6682 27.4558 11.7739L18.6035 12.3679Z" fill="url(#paint10_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4317 11.8217C28.3765 8.96229 28.5945 4.86025 24.1392 4.09863L20.4834 6.12354L27.4317 11.8217Z" fill="url(#paint11_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4 23.162C4.13082 27.8812 7.52617 27.9515 8.97249 27.9929L5.63166 20.1689L4 23.162Z" fill="#9E1209"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6172 12.3826C20.7515 13.6981 25.0531 16.3401 25.1403 16.3887C25.2758 16.4652 26.9948 13.4819 27.3849 11.7959L18.6172 12.3826Z" fill="url(#paint12_radial_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7324 18.7778L15.4342 25.9397C17.6231 24.7493 19.3371 23.2989 20.907 21.7453L11.7324 18.7778Z" fill="url(#paint13_radial_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.61728 20.1783L5.09277 26.4413C6.08243 27.7969 7.44396 27.9147 8.87211 27.8091C7.83885 25.2303 5.77475 20.0739 5.61728 20.1783Z" fill="url(#paint14_linear_87_8208)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4619 6.1393L27.8159 7.17422C27.4234 5.50644 26.2181 4.43022 24.1637 4.09375L20.4619 6.1393Z" fill="url(#paint15_linear_87_8208)"></path> <defs> <linearGradient id="paint0_linear_87_8208" x1="25.0863" y1="30.1825" x2="20.0019" y2="21.2307" gradientUnits="userSpaceOnUse"> <stop stop-color="#FB7655"></stop> <stop offset="0.41" stop-color="#E42B1E"></stop> <stop offset="0.99" stop-color="#990000"></stop> <stop offset="1" stop-color="#990000"></stop> </linearGradient> <linearGradient id="paint1_linear_87_8208" x1="27.6086" y1="22.6528" x2="21.0723" y2="18.2786" gradientUnits="userSpaceOnUse"> <stop stop-color="#871101"></stop> <stop offset="0.99" stop-color="#911209"></stop> <stop offset="1" stop-color="#911209"></stop> </linearGradient> <linearGradient id="paint2_linear_87_8208" x1="22.3878" y1="30.4542" x2="15.8517" y2="26.0802" gradientUnits="userSpaceOnUse"> <stop stop-color="#871101"></stop> <stop offset="0.99" stop-color="#911209"></stop> <stop offset="1" stop-color="#911209"></stop> </linearGradient> <linearGradient id="paint3_linear_87_8208" x1="8.68769" y1="19.4743" x2="9.70472" y2="26.0657" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="0.23" stop-color="#E57252"></stop> <stop offset="0.46" stop-color="#DE3B20"></stop> <stop offset="0.99" stop-color="#A60003"></stop> <stop offset="1" stop-color="#A60003"></stop> </linearGradient> <linearGradient id="paint4_linear_87_8208" x1="21.8192" y1="7.10002" x2="22.9409" y2="11.9204" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="0.18" stop-color="#E46342"></stop> <stop offset="0.4" stop-color="#C82410"></stop> <stop offset="0.99" stop-color="#A80D00"></stop> <stop offset="1" stop-color="#A80D00"></stop> </linearGradient> <linearGradient id="paint5_linear_87_8208" x1="18.4117" y1="5.40177" x2="23.2251" y2="3.00175" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="0.54" stop-color="#C81F11"></stop> <stop offset="0.99" stop-color="#BF0905"></stop> <stop offset="1" stop-color="#BF0905"></stop> </linearGradient> <linearGradient id="paint6_linear_87_8208" x1="4.47282" y1="17.7935" x2="4.87073" y2="21.7663" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="0.31" stop-color="#DE4024"></stop> <stop offset="0.99" stop-color="#BF190B"></stop> <stop offset="1" stop-color="#BF190B"></stop> </linearGradient> <linearGradient id="paint7_linear_87_8208" x1="15.6452" y1="13.3187" x2="16.02" y2="20.0464" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="0.23" stop-color="#E4714E"></stop> <stop offset="0.56" stop-color="#BE1A0D"></stop> <stop offset="0.99" stop-color="#A80D00"></stop> <stop offset="1" stop-color="#A80D00"></stop> </linearGradient> <linearGradient id="paint8_linear_87_8208" x1="1.75216" y1="22.8404" x2="20.4078" y2="3.71053" gradientUnits="userSpaceOnUse"> <stop stop-color="#BD0012"></stop> <stop offset="0.07" stop-color="white"></stop> <stop offset="0.17" stop-color="white"></stop> <stop offset="0.27" stop-color="#C82F1C"></stop> <stop offset="0.33" stop-color="#820C01"></stop> <stop offset="0.46" stop-color="#A31601"></stop> <stop offset="0.72" stop-color="#B31301"></stop> <stop offset="0.99" stop-color="#E82609"></stop> <stop offset="1" stop-color="#E82609"></stop> </linearGradient> <linearGradient id="paint9_linear_87_8208" x1="16.0015" y1="24.7752" x2="10.3965" y2="23.3957" gradientUnits="userSpaceOnUse"> <stop stop-color="#8C0C01"></stop> <stop offset="0.54" stop-color="#990C00"></stop> <stop offset="0.99" stop-color="#A80D0E"></stop> <stop offset="1" stop-color="#A80D0E"></stop> </linearGradient> <linearGradient id="paint10_linear_87_8208" x1="25.6251" y1="18.0314" x2="20.635" y2="13.5714" gradientUnits="userSpaceOnUse"> <stop stop-color="#7E110B"></stop> <stop offset="0.99" stop-color="#9E0C00"></stop> <stop offset="1" stop-color="#9E0C00"></stop> </linearGradient> <linearGradient id="paint11_linear_87_8208" x1="27.4539" y1="9.82314" x2="24.9671" y2="7.17189" gradientUnits="userSpaceOnUse"> <stop stop-color="#79130D"></stop> <stop offset="0.99" stop-color="#9E120B"></stop> <stop offset="1" stop-color="#9E120B"></stop> </linearGradient> <radialGradient id="paint12_radial_87_8208" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(21.4229 13.6432) scale(6.09995 6.11692)"> <stop stop-color="#A80D00"></stop> <stop offset="0.99" stop-color="#7E0E08"></stop> <stop offset="1" stop-color="#7E0E08"></stop> </radialGradient> <radialGradient id="paint13_radial_87_8208" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.9755 21.7042) scale(8.10906 8.13164)"> <stop stop-color="#A30C00"></stop> <stop offset="0.99" stop-color="#800E08"></stop> <stop offset="1" stop-color="#800E08"></stop> </radialGradient> <linearGradient id="paint14_linear_87_8208" x1="7.23075" y1="27.9701" x2="5.19975" y2="21.0987" gradientUnits="userSpaceOnUse"> <stop stop-color="#8B2114"></stop> <stop offset="0.43" stop-color="#9E100A"></stop> <stop offset="0.99" stop-color="#B3100C"></stop> <stop offset="1" stop-color="#B3100C"></stop> </linearGradient> <linearGradient id="paint15_linear_87_8208" x1="22.7321" y1="5.19037" x2="27.2663" y2="7.18628" gradientUnits="userSpaceOnUse"> <stop stop-color="#B31000"></stop> <stop offset="0.44" stop-color="#910F08"></stop> <stop offset="0.99" stop-color="#791C12"></stop> <stop offset="1" stop-color="#791C12"></stop> </linearGradient> </defs> </g></svg>`,
                    php: `<svg width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>file_type_php3</title><path d="M7.6,13.791a2.352,2.352,0,0,1,1.745.483,1.916,1.916,0,0,1,.207,1.66,2.78,2.78,0,0,1-.918,1.748,3.375,3.375,0,0,1-2.07.529h-1.4L6.024,13.8ZM2,22.677H4.3l.545-2.8H6.812A7.049,7.049,0,0,0,8.956,19.6a4.06,4.06,0,0,0,1.53-.918A4.585,4.585,0,0,0,11.93,16.1a3.288,3.288,0,0,0-.55-2.922A3.671,3.671,0,0,0,8.47,12.129H4.057Z" style="fill:#8993be"></path><path d="M13.617,9.323H15.9l-.553,2.8h2.031a3.956,3.956,0,0,1,2.645.669,2.213,2.213,0,0,1,.436,2.167l-.954,4.909H17.195l.908-4.667a1.267,1.267,0,0,0-.114-1.086,1.6,1.6,0,0,0-1.144-.286H15.022l-1.175,6.044H11.559Z" style="fill:#8993be"></path><path d="M25.539,13.791a2.352,2.352,0,0,1,1.745.483,1.916,1.916,0,0,1,.207,1.66,2.78,2.78,0,0,1-.918,1.748,3.375,3.375,0,0,1-2.074.529H23.1l.858-4.416Zm-5.6,8.886h2.3l.545-2.8h1.968A7.049,7.049,0,0,0,26.9,19.6a4.06,4.06,0,0,0,1.53-.918A4.585,4.585,0,0,0,29.869,16.1a3.288,3.288,0,0,0-.55-2.922,3.671,3.671,0,0,0-2.909-1.046h-4.42Z" style="fill:#8993be"></path></g></svg>`,
                    python: `<svg width="64px" height="64px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><linearGradient id="a" x1="-133.268" y1="-202.91" x2="-133.198" y2="-202.84" gradientTransform="translate(25243.061 38519.17) scale(189.38 189.81)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#387eb8"></stop><stop offset="1" stop-color="#366994"></stop></linearGradient><linearGradient id="b" x1="-133.575" y1="-203.203" x2="-133.495" y2="-203.133" gradientTransform="translate(25309.061 38583.42) scale(189.38 189.81)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffe052"></stop><stop offset="1" stop-color="#ffc331"></stop></linearGradient></defs><title>file_type_python</title><path d="M15.885,2.1c-7.1,0-6.651,3.07-6.651,3.07V8.36h6.752v1H6.545S2,8.8,2,16.005s4.013,6.912,4.013,6.912H8.33V19.556s-.13-4.013,3.9-4.013h6.762s3.772.06,3.772-3.652V5.8s.572-3.712-6.842-3.712h0ZM12.153,4.237a1.214,1.214,0,1,1-1.183,1.244v-.02a1.214,1.214,0,0,1,1.214-1.214h0Z" style="fill:url(#a)"></path><path d="M16.085,29.91c7.1,0,6.651-3.08,6.651-3.08V23.65H15.985v-1h9.47S30,23.158,30,15.995s-4.013-6.912-4.013-6.912H23.64V12.4s.13,4.013-3.9,4.013H12.975S9.2,16.356,9.2,20.068V26.2s-.572,3.712,6.842,3.712h.04Zm3.732-2.147A1.214,1.214,0,1,1,21,26.519v.03a1.214,1.214,0,0,1-1.214,1.214h.03Z" style="fill:url(#b)"></path></g></svg>`
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

                const langCode = endpoint && endpoint.languages ? endpoint.languages[currentLanguage] : null;
                reqEl.textContent = langCode ? langCode : "// No code example available for this language yet.";

                if (endpoint && endpoint.response !== undefined) {
                    resEl.textContent = jsonToPretty(endpoint.response);
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
            function loadEndpoint(endpointId) {
                const endpoint = findEndpoint(endpointId);
                if (!endpoint) return;

                currentEndpointId = endpointId;
                currentLanguage = "shell";

                document.getElementById("endpointTitle").textContent = endpoint.title;

                const metaEl = document.getElementById("endpointMeta");
                if (endpoint.method === "AUTH") {
                    metaEl.innerHTML = `<span class="method-badge ${methodClass(endpoint.method)}">AUTH</span>`;
                } else {
                    metaEl.innerHTML = `
                <span class="method-badge ${methodClass(endpoint.method)}">${escapeHtml(endpoint.method)}</span>
                ${endpoint.path ? `<code class="endpoint-path">${escapeHtml(endpoint.path)}</code>` : ""}
            `;
                }

                document.getElementById("endpointDesc").textContent = endpoint.description || "";

                renderHeaders(endpoint.headers);
                renderBody(endpoint.body);
                renderResponseMain(endpoint.response);
                renderLanguageButtons();
                renderCodePanels(endpoint);
                updateActiveSidebarItem();

                // collapse mobile sidebar after selection on small screens
                if (window.innerWidth <= 900) {
                    document.getElementById("sidebarContainer").classList.remove("mobile-open");
                }

                document.getElementById("mainContent").scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
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
                } else if (e.key === "/" && !overlay.classList.contains("open") && document.activeElement.tagName !== "INPUT") {
                    e.preventDefault();
                    openSearch();
                }
            });

            /* =========================================================
               9. MOBILE NAV TOGGLE
               ========================================================= */
            document.getElementById("mobileNavToggle").addEventListener("click", () => {
                document.getElementById("sidebarContainer").classList.toggle("mobile-open");
            });

            /* =========================================================
               10. INIT
               ========================================================= */
            renderSidebar();
            const firstEndpoint = flattenEndpoints()[0];
            if (firstEndpoint) loadEndpoint(firstEndpoint.id);
        })();
    </script>


</main>

<?php require_once __DIR__ . '/includes/footer.php' ?>