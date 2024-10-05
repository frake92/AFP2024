<?php

    require_once './API/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        $username = $conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];
        $email = $conn->real_escape_string($_POST['email']);
        $birthdate = $_POST['birthdate'];
    
        $sql = "SELECT id FROM users WHERE email = '$email' OR username = '$username'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Felhasználónév vagy email cím már létezik!";
        } else {
            $sql = "INSERT INTO users (username, password, email, birthdate) VALUES ('$username', '$password', '$email','$birthdate')";
            if ($conn->query($sql) === TRUE) {
                header("Location: succesfulregistrationpage.php");
            } else {
                echo "Hiba történt: " . $conn->error;
            }
        }
    }
    
    $conn->close();
    
?>