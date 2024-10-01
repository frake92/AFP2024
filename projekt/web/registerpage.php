<?php 
  require_once './API/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
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
            <a class="nav-link" href="index.php">Kezdőlap</a>
            <!-- <a class="nav-link" href="marketplace.php">Piac</a> -->
            <!-- <a class="nav-link active" aria-current="page" href="#">Belépés</a> -->
          </div>
        </div>
      </div>
      </nav>
    <!--#endregion -->
    
    <!--#region register-->
    <div class="container" id="signUp">
        <h1 class="form-title">Regisztráció</h1>

        <form method="POST" action="register.php">
          
          </div>
          <div class="input-group">
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Felhasználónév"
              required
            />
          </div>
          <div class="input-group">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="E-mail cím"
              required
            />
          </div>
          <div class="input-group">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Jelszó"
              required
            />
          </div>
          <div class="input-group">
            <input
              type="date"
              name="birthdate"
              id="birthdate"
              placeholder="Születési idő"
              required
            />
          </div>
          <input type="submit" class="btn" value="Regisztrálás" name="signUp" />
          <a href="loginpage.php">Már van fiókom!</a>
        </form>
      </div>
    <!--#endregion -->

    <script src="script.js"></script>
  </body>
</html>
