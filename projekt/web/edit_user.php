<?php
require_once './API/connection.php';
session_start();


if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);
    
    $sql = "SELECT * FROM users WHERE id = $userId";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $role = $_POST['role'];

    $updateSql = "UPDATE users SET username = ?, password = ?, email = ?, birthdate = ?, role = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("sssssi", $username, $password, $email, $birthdate, $role, $userId);
    $stmt->execute();

    header("Location: admin_users.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerkesztés - Felhasználó</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-4">
        <h2>Felhasználó Szerkesztése</h2>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Felhasználónév</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Jelszó</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Születési Dátum</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($user['birthdate']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rang</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="user" <?php echo $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mentés</button>
            <a href="admin_users.php" class="btn btn-secondary">Vissza</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
