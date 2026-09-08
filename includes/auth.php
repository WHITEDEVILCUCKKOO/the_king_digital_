<?php

require_once __DIR__ . '/../config/config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../functions/admin-functions.php';
require_once __DIR__ . '/../functions/helper.php';

define("SITE_NAME", "King Digital");

if (!isusersLogin()) {
    redirect(BASE_URL . 'admin/login.php');
}

function requireAdmin(): void
{
    if (
        empty($_SESSION['admin_role']) ||
        $_SESSION['admin_role'] !== 'admin'
    ) {
        http_response_code(403);

        die('Access denied.');
    }
}

function requireStaff(): void
{
    if (
        !isset($_SESSION['user_id']) ||
        !isset($_SESSION['role']) ||
        !in_array($_SESSION['role'], ['admin', 'staff'], true)
    ) {
        header('Location: /admin/login.php');
        exit;
    }
}