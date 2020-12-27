<?php
    session_start()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TravelSafe</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

    <style>
        #parallax {
          height: 100vh;
          width: 100%;
          background-image: url(assets/img/places/taj-mahal.jpg);
          background-size: cover;
          display: table;
          background-attachment: fixed;
        }
        
        #parallax1 {
          height: 100vh;
          width: 100%;
          background-image: url(assets/img/places/Khajuraho.jpg);
          background-size: cover;
          display: table;
          background-attachment: fixed;
        }
        
        h1 {
          font-family: arial black;
          font-size: 50px;
          color: black;
          margin: 0px;
          text-align: center;
          display: table-cell;
          vertical-align: middle;
        }
        </style>

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top clean-navbar" style="background: rgb(0,0,0);height: 180px;">
        <div class="container-fluid"><a class="navbar-brand logo" href="#"><img src="assets/img/logo/logo2.png" style="width: 150px;height: 135px;margin-bottom: -20px;margin-top: -20px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="about-us.php" style="font-size: 18px;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact-us.html" style="font-size: 18px;">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php" style="font-size: 18px;">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php" style="font-size: 18px;">Register</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main style="margin-top: 100px;">
        <div>
            <div id="parallax">
                <h1>TravelSafe</h1>
            </div>
            <div id="parallax1">
                <h1>
                    <a class="button" role="button" style="background: transparent;color: black;"href="register.php">Get Started</a>
                </h1>
            </div>
        </div>
    </main>
    <div class="text-white footer-basic" style="background: rgb(0,0,0);">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="login.php">Login</a></li>
                <li class="list-inline-item"><a href="register.php">Register</a></li>
            </ul>
            <p class="copyright">TravelSafe © 2020 All rights reserved</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
</body>

</html>