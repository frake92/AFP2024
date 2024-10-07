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
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShadowWeb</title>

    <style>

      .image-container {
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
          justify-content: center; /* Középre igazítás */
          width: 100%; /* Teljes szélesség kihasználása */
          padding: 20px; /* Extra tér a tartalom körül */
      }

      .image-box {

          padding: 10px;
          text-align: center;
          width: 350px; /* Fix szélesség */
          height: auto;
          
          overflow: hidden; /* Vágja le a kép túlcsordulását */
      }

      .image-box img {
          width: 100%;
          height: 80%;
          
        
      }
      .thumbnail {
          width: 100%; /* Kép szélessége a doboz szélességéhez igazítva */
          height: auto; /* Magasság automatikusan beállítva */
          border-radius: 5px; /* Kerekített sarkok (opcionális) */
      } 
      </style>


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
            <a class="nav-link" href="storagepage.php">Raktár</a>
            <a class="nav-link active" aria-current="page" href="#">Piac</a>
            <a class="nav-link" href="logout.php">Kijelentkezés</a>
          </div>
        </div>
      </div>
    </nav>
    <!--#endregion -->
    
    <?php 

$sql = "SELECT * FROM guns";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="image-container">'; // Kezdjük el a konténert a képekhez
    while($row = $result->fetch_assoc()) {
        echo '<div class="image-box">';
        // Modal aktiváló link
        echo '<a href="#" data-bs-toggle="modal" data-bs-target="#imageModal" 
            data-bs-image="' . $row['picture_path'] . '" 
            data-bs-name="' . $row['gun_name'] . '" 
            data-bs-price="' . $row['price'] . '" 
            data-bs-description="' . $row['description'] . '">';
        echo '<img src="' . $row['picture_path'] . '" alt="' . $row['gun_name'] . '" class="thumbnail">';
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "Nincsenek adatok.";
}
$conn->close();
?>

<!-- Modal HTML -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Fegyver részletei</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid" alt="Kép" />
                <h5 id="modalName"></h5>
                <p id="modalDescription"></p>
                <p id="modalPrice"></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS és jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Modal adatok betöltése -->
<script>
    // Minden kép linkre kattintva, frissítjük a modal tartalmát
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // A kattintott kép
        var image = button.data('bs-image');
        var name = button.data('bs-name');
        var price = button.data('bs-price');
        var description = button.data('bs-description');

        var modal = $(this);
        modal.find('#modalImage').attr('src', image);
        modal.find('#modalName').text(name);
        modal.find('#modalPrice').text('Ár: ' + price + ' Ft');
        modal.find('#modalDescription').text(description);
    });
</script>


<!-- Teszt -->

    <script src="script.js"></script>
  </body>
</html>
