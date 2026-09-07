<?php

require_once __DIR__ . '/../functions/admin-functions.php';
require_once __DIR__ . '/../functions/helper.php';
include __DIR__ . '/../includes/auth.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

logoutAdmin();

session_destroy();

redirect(BASE_URL . 'admin/login.php');