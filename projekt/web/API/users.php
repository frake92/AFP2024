<?php

require_once './API/connection.php';

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
        if (isset($_POST['logIn'])) {

        }
        elseif (isset($_POST['signUp'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $birthdate = $_POST['birthDate'];

            registUser($conn, $username, $email, $password, $birthdate);
        }
        break;
    case 'PUT':
        
        break;
    case 'DELETE':
        $id = $_GET['id'];
        deleteUser($conn, $id);
        break;
    case 'Login':
        $data = json_decode(file_get_contents('php://input'), true);
        
        break;
    default:
        http_response_code(405);
        echo "Nem támogatott metodika";
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
        echo $users;
    } else {
        http_response_code(404);
        echo "Felhasználók nem találhatók";
    }
}

function getUser($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo $user;
    } else {
        http_response_code(404);
        echo "Felhasználó nem található";
    }
}

function createUser($conn, $username, $password, $email, $birthdate) {
    
    $sql = "INSERT INTO users (username, password, email, birthdate) VALUES ('$username', '$password', '$email', '$birthdate')";
    if ($conn->query($sql) === TRUE) {
        $userId = $conn->insert_id;
        echo "Felhasználó sikeresen feltöltve";
    } else {
        http_response_code(500);
        echo "Hiba történt a feltöltés során";
    }
}
function loginuser($conn, $username, $password) {
    
    $sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password'";
    if ($conn->query($sql) === TRUE) {                
        header('Location: marketplace.php');
    } else {
        http_response_code(500);        
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

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo json_encode(array("message" => "Érvénytelen email cím"));
            return;
        }

        if ($conn->query($sql) === TRUE) {
            echo "Felhasználó módosítva";
        } else {
            http_response_code(500);
            echo "Hiba történt a módosítás során";
        }
    } else {
        http_response_code(404);
        echo "Felhasználó nem található";
    }
}

function deleteUser($conn, $id) {
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sql = "DELETE FROM users WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Felhasználó sikeresen törölve";
        } else {
            http_response_code(500);
            echo "Hiba történt a törlés során";
        }
    } else {
        http_response_code(404);
        echo "Felhasználó nem található";
    }
}

?>