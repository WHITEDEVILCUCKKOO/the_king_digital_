<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'king_digital_db';

try {

    $conn = new mysqli(
        $host,
        $user,
        $password,
        $database
    );

    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {

    error_log($e->getMessage());

    die('Database connection failed.');
}

define("BASE_URL", "http://localhost/the_king_digital_/");
