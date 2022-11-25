<?php
    $user = array(
        array("abctyr@gmail.com", "123Abc995ee"),
        array("xyzkk@gmail.com", "4747TryLPST"),
        array("random@gmail.com", "H588rone559"),
        array("cool@gmail.com", "78o744HasPP")
    );
    $email = $_POST['email'];
    $password = $_POST['password'];
    for($i = 0; $i < count($user); $i++) {
        if($email == $user[$i][0] and $password == $user[$i][1]) {    
            session_start();
            $_SESSION['user'] = $user[$i][0];
            echo '<script type="text/javascript">'; 
            echo 'alert("Login successfully!");';
            echo 'window.location.href = "Login.php";';
            echo '</script>';
            exit();
        }
    }
    echo '<script type="text/javascript">'; 
    echo 'alert("Login failed!");';
    echo 'window.location.href = "Login.php";';
    echo '</script>';
    exit(); 
?>