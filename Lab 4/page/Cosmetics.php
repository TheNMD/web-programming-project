<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Cosmetics</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link href="../css/Common.css" rel="stylesheet">
      <?php
        include "DB_connect.php";
        $cosmetics = "SELECT Name, Price FROM web.product WHERE Type = 'Cosmetics'";
        $result_cosmetics = mysqli_query($conn, $cosmetics);
      ?>
  </head>
  <body>
    <!-- Navbar -->
    <?php
      include('Navbar.php');
    ?>
    <!-- Content -->
    <div id="med" class="container-fluid pt-4 py-4">
      <div class="row pt-2 p-4 d-flex justify-content-center">
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/1.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/2.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/3.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/4.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-2 p-4 d-flex justify-content-center">
      <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/5.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/6.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/7.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
            </div>
          </div>
        </div>
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/cosmetics/8.jpg" alt="Card image cap">
            <div class="card-body">
              <?php
                  $rows = $result_cosmetics->fetch_assoc();
              ?>
              <h4 class="card-title"><?php echo $rows['Name']; ?></h4>
              <h6 class="card-title"><?php echo $rows['Price']; ?> VND</h6>
              <a id="card_button" href="#" class="btn" role="button">Buy now!</a>
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