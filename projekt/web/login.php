<?php

    require_once './API/connection.php';

    session_start();

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['role'] === 'admin') {
                $_SESSION['admin_id'] = $row['id'];  
                header("Location: adminpage.php");  
                exit();
            } elseif ($row['role'] === 'user') {
                $_SESSION['user_id'] = $row['id'];   
                header("Location: marketplace.php"); 
                exit();
            } else {               
                echo '<script>
                    window.location.href = "loginpage.php";
                    alert("Ismeretlen szerep.");
                </script>';
            }
        } else {            
            echo '<script>
                window.location.href = "loginpage.php";
                alert("Belépés sikertelen.");
            </script>';
        }
            

    }

?>