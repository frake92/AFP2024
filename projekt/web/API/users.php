<?php

require_once './connection.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            getUser($conn, $id);
        } else {
            getUsers($conn);
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        createUser($conn, $data);
        break;
    case 'PUT':
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        updateUser($conn, $data, $id);
        break;
    case 'DELETE':
        $id = $_GET['id'];
        deleteUser($conn, $id);
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Nem támogatott metodika"));
        break;
}

function getUsers($conn) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode($users);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felhasználók nem találhatók"));
    }
}

function getUser($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo json_encode($user);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felhasználó nem található"));
    }
}

function createUser($conn, $data) {
    $username = $data['username'];
    $password = $data['password'];
    $email = $data['email'];
    $birthdate = $data['birthdate'];
    $sql = "INSERT INTO users (username, password, email, birthdate) VALUES ('$username', '$password', '$email', '$birthdate')";
    if ($conn->query($sql) === TRUE) {
        $userId = $conn->insert_id;
        echo json_encode(array("message" => "Felhasználó sikeresen feltöltve", "id" => $userId));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Hiba történt a feltöltés során"));
    }
}

function updateUser($conn, $data, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        $birthdate = $data['birthdate'];
        $role = $data['role'];
        $sql = "UPDATE users SET username = '$username', password = '$password', email = '$email', birthdate = '$birthdate', role = '$role' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => "Felhasználó módosítva"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Hiba történt a módosítás során"));
        }
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felhasználó nem található"));
    }
}

function deleteUser($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "DELETE FROM users WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => "Felhasználó sikeresen törölve"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Hiba történt a törlés során"));
        }
    } else {
        http_response_code(404);
        echo json_encode(array("message" => "Felhasználó nem található"));
    }
}

?>