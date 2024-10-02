<?php

require_once 'connection.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            getGun($conn, $id);
        } else {
            getGuns($conn);
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        createGun($conn, $data);
        break;
    case 'PUT':
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        updateGun($conn, $data, $id);
        break;
    case 'DELETE':
        $id = $_GET['id'];
        deleteGun($conn, $id);
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Nem támogatott metodika"));
        break;
}

function getGuns($conn) {
    $sql = "SELECT * FROM guns";
    $result = $conn->query($sql);
    $guns = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $guns[] = $row;
        }
        echo json_encode($guns);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felszerelések nem találhatók"));
    }
}

function getGun($conn, $id) {
    $sql = "SELECT * FROM guns WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $gun = $result->fetch_assoc();
        echo json_encode($gun);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felszerelés nem található"));
    }
}

function createGun($conn, $data) {
    $gunName = $data['gunName'];
    $price = $data['price'];
    $pictureName = $data['pictureName'];
    # Ide még meg kell írni egy útvonalat, valami ../Images/$pictureName
    # $picturePath = ;
    $description = $data['description'];
    $sql = "INSERT INTO guns (gun_name, price, picture_path, description) VALUES ('$gunName', $price, '$picturePath', '$description')";
    if ($conn->query($sql) === TRUE) {
        $gunId = $conn->insert_id;
        echo json_encode(array("message" => "Felszerelés sikeresen feltöltve", "id" => $gunId));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Hiba történt a feltöltés során"));
    }
}

function updateGun($conn, $data, $id) {
    $sql = "SELECT * FROM guns WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $gunName = $data['gunName'];
        $price = $data['price'];
        $pictureName = $data['pictureName'];
        # Ide még meg kell írni egy útvonalat, valami ../Images/$pictureName
        # $picturePath = ;
        $description = $data['description'];
        $sql = "UPDATE guns SET gun_name = '$gunName', price = $price, picture_path = '$picturePath', description = '$description' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => "Felszerelés módosítva"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Hiba történt a módosítás során"));
        }
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felszerelés nem található"));
    }
}

function deleteGun($conn, $id) {
    $sql = "SELECT * FROM guns WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "DELETE FROM guns WHERE id = $id";
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