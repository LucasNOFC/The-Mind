<?php

include_once __DIR__ . "/database.php";
define('BASE_URL', '/blog-the-mind');


$sql = "SELECT id, title, descriptiontext, tags, imagePost from tbPost";
$result = $conn->query($sql);

$topics = [];


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($topics, $row);    
    }
}


