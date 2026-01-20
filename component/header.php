<?php
include_once __DIR__ . "/../data/data.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/card.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/post.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/style/createPost.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>The Mind</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo-container">
                <a href="<?= BASE_URL ?>">The mind</a>
                <a href="<?= BASE_URL ?>">
                    <img id="logo" src="<?= BASE_URL ?>/public/img/logo.png" alt="Logo">
                </a>
            </div>
            <form method="GET" action="<?= BASE_URL ?>/topic.php/">
                <input id="search-input" type="text" name="search">
                <input id="submit-input" type="submit" value="Descruba">
            </form>
            <ul>
                <li><a href="<?= BASE_URL ?>/createPost.php">Contribua</a></li>
                <li>
                    <button id="button-theme-handler">
                        <img src="<?= BASE_URL ?>/public/img/bedtime.svg" alt="button logo" id="img-button">
                    </button></li>
            </ul>
        </nav>
    </header>