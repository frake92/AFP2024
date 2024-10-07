<?php
require_once './API/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $userId = intval($_POST['id']);
        deleteUser($conn, $userId); 
    } else {        
        header("Location: admin_users.php?error=Nincs megadva felhasználó ID");
        exit();
    }
}

function deleteUser($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: admin_users.php?message=Felhasználó sikeresen törölve");
        } else {
            echo "Hiba történt a törlés során: " . $stmt->error;
        }
    } else {
        header("Location: admin_users.php?error=Felhasználó nem található");
    }
}

$conn->close();
?>
