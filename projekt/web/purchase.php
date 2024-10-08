<?php

    require_once "./API/connection.php";

    session_start();

    if (isset($_SESSION['user_id']) && isset($_POST['gunId'])) {
        $user_id = $_SESSION['user_id'];
        $gun_id = $_POST['gunId'];

        $sql = $conn->prepare("INSERT INTO inventories (user_id, gun_id) VALUES (?, ?)");
        $sql->bind_param("ii", $user_id, $gun_id);

        if ($sql->execute()) {
            header("Location: storagepage.php");  
            exit();
        } else {
            echo '<script>
                    window.location.href = "marketplace.php";
                    alert("Sikertelen vásárlás!");
                </script>';
        }

    } else {
        echo '<script>
                    window.location.href = "marketplace.php";
                    alert("Sikertelen vásárlás!");
                </script>';
    }

?>