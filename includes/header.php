<?php

    require_once __DIR__ . '/../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= $pageDescription ?? 'Welcome to King Digital, a leading digital marketing agency in Delhi. We are a team of professionals dedicated to providing top-notch digital marketing solution to businesses in Delhi and beyond. We aim to help our clients reach their business goals by leveraging the power of digital marketing.' ?>">

    <meta name="theme-color" content="#ffffff">

    <title>
        <?= $pageTitle ?? 'Website Name' ?>
    </title>

    <link rel="icon" type="image/png" href="<?= BASE_URL ?>/assets/logo/king-digital-logo-2.png">

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/global.css">
</head>

<body>