<?php

require_once './connection.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $user_id = $_GET['user_id'];
        getItems($conn, $user_id);
        break;
    case 'POST':
        $user_id = $_GET['user_id'];
        $gun_id = $_GET['gun_id'];
        createItem($conn, $user_id, $gun_id);
        break;
    case 'DELETE':
        $id = $_GET['id'];
        deleteItem($conn, $id);
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Nem támogatott metodika"));
        break;
}

function getItems($conn, $user_id) {
    $sql = "SELECT gun_name, price, bought_at FROM guns INNER JOIN inventories ON guns.id = inventories.gun_id INNER JOIN users ON users.id = inventories.user_id WHERE users.id = $user_id ORDER BY inventories.bought_at ASC";
    $result = $conn->query($sql);
    $items = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
        echo json_encode($items);
    } else {
        echo json_encode(array("message" => "Felszerelések nem találhatók"));
    }
}

function createItem($conn, $user_id, $gun_id) {
    $sql = "INSERT INTO inventories (user_id, gun_id) VALUES ($user_id, $gun_id)";
    if ($conn->query($sql) === TRUE) {
        $itemId = $conn->insert_id;
        echo json_encode(array("message" => "Felszerelés sikeresen feltöltve", "id" => $itemId));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Hiba a feltöltés során"));
    }
}

function deleteItem($conn, $id) {
    $sql = "SELECT * FROM inventories WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "DELETE FROM inventories WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => "Felszerelés sikeresen törölve"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Hiba történt a törlés során"));
        }
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felszerelés nem található"));
    }
}

?>