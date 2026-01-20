<?php

    $host = "localhost";
    $user = "root";
    $pass = "12345";
    $db   = "dbBlog";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Error:" . mysqli_connect_error());
    }


