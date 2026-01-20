<?php

include_once __DIR__ . "/../data/database.php";

if (isset($_GET['id'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['imagenewpost'];
    $imageData = file_get_contents($image['tmp_name']);
    $imageData = $conn->real_escape_string($imageData);
    $tags = $_POST['newtags'];
    $id = $_GET['id'];

    $sql = "UPDATE tbPost SET title = '$title', descriptionText = '$description', imagePost = '$imageData', tags = '$tags' where id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: /blog-the-mind");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
