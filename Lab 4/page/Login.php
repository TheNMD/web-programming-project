<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Login</title>
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
    <div id="cont" class="container-fluid pt-4 py-4">
      <div class="row pt-2 p-4 d-flex justify-content-center">
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card">
            <div class="card-body">
              <form method="post" action="login_process.php">
                <div class="form-outline">
                  <input type="email" name="email" id="login_email" class="form-control"/>
                  <label class="form-label" for="login_email">Email address (Default: abc@gmail.com)</label>
                </div>
                <div class="form-outline">
                  <input type="password" name="password" id="form_password" class="form-control"/>
                  <label class="form-label" for="form_password">Password (Default: Abc123456)</label>
                </div>
                <button style="background-color: #5daa68; "type="submit" class="btn btn-primary btn-block">Log in</button>
              </form>
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