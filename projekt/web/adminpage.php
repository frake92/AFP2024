<?php
require_once './API/connection.php';

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: loginpage.php');
    exit();
}

if (isset($_POST['add_weapon'])) {
    $gun_name = $_POST['gun_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $picture_path = $_POST['picture_path'];

    
    $stmt = $conn->prepare("INSERT INTO guns (gun_name, price, description, picture_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $gun_name, $price, $description, $picture_path);
    
    if ($stmt->execute()) {
        echo "<script>alert('Fegyver sikeresen hozzáadva!');</script>";
    } else {
        echo "<script>alert('Hiba történt a fegyver hozzáadása során.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fegyver hozzáadása</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ShadowWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">                
                    <a class="nav-link active" href="adminpage.php">Fegyver hozzáadás</a>
                    <a class="nav-link" href="admin_users.php">Felhasználók megtekintése</a>
                    <a class="nav-link" href="logout.php">Kijelentkezés</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <h2>Új fegyver hozzáadása</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="gun_name" class="form-label">Fegyver neve</label>
                <input type="text" class="form-control" id="gun_name" name="gun_name" required />
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Ár</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Leírás</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="picture_path" class="form-label">Kép URL</label>
                <input type="text" class="form-control" id="picture_path" name="picture_path" required />
            </div>
            <button type="submit" name="add_weapon" class="btn btn-primary">Hozzáadás</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
