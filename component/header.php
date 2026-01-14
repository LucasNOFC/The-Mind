<?php

include_once("./data/data.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/card.css">
    <link rel="stylesheet" href="../style/post.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>The Mind</title>
</head>

<body>
    <header>
        <nav>
            <div id="logo-container">
                <a href="/">The mind</a>
                <a href="/">
                    <img id="logo" src="../img/logo.png" alt="Logo">
                </a>
            </div>
            <form method="GET" action="/topic.php/">
                <input id="search-input" type="text" name="search">
                <input id="submit-input" type="submit" value="Search">
            </form>
            <ul>
                <li><a href="/about.php">Sobre</a></li>
                <li><button id="button-theme-handler"><img src="" alt="button logo" id="img-button"></button></li>
            </ul>
        </nav>
    </header>