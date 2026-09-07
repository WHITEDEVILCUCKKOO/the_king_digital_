<?php
require_once __DIR__ . '/../../includes/auth.php';
require_once __DIR__ . '/../../functions/admin-functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: add.php');
    exit;
}

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

if ($id <= 0) {
    die('Invalid user id.');
}

// Don't let an admin delete their own account while logged in as it.
if ((int) $_SESSION['admin_id'] === $id) {
    die('You cannot delete your own account while logged in as it.');
}

$admin = getusersById($conn, $id);
if ($admin === null) {
    die('User not found.');
}

try {
    deleteusers($conn, $id);
    header('Location: index.php?deleted=1');
    exit;
} catch (Exception $e) {
    die('Something went wrong while deleting the user.');
}
