<?php

require_once './connection.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        
        break;
    case 'POST':
        
        break;
    case 'PUT':
        
        break;
    case 'DELETE':
        
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Nem támogatott metodika"));
        break;
}

?>