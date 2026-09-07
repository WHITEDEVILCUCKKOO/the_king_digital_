<?php

require_once __DIR__ . '/../functions/admin-functions.php';
require_once __DIR__ . '/../functions/helper.php';

define("SITE_NAME", "King Digital");
define("BASE_URL", "http://localhost/the_king_digital_/");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isAdminLogin()) {
    redirect(BASE_URL . 'admin/login.php');
}