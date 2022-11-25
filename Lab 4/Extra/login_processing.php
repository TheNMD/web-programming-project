<?php
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    if(empty($uname)){
        echo '<script>'; 
        echo 'alert("Please enter a username");';
        echo 'window.location.href = "index.php?page=login";';
        echo '</script>';
    }
    else if(empty($password)){
        echo '<script>'; 
        echo 'alert("Please enter a password");';
        echo 'window.location.href = "index.php?page=login";';
        echo '</script>';
    }
    else{
        if(strlen($password) < 8) {
            echo '<script>'; 
            echo 'alert("Password is too short!");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        }
        if(!preg_match('/\d/', $password)) {
            echo '<script>'; 
            echo 'alert("Password must contain at least 1 number");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        }
        if(!preg_match('/[A-Z]/', $password)) {
            echo '<script>'; 
            echo 'alert("Password must contain at least 1 uppercase letter");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        } 
        $sql = "SELECT * FROM web_db.user WHERE username ='$uname' AND password ='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) != 0){
            session_start();
            $_SESSION['user'] = $uname;
            setcookie("user", $uname, time() + (86400 * 30), "/");
            echo '<script>'; 
            echo 'alert("Login successfully!");';
            echo 'window.location.href = "index.php?page=home";';
            echo '</script>';
        }
        else{
            echo '<script>'; 
            echo 'alert("Wrong email or password!");';
            echo 'window.location.href = "index.php?page=login";';
            echo '</script>';
        }
    }
}
?>