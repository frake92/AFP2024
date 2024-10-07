<?php

  require_once './API/connection.php';
  
  session_start();
  
  if(!isset($_SESSION['user_id'])) {
    header('Location: loginpage.php');
    exit();
  }

?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShadowWeb</title>
  </head>
  <body>
    <!--#region navbar -->
    <nav
      class="navbar navbar-expand-lg bg-dark navbar-fixed-top"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ShadowWeb</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Raktár</a>
            <a class="nav-link" href="marketplace.php">Piac</a>
            <a class="nav-link" href="logout.php">Kijelentkezés</a>
          </div>
        </div>
      </div>
    </nav>
    <!--#endregion -->

<?php

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT guns.gun_name, guns.price, inventories.bought_at FROM inventories INNER JOIN guns ON inventories.gun_id = guns.id INNER JOIN users ON users.id = inventories.user_id WHERE inventories.user_id = $user_id";
    $result = $conn->query($sql);
    echo "<div class='container' id='storage-container'>";
    if ($result->num_rows > 0) {
      $numberOfRow = 1;
        echo "<table class='guns-container'>";
          echo "<tr>";
            echo "<th>Sorszám</th>";
            echo "<th>Fegyver név</th>";
            echo "<th>Ár</th>";
            echo "<th>Vásárlás ideje</th>";
          echo "</tr>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
              echo "<td>$numberOfRow.</td>";
              echo "<td>". $row['gun_name'] ."</td>";
              echo "<td>". $row['price'] ." Ft</td>";
              echo "<td>". $row['bought_at'] ."</td>";
            echo "</tr>";
            $numberOfRow += 1;
          }
        echo "</table>";
    } else {
      echo "<p id='error-p'>Nincsenek tárgyak a raktárodban.</p>";
      echo "<a class='link-log-reg' href='marketplace.php'>Vissza a piacra</a>";
    }

    echo "</div>";
?>

    <script src="script.js"></script>
  </body>
</html>
