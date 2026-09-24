<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy | King Digital Pvt. Ltd.</title>
    <meta name="description" content="Privacy Policy and Terms of Use for King Digital Pvt. Ltd. services, including SMS, WhatsApp, RCS, voice, AI, web, marketing and hosting.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --paper: #f5f6fb;
            --card: #fff;
            --ink: #151a33;
            --text: #394058;
            --muted: #6a7089;
            --brand: #2c34c4;
            --tint: #e8eafb;
            --navy: #11153b;
            --gold: #e0a21f;
            --line: #dfe2ef;
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--text);
            font: 400 1.0625rem/1.75 'Instrument Sans', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased
        }

        a {
            color: var(--brand)
        }

        :focus-visible {
            outline: 2px solid var(--gold);
            outline-offset: 3px;
            border-radius: 3px
        }

        .wrap {
            width: min(1120px, 100% - 40px);
            margin-inline: auto
        }

        h1,
        h2 {
            font-family: 'Bricolage Grotesque', system-ui, sans-serif;
            color: var(--ink);
            margin: 0
        }

        /* Hero */
        .hero {
            background: var(--navy);
            color: #c9cdf0;
            padding: 22px 0 110px
        }

        .bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: .92rem
        }

        .brand {
            font: 700 1.2rem 'Bricolage Grotesque', sans-serif;
            color: #fff;
            text-decoration: none
        }

        .brand i {
            font-style: normal;
            color: var(--gold)
        }

        .bar a.mail {
            color: #c9cdf0
        }

        .hero h1 {
            color: #fff;
            font-size: clamp(2.4rem, 6vw, 4rem);
            line-height: 1.05;
            letter-spacing: -.02em;
            margin: 64px 0 14px
        }

        .hero h1::after {
            content: '';
            display: block;
            width: 64px;
            height: 4px;
            background: var(--gold);
            margin-top: 22px;
            border-radius: 2px
        }

        .hero p {
            margin: 0;
            max-width: 520px;
            font-size: 1.05rem
        }

        /* Intro card overlaps hero */
        .intro {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 30px 34px;
            margin-top: -72px;
            position: relative;
            box-shadow: 0 12px 36px rgba(17, 21, 59, .12)
        }

        .intro p {
            margin: 0 0 14px;
            max-width: 70ch
        }

        .intro p:last-child {
            margin: 0;
            padding-top: 16px;
            border-top: 1px solid var(--line);
            font-weight: 500;
            color: var(--ink)
        }

        /* Layout */
        .layout {
            display: grid;
            grid-template-columns: 270px minmax(0, 1fr);
            gap: 64px;
            padding: 56px 0 80px;
            align-items: start
        }

        .toc {
            position: sticky;
            top: 20px
        }

        .toc summary {
            font: 700 1rem 'Bricolage Grotesque', sans-serif;
            color: var(--ink);
            list-style: none;
            cursor: pointer;
            padding: 0 0 12px;
            pointer-events: none
        }

        .toc summary::-webkit-details-marker {
            display: none
        }

        .toc ol {
            list-style: none;
            margin: 0;
            padding: 0;
            max-height: calc(100vh - 100px);
            overflow: auto;
            border-left: 2px solid var(--line)
        }

        .toc a {
            display: flex;
            gap: 10px;
            padding: 5px 12px;
            margin-left: -2px;
            border-left: 2px solid transparent;
            color: var(--muted);
            text-decoration: none;
            font-size: .88rem;
            line-height: 1.4
        }

        .toc a b {
            font-weight: 600;
            min-width: 1.4em
        }

        .toc a:hover {
            color: var(--ink)
        }

        .toc a[aria-current=true] {
            color: var(--brand);
            border-left-color: var(--gold);
            font-weight: 600;
            background: linear-gradient(90deg, var(--tint), transparent)
        }

        /* Sections */
        .sec {
            display: grid;
            grid-template-columns: 64px minmax(0, 1fr);
            padding: 34px 0;
            border-top: 1px solid var(--line);
            scroll-margin-top: 16px
        }

        .sec:first-child {
            border-top: 0;
            padding-top: 0
        }

        .sec h2 {
            grid-column: 2;
            font-size: 1.5rem;
            line-height: 1.25;
            margin-bottom: 12px;
            letter-spacing: -.01em
        }

        .sec h2 .n {
            position: absolute;
            margin-left: -64px;
            font-size: 2.4rem;
            line-height: 1;
            color: var(--brand);
            opacity: .45;
            font-weight: 700
        }

        .sec p {
            grid-column: 2;
            margin: 0 0 12px;
            max-width: 68ch
        }

        .sec p:last-child {
            margin-bottom: 0
        }

        .contact {
            margin-top: 24px;
            background: var(--navy);
            color: #c9cdf0;
            border-radius: 14px;
            padding: 28px 32px
        }

        .contact strong {
            display: block;
            font: 700 1.25rem 'Bricolage Grotesque', sans-serif;
            color: #fff;
            margin-bottom: 4px
        }

        .contact a {
            color: var(--gold);
            font-weight: 600
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 26px 0;
            color: var(--muted);
            font-size: .88rem
        }

        @media (max-width:900px) {
            .layout {
                grid-template-columns: 1fr;
                gap: 28px;
                padding-top: 40px
            }

            .toc {
                position: static;
                background: var(--card);
                border: 1px solid var(--line);
                border-radius: 12px;
                padding: 14px 18px
            }

            .toc summary {
                pointer-events: auto;
                padding: 0;
                display: flex;
                justify-content: space-between
            }

            .toc summary::after {
                content: '+';
                color: var(--brand)
            }

            .toc[open] summary {
                padding-bottom: 12px
            }

            .toc[open] summary::after {
                content: '\2212'
            }

            .toc ol {
                max-height: 260px
            }
        }

        @media (max-width:600px) {
            .intro {
                padding: 22px 20px
            }

            .sec {
                grid-template-columns: 1fr
            }

            .sec h2,
            .sec p {
                grid-column: 1
            }

            .sec h2 .n {
                position: static;
                margin: 0 10px 0 0;
                font-size: 1.5rem;
                opacity: 1
            }

            .hero h1 {
                margin-top: 44px
            }
        }

        @media (prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }
        }

        @media print {
            .hero {
                background: none;
                color: #000;
                padding: 0
            }

            .hero h1,
            .brand {
                color: #000
            }

            .toc,
            .bar,
            .hero p {
                display: none
            }

            .intro {
                margin: 0;
                box-shadow: none
            }

            .layout {
                display: block
            }

            .sec h2 .n {
                opacity: 1
            }
        }
    </style>
