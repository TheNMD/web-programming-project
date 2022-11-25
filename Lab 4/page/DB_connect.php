<?php
    $db_name = "web";
    $conn = new mysqli("localhost:3306", "root", "");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>