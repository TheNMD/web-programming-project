<?php
    $user = array(
        array("abc@gmail.com", "Abc123456"),
        array("xyzkk@gmail.com", "4747TryLPST"),
        array("random@gmail.com", "H588rone559"),
        array("cool@gmail.com", "78o744HasPP")
    );
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(strlen($password) < 8) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Password is too short!");';
        echo 'window.location.href = "Login.php";';
        echo '</script>';
        exit(); 
    }
    if(!preg_match('/[A-Z]/', $password)) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Password must contain at least 1 uppercase letter");';
        echo 'window.location.href = "Login.php";';
        echo '</script>';
        exit(); 
    } 
    if(!preg_match('/\d/', $password)) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Password must contain at least 1 number");';
        echo 'window.location.href = "Login.php";';
        echo '</script>';
        exit(); 
    }
    for($i = 0; $i < count($user); $i++) {
        if($email == $user[$i][0] and $password == $user[$i][1]) {    
            session_start();
            $_SESSION['user'] = $user[$i][0];
            setcookie("user", $email, time() + (86400 * 30), "/");
            echo '<script type="text/javascript">'; 
            echo 'alert("Login successfully!");';
            echo 'window.location.href = "Homepage.php";';
            echo '</script>';
            exit();
        }
    }
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong email or password!");';
    echo 'window.location.href = "Login.php";';
    echo '</script>';
    exit(); 
?>