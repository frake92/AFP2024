<?php
    require_once './API/connection.php';
    session_start();

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND role = 'admin'";        
        $result = $stmt->get_result();
        
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['admin_id'] = $row['id'];  
            header("Location: adminpage.php");   
            exit();
        } else {
            echo '<script>
                window.location.href = "admin.php";
                alert("Belépés sikertelen.")
                </script>';
    }
?>
