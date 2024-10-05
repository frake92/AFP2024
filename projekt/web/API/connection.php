<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    // ADATBÁZIS NÉV!
    $db_name = "shadowweb";
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);

    if($conn->connect_error) {
        die("Csatlakozási hiba" .$conn->connect_error);
    }

?>