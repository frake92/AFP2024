<?php
    require_once './API/connection.php';
    session_start();

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND role = 'admin'";        
        $result = $stmt->get_result();
        
    }
?>
