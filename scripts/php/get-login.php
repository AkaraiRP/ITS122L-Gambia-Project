<?php
    $file = dirname(__FILE__) . "\login.txt";
    $file_info = file($file);

    function sanitize($str) {
        $str = str_replace( array( "\r", "\r\n", "\n" ), '', $str );
        return $str;
    }

    $db_server = sanitize($file_info[0]);
    $db_user = sanitize($file_info[1]);
    $db_pass = sanitize($file_info[2]);
    $db_name = sanitize($file_info[3]);
?>