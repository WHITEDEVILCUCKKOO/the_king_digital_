<?php

require_once __DIR__ . '/../functions/admin-functions.php';
require_once __DIR__ . '/../functions/helper.php';
include __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../config/config.php';

logoutusers();

session_destroy();

redirect(BASE_URL . '');
