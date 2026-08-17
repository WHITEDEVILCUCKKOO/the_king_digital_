<?php require_once __DIR__ . '/includes/header.php'; ?>

<style>
    .about-main {
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

<main class="about-main">
    <!-- section 1 ( Hero ) -->
    <?php require_once __DIR__ . '/includes/about-sections/about-hero-section.php'; ?>
    
    <!-- section 2 ( Stats ) -->
    <?php require_once __DIR__ . '/includes/about-sections/about-stats-section.php'; ?>

    <!-- section 3 ( About Us ) -->
    <?php require_once __DIR__ . '/includes/about-sections/about-section.php'; ?>
    
    <!-- section 3 ( why Choose ) -->
    <?php require_once __DIR__ . '/includes/about-sections/about-why-section.php'; ?>
    
    <!-- section 3 ( Team Member ) -->
    <?php require_once __DIR__ . '/includes/about-sections/about-team-section.php'; ?>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>