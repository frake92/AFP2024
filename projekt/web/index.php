<?php 

  require_once './API/connection.php';

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
      html, body {
        margin: 0;
        padding: 0;
        height: 100%;
      }


      body {
          background-image: url('./images/shadowweb.png');
          background-size: cover;
          background-position: center; 
          background-repeat: no-repeat;
          min-height: 100vh;
      }

      
      @media (max-width: 768px) {
          body {
              background-size: cover;
              background-position: center;
          }
      }

      @media (max-width: 480px) {
          body {
              background-size: cover;
              background-position: center center;
          }
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
            <a class="nav-link active" aria-current="page" href="#">Kezdőlap</a>
            <!--<a class="nav-link" href="marketplace.php">Piac</a> -->
            <a class="nav-link" href="loginpage.php">Belépés</a>
            <a class="nav-link" href="registerpage.php">Regisztráció</a>
          </div>
        </div>
      </div>
    </nav>
    <!--#endregion -->

    <script src="script.js"></script>
  </body>
</html>
