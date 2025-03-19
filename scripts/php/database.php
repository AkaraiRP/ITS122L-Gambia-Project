<?php
    include 'get-login.php';
    
    $conn = "";

    $conn = new PDO("mysql:host=$db_server;dbname=$db_name",
                        $db_user, $db_pass) or die("Unable to connect!");


    function clearStoredResults(){
        global $conn;

        do {
                if ($res = $conn->store_result()) {
                $res->free();
                }
        } while ($conn->more_results() && $conn->next_result());        
        
    }
?>