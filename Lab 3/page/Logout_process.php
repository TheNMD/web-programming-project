<?php
    session_start();
    session_destroy();
    echo '<script type="text/javascript">'; 
    echo 'alert("Logout successfully!");';
    echo 'window.location.href = "Homepage.php";';
    echo '</script>';
?>