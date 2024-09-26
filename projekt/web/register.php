<?php
    include("connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
    
        $sql = "SELECT id FROM users WHERE email='$email'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "Felhasználónév vagy email cím már létezik!";
        } else {
            $sql = "INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Sikeres regisztráció!'); window.location.href='loginpage.php';</script>";
            } else {
                echo "Hiba történt: " . $conn->error;
            }
        }
    }
    
    $conn->close();
?>