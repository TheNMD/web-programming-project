<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>AIML</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link href="../css/Common.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar -->
    <?php
      include('Navbar.php');
    ?>
    <!-- Content -->
    <div id="aiml" class="container-fluid pt-4 py-4">
      <div class="row pt-2 p-4 d-flex justify-content-center">
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/Covid.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">COVID-19 Prediction</h5>
              <a id="card_button" href="https://github.com/TheNMD/ai-project" class="btn" role="button">Check it out!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/SB.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Stable Diffusion</h5>
              <a id="card_button" href="https://github.com/TheNMD/ai-project" class="btn" role="button">Check it out!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/Handwritten.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Digit Recognition</h5>
              <a id="card_button" href="https://github.com/TheNMD/ai-project" class="btn" role="button">Check it out!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/TBD.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">TBD</h5>
              <a id="card_button" href="https://github.com" class="btn" role="button">Check it out!</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- Footer -->
    <?php
      include('Footer.php');
    ?>
  </body>
</html>