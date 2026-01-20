<?php

include_once __DIR__ . "/../data/database.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /blog-the-mind");
    exit;
}





$values = $_POST;
$title = $values['title'];
$description = $values['description'];
$tags = $values['newtags'];
$image = $_FILES['imagenewpost'];
$imageData = file_get_contents($image['tmp_name']);
$imageData = $conn->real_escape_string($imageData);

$sql = "INSERT INTO tbPost (title, descriptionText, imagePost, tags) VALUES ('$title', '$description', '$imageData', '$tags')";

if ($conn->query($sql) === TRUE) {
    header("Location: perfil.php?id=10&status=ok");
    exit;
} else {
    echo "Error: " . $conn->error;
}
