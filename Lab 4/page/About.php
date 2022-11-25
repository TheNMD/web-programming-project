<?php session_start(); ?>

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
    <?php
      include('Navbar.php');
    ?>
    <!-- Content -->
    <div id="about" class="container-fluid pt-4 py-4">
        <div class="row d-flex justify-content-center">
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                <img src="../image/Logo1.png" class ="img-thumbnail" alt="Card image cap" style="width: 500px; height: 500px;">
            </div>
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Rhoncus est pellentesque elit ullamcorper dignissim cras. Maecenas ultricies mi eget mauris. Dignissim enim sit amet venenatis urna cursus.<br>
                Dignissim enim sit amet venenatis urna cursus eget. Suscipit tellus mauris a diam. Massa sed elementum tempus egestas sed sed. Nunc vel risus commodo viverra maecenas accumsan lacus vel. Placerat orci nulla pellentesque dignissim enim sit amet. Magna etiam tempor orci eu lobortis elementum nibh.<br>
                Tincidunt id aliquet risus feugiat in ante. Adipiscing tristique risus nec feugiat in fermentum posuere urna nec. At erat pellentesque adipiscing commodo elit at imperdiet. Leo urna molestie at elementum eu facilisis. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Diam maecenas ultricies mi eget mauris. Blandit turpis cursus in hac habitasse platea dictumst. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Cursus sit amet dictum sit amet justo donec. Aenean sed adipiscing diam donec adipiscing. Tortor pretium viverra suspendisse potenti nullam ac tortor vitae.</br>
                Ut lectus arcu bibendum at varius vel pharetra. Ipsum dolor sit amet consectetur adipiscing. Pellentesque sit amet porttitor eget dolor morbi non. Nec ullamcorper sit amet risus nullam eget felis eget. Mauris sit amet massa vitae tortor. Egestas tellus rutrum tellus pellentesque eu tincidunt. Nec feugiat in fermentum posuere urna nec tincidunt praesent.</br>
                Cursus euismod quis viverra nibh cras. Lacus sed turpis tincidunt id aliquet risus feugiat in. Sed blandit libero volutpat sed cras ornare arcu dui vivamus. Nec dui nunc mattis enim. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Elit pellentesque habitant morbi tristique senectus. Velit dignissim sodales ut eu sem integer vitae. Neque vitae tempus quam pellentesque. Ullamcorper sit amet risus nullam.
            </div>
            <div class="col-sm pt-2 py-2 d-flex justify-content-center">
                Nunc id cursus metus aliquam eleifend mi in nulla. Massa enim nec dui nunc mattis enim. Nunc aliquet bibendum enim facilisis gravida. Turpis cursus in hac habitasse platea dictumst quisque. Est velit egestas dui id ornare arcu odio ut sem.<br>
                Volutpat blandit aliquam etiam erat velit. Metus aliquam eleifend mi in nulla posuere. Adipiscing vitae proin sagittis nisl. Erat nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi. Est ultricies integer quis auctor elit sed vulputate mi. Nam aliquam sem et tortor consequat id porta. Vitae turpis massa sed elementum tempus egestas sed sed risus. Ac turpis egestas maecenas pharetra convallis posuere morbi leo.</br>
                Odio eu feugiat pretium nibh ipsum consequat nisl vel pretium. Nulla porttitor massa id neque aliquam vestibulum. Ornare suspendisse sed nisi lacus sed viverra tellus. Aenean sed adipiscing diam donec. Neque ornare aenean euismod elementum nisi. Consequat nisl vel pretium lectus quam. Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Imperdiet massa tincidunt nunc pulvinar. Tincidunt dui ut ornare lectus. Lacus viverra vitae congue eu consequat. Et netus et malesuada fames ac turpis.
            </div>
        </div>
    </div> 
    <!-- Footer -->
    <?php
      include('Footer.php');
    ?>
  </body>
</html>