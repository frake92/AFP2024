<?php
    include("connection.php");

    session_start();

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1) {
             header("Location: marketplace.php");
        } else {
            echo '<script>
                window.location.href = "loginpage.php";
                alert("Belépés sikertelen.")
                </script>';
        }           

    }

?>