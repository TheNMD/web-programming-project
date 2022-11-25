<?php
    include "DB_connect.php";

    $med = "SELECT Name, Price FROM web.product WHERE Type = 'Medicine'";
    $food = "SELECT Name, Price FROM web.product WHERE Type = 'Functional food'";
    $cosmetics = "SELECT Name, Price FROM web.product WHERE Type = 'Cosmetics'";
    $result_med = mysqli_query($conn, $med);
    $result_food = mysqli_query($conn, $food);
    $result_cosmetics = mysqli_query($conn, $cosmetics);
    $rows = $result_med->fetch_assoc();
    echo $rows['Name'];
    echo $rows['Price'];
    $rows = $result_med->fetch_assoc();
    echo $rows['Name'];
    echo $rows['Price'];
?>