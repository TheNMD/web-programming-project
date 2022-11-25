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
    <nav id="navbar" class="navbar navbar-expand-sm fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #315336">THE HERBAL STORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsible-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="collapsible-navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <form method="post" action="Homepage.php">
                <button id="navbtn" type="submit" class="btn">Home</button>
              </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Product </a>
              <ul class="dropdown-menu">
                <li>
                  <form method="post" action="Med.php">
                    <button id="innernavbtn" type="submit" class="btn">Medicine</button>
                  </form>
                </li>
                <li>
                  <form method="post" action="FuncFood.php">
                    <button id="innernavbtn" type="submit" class="btn">Functional food</button>
                  </form>
                </li>
                <li>
                  <form method="post" action="Cosmetics.php">
                    <button id="innernavbtn" type="submit" class="btn">Cosmetics</button>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <form method="post" action="About.php">
                <button id="navbtn" type="submit" class="btn">About</button>
              </form>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <form method="post" action="#" onsubmit="return false;">
                <button id="navbtn1" type="submit" class="btn">Register</button>
                <?php
                  if(isset($_SESSION['user'])) {
                    echo '
                      <script type="text/JavaScript">
                        document.getElementById("navbtn1").innerHTML = "'.$_SESSION["user"].'";
                      </script>
                    ';
                  }
                ?>
              </form>
            </li>
            <?php
                if(isset($_SESSION['user'])) {
                  echo '
                    <li class="nav-item">
                      <form method="post" action="Logout_process.php">
                        <button id="navbtn" type="submit" class="btn">Logout</button>
                      </form>
                    </li>
                  ';
                }
                else {
                  echo '
                    <li class="nav-item">
                      <form method="post" action="Login.php">
                        <button id="navbtn" type="submit" class="btn">Login</button>
                      </form>
                    </li.
                  ';
                }
              ?>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>