<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header("location: /Dashboard/home.php");
        exit();
    }
    else {
        header("location: /Dashboard/login.php");
        exit();
    }
?>