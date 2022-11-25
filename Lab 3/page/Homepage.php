<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Home</title>
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
      include('navbar.php');
    ?>
    <!-- Content -->
    <div class="container-fluid pt-4 py-4">
      <div class="row pt-2 p-4 d-flex justify-content-center">
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <h1>WELCOME TO MY PORTFOLIO</h1>
        </div>
      </div>
    </div> 
    <!-- Footer -->
    <?php
      include('footer.php');
    ?>
  </body>
</html>