<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header("location: /Dashboard/Home.php");
        exit();
    }
    else {
        header("location: /Dashboard/login.php");
        exit();
    }
?>