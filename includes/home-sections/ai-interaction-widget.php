<?php

/**
 * ai-interaction-widget.php
 * ---------------------------------------------------------------------
 * Reusable "AI interaction" animation — the nested orange 3D cube that
 * originally lived only inside the Home Hero's "AI Assistant" card
 * (home-hero-section.php, the Uiverse.io-by-KSAplay cube loader).
 *
 * This file is the SINGLE SOURCE OF TRUTH for that animation. Every
 * section that wants the cube includes this file once and calls
 * render_ai_interaction() to print an instance. The geometry, rotation,
 * timing, hover/active interaction and responsive scaling all live here;
 * only the COLOR differs per instance (via data-ai-theme).
 *
 * HOW TO USE FROM ANOTHER SECTION FILE:
 *
 *   <?php require_once __DIR__ . '/ai-interaction-widget.php'; ?>
 *   <div class="your-section-visual-slot">
 *       <?php echo render_ai_interaction([
 *           'id'    => 'aiInteractionServices',   // unique per instance
 *           'theme' => 'blue',                    // orange|blue|green|purple|cyan|amber
 *           'size'  => 'lg',                      // sm|md|lg
 *       ]); ?>
 *   </div>
 *
 * IMPORTANT: adjust the require_once path above to match wherever this
 * file actually lives in the project's include structure — it currently
 * assumes it sits next to the file that requires it.
 * ---------------------------------------------------------------------
 */

