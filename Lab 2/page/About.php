<!DOCTYPE html>
<html lang="en">
  <head>
      <title>About</title>
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
                <li><a class="dropdown-item" href="AIML.php" style="color: #315336;">AI & ML</a></li>
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
    <div id="about" class="container-fluid pt-4 py-4">
        <div class="row d-flex justify-content-center">
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                <img src="../image/Me.JPG" class ="img-thumbnail" alt="Card image cap" style="height:700px; width:400px">
            </div>
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Rhoncus est pellentesque elit ullamcorper dignissim cras. Maecenas ultricies mi eget mauris. Dignissim enim sit amet venenatis urna cursus.<br>
                Dignissim enim sit amet venenatis urna cursus eget. Suscipit tellus mauris a diam. Massa sed elementum tempus egestas sed sed. Nunc vel risus commodo viverra maecenas accumsan lacus vel. Placerat orci nulla pellentesque dignissim enim sit amet. Magna etiam tempor orci eu lobortis elementum nibh.<br>
                Tincidunt id aliquet risus feugiat in ante. Adipiscing tristique risus nec feugiat in fermentum posuere urna nec. At erat pellentesque adipiscing commodo elit at imperdiet. Leo urna molestie at elementum eu facilisis. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Diam maecenas ultricies mi eget mauris. Blandit turpis cursus in hac habitasse platea dictumst. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Cursus sit amet dictum sit amet justo donec. Aenean sed adipiscing diam donec adipiscing. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae.</br>
                Ut lectus arcu bibendum at varius vel pharetra. Ipsum dolor sit amet consectetur adipiscing. Pellentesque sit amet porttitor eget dolor morbi non. Nec ullamcorper sit amet risus nullam eget felis eget. Mauris sit amet massa vitae tortor. Egestas tellus rutrum tellus pellentesque eu tincidunt. Nec feugiat in fermentum posuere urna nec tincidunt praesent.
            </div>
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                Nunc id cursus metus aliquam eleifend mi in nulla. Massa enim nec dui nunc mattis enim. Nunc aliquet bibendum enim facilisis gravida. Turpis cursus in hac habitasse platea dictumst quisque. Est velit egestas dui id ornare arcu odio ut sem.<br>
                Volutpat blandit aliquam etiam erat velit. Metus aliquam eleifend mi in nulla posuere. Adipiscing vitae proin sagittis nisl. Erat nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi. Est ultricies integer quis auctor elit sed vulputate mi. Nam aliquam sem et tortor consequat id porta. Vitae turpis massa sed elementum tempus egestas sed sed risus. Ac turpis egestas maecenas pharetra convallis posuere morbi leo.
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
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.github.com" role="button"
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