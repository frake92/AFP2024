<?php
    include("./API/connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
    
        $sql = "SELECT id FROM users WHERE email='$email'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Felhasználónév vagy email cím már létezik!";
        } else {
            $sql = $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Sikeres regisztráció!'); window.location.href='loginpage.php';</script>";
            } else {
                echo "Hiba történt: " . $conn->error;
            }
        }
    }
    
    $conn->close();
?>