if (!function_exists('ai_interaction_assets_once')) {
    /**
     * Prints the shared CSS + JS for the AI interaction cube exactly
     * once per page, no matter how many times this function (or
     * render_ai_interaction()) is called. Call this once, anywhere
     * above the first render_ai_interaction() call on the page.
     *
     * NOTE: on a busy Home page with several instances, it's more
     * efficient to load this once site-wide (e.g. alongside the other
     * shared script mentioned in home-hero-section.php's footer.php
     * comment) rather than once per include — but the guard below
     * makes it safe either way.
     */
    function ai_interaction_assets_once()
    {
        static $printed = false;
        if ($printed) {
            return;
        }
        $printed = true;
?>
        <style>
            /* ==================================================================
               AI INTERACTION — shared cube animation
               One geometry/animation system, themed per instance via
               data-ai-theme and sized per instance via data-ai-size (or an
               explicit --ai-unit inline override from render_ai_interaction()).
               ================================================================== */

            .ai-interaction {
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                /* Never lets the cube push the section wider than its box,
                   or cause horizontal scrolling on small screens. */
                max-width: 100%;
                overflow: visible;

                /* ---- default theme: ORANGE (matches the original Hero
                   cube exactly — do not change these unless the Hero's
                   reference color is intentionally being redefined). ---- */
                --ai-color-dark: rgb(126, 61, 8);
                --ai-color-bright: rgb(248, 99, 0);
                --ai-color-hover-a: #fff7ed;
                --ai-color-hover-b: #fed7aa;
                --ai-color-hover-c: #fb923c;
                --ai-glow: rgba(249, 115, 22, 0.9);

                /* ---- default size: md (matches the original Hero cube's
                   40px face / 20px half-face exactly). ---- */
                --ai-unit: 20px;
            }

            /* ---- Color themes ----
               Same shading/highlight/shadow/glow structure as the original
               orange cube — only the hues change, hand-tuned per section
               identity and checked against the site's dark hero background
               for contrast. Swap data-ai-theme to add more later; keep the
               palette additions muted (no neon) to match the brand. */

            .ai-interaction[data-ai-theme="orange"] {
                --ai-color-dark: rgb(126, 61, 8);
                --ai-color-bright: rgb(248, 99, 0);
                --ai-color-hover-a: #fff7ed;
                --ai-color-hover-b: #fed7aa;
                --ai-color-hover-c: #fb923c;
                --ai-glow: rgba(249, 115, 22, 0.9);
            }

            /* AI / Voice sections — reuses the site's existing secondary blue */
            .ai-interaction[data-ai-theme="blue"] {
                --ai-color-dark: rgb(20, 40, 110);
                --ai-color-bright: rgb(79, 127, 247);
                /* == --color-secondary */
                --ai-color-hover-a: #eef3ff;
                --ai-color-hover-b: #c7d7ff;
                --ai-color-hover-c: #7fa3ff;
                /* == --color-secondary-light */
                --ai-glow: rgba(79, 127, 247, 0.9);
            }

            /* WhatsApp / communication sections — muted WhatsApp-family green,
               deliberately deeper than the neon brand green for contrast */
            .ai-interaction[data-ai-theme="green"] {
                --ai-color-dark: rgb(11, 74, 44);
                --ai-color-bright: rgb(37, 140, 90);
                --ai-color-hover-a: #eafaf1;
                --ai-color-hover-b: #bdf0d3;
                --ai-color-hover-c: #34c98f;
                --ai-glow: rgba(37, 140, 90, 0.85);
            }

            /* Automation sections */
            .ai-interaction[data-ai-theme="purple"] {
                --ai-color-dark: rgb(56, 26, 94);
                --ai-color-bright: rgb(124, 58, 196);
                --ai-color-hover-a: #f5eeff;
                --ai-color-hover-b: #ddc6fb;
                --ai-color-hover-c: #a78bfa;
                --ai-glow: rgba(124, 58, 196, 0.85);
            }

            /* A secondary service/feature accent */
            .ai-interaction[data-ai-theme="cyan"] {
                --ai-color-dark: rgb(10, 72, 82);
                --ai-color-bright: rgb(20, 150, 170);
                --ai-color-hover-a: #e6fbfd;
                --ai-color-hover-b: #aeeef2;
                --ai-color-hover-c: #22c3d6;
                --ai-glow: rgba(20, 150, 170, 0.85);
            }

            /* CTA sections — from the site's existing warning/amber token,
               kept distinct from the Hero's orange */
            .ai-interaction[data-ai-theme="amber"] {
                --ai-color-dark: rgb(95, 60, 4);
                --ai-color-bright: rgb(217, 145, 0);
                /* == --color-warning */
                --ai-color-hover-a: #fff8e6;
                --ai-color-hover-b: #ffe6a8;
                --ai-color-hover-c: #f2b705;
                --ai-glow: rgba(217, 145, 0, 0.85);
            }

            /* ---- Size presets ----
               --ai-unit is half a face's side length (original cube: 40px
               face = 20px unit). Everything else scales off this one value,
               so it stays "the same animation, different size" rather than
               a different-looking variant. */
            .ai-interaction[data-ai-size="sm"] {
                --ai-unit: 14px;
            }

            .ai-interaction[data-ai-size="md"] {
                --ai-unit: 20px;
            }

            .ai-interaction[data-ai-size="lg"] {
                --ai-unit: 28px;
            }

            @media (max-width: 640px) {

                /* Context-aware mobile scale-down, applied on top of
                   whichever size preset was requested, so nothing
                   overflows a narrow section. */
                .ai-interaction[data-ai-size="lg"] {
                    --ai-unit: 22px;
                }

                .ai-interaction[data-ai-size="md"] {
                    --ai-unit: 17px;
                }

                .ai-interaction[data-ai-size="sm"] {
                    --ai-unit: 12px;
                }
            }

            /* ---- Geometry (unchanged behavior from the original Hero cube,
               only renamed/parameterized — do not fork this per theme) ---- */

            .ai-interaction__loader {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .ai-interaction__cube {
                position: absolute;
                width: calc(var(--ai-unit) * 2);
                transform-style: preserve-3d;
                transform: rotateX(-30deg) rotateY(45deg);
                transition: 300ms ease;
                cursor: pointer;
                animation: ai-interaction-rotate 10s infinite linear;
            }

            .ai-interaction__cube--front,
            .ai-interaction__cube--back {
                transform: translateX(calc(var(--ai-unit) * 2)) translateZ(calc(var(--ai-unit) * -1));
                animation: none;
            }

            .ai-interaction__cube--top,
            .ai-interaction__cube--bottom {
                transform: translateZ(var(--ai-unit));
                animation: none;
            }

            .ai-interaction__cube--left,
            .ai-interaction__cube--right {
                transform: translateX(calc(var(--ai-unit) * 2)) translateZ(calc(var(--ai-unit) * -1));
                animation: none;
            }

            .ai-interaction__face {
                position: absolute;
                transform-style: preserve-3d;
                width: calc(var(--ai-unit) * 2);
                height: calc(var(--ai-unit) * 2);
                background: radial-gradient(circle, var(--ai-color-dark) 0%, var(--ai-color-bright) 100%);
            }

            .ai-interaction__face--front {
                transform: rotateY(0deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__face--back {
                transform: rotateY(180deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__face--left {
                transform: rotateY(-90deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__face--right {
                transform: rotateY(90deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__face--top {
                transform: rotateX(90deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__face--bottom {
                transform: rotateX(-90deg) translateZ(var(--ai-unit));
            }

            .ai-interaction__cube--back:hover .ai-interaction__face,
            .ai-interaction__cube--front:hover .ai-interaction__face,
            .ai-interaction__cube--top:hover .ai-interaction__face,
            .ai-interaction__cube--bottom:hover .ai-interaction__face,
            .ai-interaction__cube--left:hover .ai-interaction__face,
            .ai-interaction__cube--right:hover .ai-interaction__face {
                background: radial-gradient(circle, var(--ai-color-hover-a) 0%, var(--ai-color-hover-b) 45%, var(--ai-color-hover-c) 100%);
                filter: drop-shadow(0px 0px 5px var(--ai-color-hover-a)) drop-shadow(0px 0px 15px var(--ai-color-hover-c)) drop-shadow(0px 0px 30px var(--ai-glow));
            }

            .ai-interaction__cube:active {
                transform: translateX(0px) translateZ(calc(var(--ai-unit) * -1));
            }

            .ai-interaction__cube--back:active .ai-interaction__face,
            .ai-interaction__cube--front:active .ai-interaction__face,
            .ai-interaction__cube--top:active .ai-interaction__face,
            .ai-interaction__cube--bottom:active .ai-interaction__face,
            .ai-interaction__cube--left:active .ai-interaction__face,
            .ai-interaction__cube--right:active .ai-interaction__face {
                background: radial-gradient(circle, var(--ai-color-hover-a) 0%, var(--ai-color-hover-b) 45%, var(--ai-color-hover-c) 100%);
                filter: drop-shadow(0px 0px 5px var(--ai-color-hover-a)) drop-shadow(0px 0px 15px var(--ai-color-hover-c)) drop-shadow(0px 0px 30px var(--ai-glow));
            }

            .ai-interaction__face--middle {
                background: transparent;
            }

            @keyframes ai-interaction-rotate {
                0% {
                    transform: rotateX(-30deg) rotateY(45deg);
                }

                25% {
                    transform: rotateX(-10deg) rotateY(135deg);
                }

                50% {
                    transform: rotateX(30deg) rotateY(225deg);
                }

                75% {
                    transform: rotateX(10deg) rotateY(315deg);
                }

                100% {
                    transform: rotateX(-30deg) rotateY(405deg);
                }
            }

            /* ---- Performance: pause the animation while its section is
               scrolled well out of view (toggled by the IntersectionObserver
               below). Avoids running rotation math for off-screen instances
               without tearing down/rebuilding any DOM. ---- */
            .ai-interaction.is-offscreen .ai-interaction__cube {
                animation-play-state: paused;
            }

            /* ---- Accessibility: prefers-reduced-motion ----
               Reduced-motion users get the same cube, held at a fixed,
               pleasant angle, with no continuous rotation. Hover/active
               glow still works since it's user-initiated, not ambient
               motion. Nothing here is focusable, so keyboard navigation
               is unaffected either way. */
            @media (prefers-reduced-motion: reduce) {
                .ai-interaction__cube {
                    animation: none !important;
                    transform: rotateX(-25deg) rotateY(35deg) !important;
                    transition: none !important;
                }
            }
        </style>
        <script>
            (function() {
                /* Shared IntersectionObserver for every .ai-interaction
                   instance on the page — one observer, not one per widget. */
                function pauseToggle(entries) {
                    entries.forEach(function(entry) {
                        entry.target.classList.toggle('is-offscreen', !entry.isIntersecting);
                    });
                }

                function observeAll() {
                    var nodes = document.querySelectorAll('.ai-interaction:not([data-ai-observed])');
                    if (!nodes.length) return;

                    if (!('IntersectionObserver' in window)) {
                        // No IO support: leave animations running as-is
                        // rather than guessing visibility.
                        nodes.forEach(function(el) {
                            el.setAttribute('data-ai-observed', '1');
                        });
                        return;
                    }

                    if (!window.__aiInteractionObserver) {
                        window.__aiInteractionObserver = new IntersectionObserver(pauseToggle, {
                            rootMargin: '200px 0px'
                        });
                    }

                    nodes.forEach(function(el) {
                        window.__aiInteractionObserver.observe(el);
                        el.setAttribute('data-ai-observed', '1');
                    });
                }

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', observeAll);
                } else {
                    observeAll();
                }

                // Exposed so a section that injects an instance later
                // (lazy-loaded content, AJAX, etc.) can pick it up.
                window.AIInteraction = window.AIInteraction || {};
                window.AIInteraction.refresh = observeAll;
            })();
        </script>
    <?php
    }
}

if (!function_exists('render_ai_interaction')) {
    /**
     * Renders one instance of the shared AI interaction cube.
     *
     * @param array $options {
     *     @type string $id    Unique DOM id for this instance. Auto-generated if omitted.
     *     @type string $theme One of: orange, blue, green, purple, cyan, amber. Default 'orange'.
     *     @type string $size  One of: sm, md, lg. Default 'md'.
     *     @type int    $unit  Optional explicit px override for --ai-unit (takes precedence over $size).
     * }
     * @return string HTML markup for the instance (caller should echo it).
     */
    function render_ai_interaction(array $options = [])
    {
        static $auto = 0;
        $auto++;

        $defaults = [
            'id'    => 'aiInteraction' . $auto,
            'theme' => 'orange',
            'size'  => 'md',
            'unit'  => null,
        ];
        $o = array_merge($defaults, $options);

        $allowed_themes = ['orange', 'blue', 'green', 'purple', 'cyan', 'amber'];
        if (!in_array($o['theme'], $allowed_themes, true)) {
            $o['theme'] = 'orange';
        }

        $allowed_sizes = ['sm', 'md', 'lg'];
        if (!in_array($o['size'], $allowed_sizes, true)) {
            $o['size'] = 'md';
        }

        $inline_style = '';
        if (!empty($o['unit']) && is_numeric($o['unit'])) {
            $inline_style = ' style="--ai-unit: ' . (int) $o['unit'] . 'px;"';
        }

        $sides = ['front', 'back', 'left', 'right', 'top', 'bottom'];

        ob_start();
    ?>
        <div class="ai-interaction" id="<?php echo htmlspecialchars($o['id'], ENT_QUOTES); ?>" data-ai-theme="<?php echo htmlspecialchars($o['theme'], ENT_QUOTES); ?>" data-ai-size="<?php echo htmlspecialchars($o['size'], ENT_QUOTES); ?>" <?php echo $inline_style; ?>>
            <div class="ai-interaction__loader">
                <div class="ai-interaction__cube">
                    <?php foreach ($sides as $side): ?>
                        <div class="ai-interaction__face ai-interaction__face--middle ai-interaction__face--<?php echo $side; ?>">
                            <div class="ai-interaction__cube ai-interaction__cube--<?php echo $side; ?>">
                                <?php foreach ($sides as $inner): ?>
                                    <div class="ai-interaction__face ai-interaction__face--<?php echo $inner; ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<?php
        return ob_get_clean();
    }
}
