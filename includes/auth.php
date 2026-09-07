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