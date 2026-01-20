<?php

include_once __DIR__ . "/../data/database.php";


if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header("Location: /blog-the-mind");
    exit;
}

if (isset($_GET['id'])) {

    $actualID = $_GET['id'];

    $sql = "DELETE FROM tbPost WHERE id = $actualID";

    if ($conn->query($sql) === TRUE) {
        header("Location: /blog-the-mind");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
