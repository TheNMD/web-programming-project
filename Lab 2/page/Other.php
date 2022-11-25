<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Other</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link href="../css/Common.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-sm fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #315336">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsible-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="collapsible-navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Homepage.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Project </a>
              <ul class="dropdown-menu">
                <li li><a class="dropdown-item" href="AIML.php" style="color: #315336;">AI & ML</a></li>
                <li><a class="dropdown-item" href="NetworkDB.php" style="color: #315336;">Network & Database</a></li>
                <li><a class="dropdown-item" href="Other.php" style="color: #315336;">Other</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Content -->
    <div id="other" class="container-fluid pt-4 py-4">
      <div class="row pt-2 p-4 d-flex justify-content-center">
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/JMCP.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">UWC 2.0</h5>
              <a id="card_button" href="https://github.com/TheNMD/software-engineering-project" class="btn" role="button">Check it out!</a>
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
        <div class="col-sm pt-2 p-4 d-flex justify-content-center">
          <div class="card text-center">
            <img class="card-img-top" src="../image/TBD.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">TBD</h5>
              <a id="card_button" href="https://github.com" class="btn" role="button">Check it out!</a>
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
    <footer id="ftr" class="text-center fixed-bottom">
      <div class="container p-1">
        <section class="mb-0">
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com" role="button"
            ><i class="fab fa-twitter"></i
          ></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com" role="button"
            ><i class="fab fa-youtube"></i
          ></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a class="btn btn-outline-light btn-floating m-1" href="https://github.com" role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
      </div>
      <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright: Nguyen Manh Dan
      </div>
    </footer>
  </body>
</html>