<?php
$servername = "localhost";
$username = "root";
$password = "sutucon611";

$db_name = "web_db";
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>