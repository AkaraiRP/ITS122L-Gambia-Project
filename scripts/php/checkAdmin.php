<?php 
    function checkAdmin($conn, $id) {
        $stmt = $conn -> query("SELECT * FROM admins WHERE user_id = (SELECT user_id FROM users WHERE user_id = $id)");
        if ($stmt -> fetch()) {
            return true;
        }
        return false;
    }
?>