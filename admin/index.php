<?php
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../functions/admin-functions.php';
require_once __DIR__ . '/../functions/helper.php';
require_once __DIR__ . '/../config/config.php';

$pageTitle = 'Dashboard';
$activeNav = 'dashboard';

// include __DIR__ . '/include/header.php';
?>

<h1>Welcome, <?= htmlspecialchars($_SESSION['admin_name']) ?></h1>
<p>You're logged in as <?= htmlspecialchars($_SESSION['admin_email']) ?>.</p>

<a href="logout.php">Logout</a>

<?php //include __DIR__ . '/include/footer.php'; ?>