</head>

<body>

    <header class="hero">
        <div class="wrap">
            <div class="bar">
                <a class="brand" href="/">King<i>.</i>Digital</a>
                <a class="mail" href="mailto:info@kingdigital.in">info@kingdigital.in</a>
            </div>
            <h1>Privacy Policy</h1>
            <p>How we protect your information, and the terms that apply when you use King Digital services.</p>
        </div>
    </header>

    <main class="wrap">
        <section class="intro" aria-label="Summary">
            <p>King Digital Pvt. Ltd. takes no responsibility for direct or indirect consequences arising from actions taken on the basis of our services, information, or materials.</p>
            <p>King Digital Pvt. Ltd. is committed to protecting your privacy and information. Our services must be used in accordance with applicable laws, regulations, and company policies.</p>
            <p>We reserve the right to add, delete, or modify provisions of this Privacy Policy / Terms of Use at any time. Changes become effective once published on our website.</p>
            <p>Queries or complaints may be sent to <a href="mailto:info@kingdigital.in">info@kingdigital.in</a>.</p>
        </section>

        <div class="layout">
            <details class="toc" id="toc">
                <summary>Contents</summary>
                <nav aria-label="Policy sections">
                    <ol id="toc-list"></ol>
                </nav>
            </details>

            <article id="policy">
                <section class="sec" id="s1">
                    <h2><span class="n">1</span>Cancellations and Refunds</h2>
                    <p>King Digital Pvt. Ltd. may cancel, suspend, or terminate an account or service in case of violation of our Terms of Service, Acceptable Use Policy, Privacy Policy, applicable laws, or misuse of services. Customers may request cancellation in writing.</p>
                    <p>All purchases are final unless otherwise agreed in writing. Once a service, campaign, subscription, communication credit, development work, hosting resource, AI solution, or other digital service has been activated or initiated, payments are generally non-refundable and non-transferable.</p>
                </section>

                <section class="sec" id="s2">
                    <h2><span class="n">2</span>Bulk SMS Services</h2>
                    <p>Promotional, Transactional and OTP SMS services must be used according to applicable telecom regulations and service-provider policies. Pricing, validity, delivery conditions, and specifications may change accordingly.</p>
                    <p>Unsolicited bulk/commercial messaging or spam is prohibited. Customers must obtain required recipient consent. Activated SMS credits or packages are non-refundable and non-transferable unless otherwise agreed.</p>
                </section>

                <section class="sec" id="s3">
                    <h2><span class="n">3</span>WhatsApp Business / API Services</h2>
                    <p>WhatsApp business communication and API services are subject to applicable platform and provider policies. Customers are responsible for message content, recipient databases, templates, campaigns, and required opt-ins.</p>
                    <p>Spam, fraud, misleading communication, or unauthorized bulk messaging is prohibited. King Digital Pvt. Ltd. is not responsible for restrictions, template rejection, delivery failure, number blocking, or suspension caused by policy violations or customer misuse.</p>
                </section>

                <section class="sec" id="s4">
                    <h2><span class="n">4</span>RCS Messaging Services</h2>
                    <p>RCS services are subject to telecom regulations, operator policies, platform requirements, and technical availability. Customers are responsible for compliant content and recipient databases.</p>
                    <p>Delivery is not guaranteed and may depend on device compatibility, networks, operators, and recipient settings. Activated RCS credits/packages are non-refundable and non-transferable unless otherwise agreed.</p>
                </section>

                <section class="sec" id="s5">
                    <h2><span class="n">5</span>IVR, Voice &amp; Cloud Telephony Services</h2>
                    <p>IVR, voice calling, cloud telephony, virtual number, and related services must not be used for unauthorized calls, fraud, harassment, spam, or unlawful communication.</p>
                    <p>Connectivity and quality may depend on telecom operators, networks, internet connectivity, and third-party infrastructure. King Digital Pvt. Ltd. is not responsible for interruptions caused by such external providers.</p>
                </section>

                <section class="sec" id="s6">
                    <h2><span class="n">6</span>AI Agents, AI Chatbots &amp; Voice AI</h2>
                    <p>King Digital Pvt. Ltd. may provide AI Agents, AI Chatbots, Voice AI, Knowledge Base/RAG, Prompt Studio, automated workflows, and related integrations.</p>
                    <p>AI outputs depend on supplied information, prompts, databases, APIs, and third-party technologies and may not always be accurate or error-free. Customers should review important outputs and must not use AI services for unlawful, fraudulent, abusive, or misleading activities.</p>
                </section>

                <section class="sec" id="s7">
                    <h2><span class="n">7</span>Website Design &amp; Development</h2>
                    <p>King Digital Pvt. Ltd. provides website design, development, landing pages, e-commerce, maintenance, and related services. Customers must provide accurate and legally usable content, images, logos, trademarks, and other materials.</p>
                    <p>Additional features or revisions outside the agreed scope may be charged separately. Project timelines depend on timely content, approvals, credentials, and feedback from the customer.</p>
                </section>

                <section class="sec" id="s8">
                    <h2><span class="n">8</span>Digital Marketing Services</h2>
                    <p>Our services may include SEO, Social Media Marketing/Management, Google Ads/PPC, ORM, content marketing, and lead generation.</p>
                    <p>Results vary due to competition, budget, algorithms, market conditions, website performance, offers, and audience behaviour. No fixed ranking, leads, sales, followers, reach, revenue, or ROI is guaranteed unless agreed in writing. Third-party ad spend is separate from management/service charges.</p>
                </section>

                <section class="sec" id="s9">
                    <h2><span class="n">9</span>Video, Voice-over &amp; Podcast Services</h2>
                    <p>We may provide video production, editing, voice-over, podcast, studio, and creative services. Customers are responsible for ensuring supplied scripts, images, videos, music, logos, and other assets are legally permitted for use.</p>
                    <p>Additional shoots, revisions, reshoots, editing, or deliverables outside the agreed scope may attract additional charges.</p>
                </section>

                <section class="sec" id="s10">
                    <h2><span class="n">10</span>Hosting, Cloud &amp; Server Services</h2>
                    <p>Hosting, cloud, and server services must not be used for unlawful or unauthorized purposes. Customers are responsible for files, applications, databases, content, and information stored or transmitted through their accounts.</p>
                    <p>Accounts may be restricted or suspended if they affect server stability, security, network performance, or other users.</p>
                </section>

                <section class="sec" id="s11">
                    <h2><span class="n">11</span>System and Network Abuse</h2>
                    <p>Unauthorized access, vulnerability scanning, security bypass attempts, flooding, mail bombing, denial-of-service activity, deliberate system overload, network interference, or similar abuse is prohibited and may result in suspension, termination, and/or legal action.</p>
                </section>

                <section class="sec" id="s12">
                    <h2><span class="n">12</span>Viruses and Other Destructive Activities</h2>
                    <p>Creating, distributing, storing, or transmitting viruses, malware, worms, Trojan horses, malicious scripts, or other harmful technology through King Digital Pvt. Ltd. services is prohibited.</p>
                    <p>Services involved in disruptive or destructive activities may be immediately suspended or terminated.</p>
                </section>

                <section class="sec" id="s13">
                    <h2><span class="n">13</span>Zero Tolerance Spam Policy</h2>
                    <p>We maintain a zero-tolerance approach to unauthorized spam and unsolicited communication. SMS, WhatsApp, RCS, Email, Voice, and other communication services must comply with applicable consent, opt-in, platform, and regulatory requirements.</p>
                    <p>Purchased, unauthorized, or improperly collected databases must not be used. Accounts involved in spam, fraud, or serious policy violations may be terminated without refund.</p>
                </section>

                <section class="sec" id="s14">
                    <h2><span class="n">14</span>Resource Usage</h2>
                    <p>Customers must not use hosting, cloud, server, API, AI, communication, or technical resources in a way that affects service performance, security, or availability for others.</p>
                    <p>Excessive CPU, RAM, bandwidth, database, API, or network usage; unauthorized bots/scripts; malicious automation; file-sharing; or activities compromising system security may be restricted or suspended.</p>
                </section>

                <section class="sec" id="s15">
                    <h2><span class="n">15</span>Price Change</h2>
                    <p>King Digital Pvt. Ltd. may change service pricing, packages, features, resources, or specifications at any time, subject to active written contracts.</p>
                    <p>Costs from advertising platforms, telecom operators, API/AI providers, hosting providers, software platforms, or other vendors may change independently and may affect service pricing.</p>
                </section>

                <section class="sec" id="s16">
                    <h2><span class="n">16</span>Uptime &amp; Service Availability</h2>
                    <p>We make reasonable efforts to maintain service availability but cannot guarantee 100% uninterrupted uptime. Maintenance, updates, hardware failure, internet/telecom outages, third-party downtime, cyber incidents, regulatory actions, natural events, or circumstances beyond our control may affect services.</p>
                </section>

                <section class="sec" id="s17">
                    <h2><span class="n">17</span>Client / Reseller Responsibility</h2>
                    <p>Clients and resellers are responsible for activities, content, and data handled through their accounts. Resellers are responsible for their end customers unless otherwise agreed.</p>
                    <p>Violations through a client or reseller account may result in suspension or termination.</p>
                </section>

                <section class="sec" id="s18">
                    <h2><span class="n">18</span>Backup &amp; Data Responsibility</h2>
                    <p>Customers are responsible for maintaining backups of important websites, files, databases, credentials, media, and other information.</p>
                    <p>Where backup facilities are provided, King Digital Pvt. Ltd. does not guarantee that every backup will be complete or recoverable.</p>
                </section>

                <section class="sec" id="s19">
                    <h2><span class="n">19</span>Payments &amp; Renewals</h2>
                    <p>Customers must make payments and renewals within applicable timelines. Domains, hosting, servers, APIs, communication packages, software subscriptions, and recurring services should be renewed before expiry.</p>
                    <p>Services or credits will be activated after payment is received and verified. Applicable third-party processing, transaction, platform, or other charges may be payable separately.</p>
                </section>

                <section class="sec" id="s20">
                    <h2><span class="n">20</span>Discontinuation of Services</h2>
                    <p>King Digital Pvt. Ltd. may restrict, suspend, or terminate services for policy/law violations, spam or fraud, abuse or harassment of employees, unauthorized system activity, non-payment, misuse of communication/AI services, or activities affecting system security or stability.</p>
                    <p>No refund may be provided for termination caused by serious misuse or policy violations. Appropriate legal action may also be taken where necessary.</p>
                </section>

                <section class="sec" id="s21">
                    <h2><span class="n">21</span>Changes to Terms / Policies</h2>
                    <p>King Digital Pvt. Ltd. may revise its Terms of Service, Acceptable Use Policy, Privacy Policy, and related policies at any time. Updated policies apply once published unless otherwise stated.</p>
                    <p>Customers should review applicable Terms, Privacy Policy, Refund Policy, and service policies before placing an order or using our services.</p>
                </section>

                <section class="sec" id="s22">
                    <h2><span class="n">22</span>Communication With You</h2>
                    <p>We may use information provided by you to respond to enquiries, provide support, communicate about active services, send important account information, and share permitted marketing or promotional communications.</p>
                    <p>Communication may take place through SMS, Email, RCS, WhatsApp, and Voice/Phone Calls. By providing contact information and opting to receive relevant communications, you acknowledge that we may contact you through applicable channels, subject to applicable requirements.</p>
                    <p>For questions or complaints, contact King Digital Pvt. Ltd. at <a href="mailto:info@kingdigital.in">info@kingdigital.in</a>.</p>
                </section>

                <div class="contact">
                    <strong>Questions or complaints?</strong>
                    Write to us at <a href="mailto:info@kingdigital.in">info@kingdigital.in</a>.
                </div>
            </article>
        </div>
    </main>

    <footer>
        <div class="wrap">&copy; King Digital Pvt. Ltd. All rights reserved.</div>
    </footer>

    <script>
        (function() {
            var list = document.getElementById('toc-list');
            var secs = document.querySelectorAll('.sec');
            secs.forEach(function(s) {
                var h = s.querySelector('h2');
                var li = document.createElement('li');
                var a = document.createElement('a');
                a.href = '#' + s.id;
                a.innerHTML = '<b>' + h.querySelector('.n').textContent + '</b><span>' + h.lastChild.textContent + '</span>';
                li.appendChild(a);
                list.appendChild(li);
            });

            var toc = document.getElementById('toc');
            if (window.matchMedia('(min-width:901px)').matches) toc.open = true;

            if ('IntersectionObserver' in window) {
                var links = list.querySelectorAll('a');
                var io = new IntersectionObserver(function(entries) {
                    entries.forEach(function(e) {
                        if (!e.isIntersecting) return;
                        links.forEach(function(l) {
                            var on = l.getAttribute('href') === '#' + e.target.id;
                            if (on) l.setAttribute('aria-current', 'true');
                            else l.removeAttribute('aria-current');
                        });
                    });
                }, {
                    rootMargin: '-15% 0px -75% 0px'
                });
                secs.forEach(function(s) {
                    io.observe(s);
                });
            }
        })();
    </script>
</body>

</html>