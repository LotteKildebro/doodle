<?php 
 $_SESSION['logged_in'] = true; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My style -->
    <link rel="stylesheet" type="text/css" href="style/style.css?d=<?php echo time(); ?>" />
    <!-- bootstrap cdn CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- popper cdn -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Mikis Island Escape</title>
    <link rel="shortcut icon" href="images/banana.png">
</head>

<body>
 <!--nav-->
 <div class="bs">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a href="index.php" class="navbar-brand">
                        <img src="images/logo.png" height="28" alt="CoolBrand">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="about.php" class="nav-item nav-link active">About</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="playgame.php" class="nav-item nav-link">Play game</a>
                            <a href="game.php" class="nav-item nav-link">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link ">Sign up</a>
                      
                        <a href="login.php" class="nav-item nav-link "  id="login_btn">Login</a>
                      
                    
                        </div>
                    </div>
                </nav>
            </div>

            <!--nav end-->
        <!-- header -->
        <header class="header" id="header3">
            <div class="left">
                <div class="caption">
                    <h2 class="title">The Developer</h2>
                    <p class="text">Miki's island escape is developed by a student at cph. business school.
                    This game was a project for the frontend developer exam, the game is made made vanilla JavaScript 
                    and the characters are handmade drawings.
                    </p>
                    <a class="mybutton" href="playgame.php">Play game<a>
                </div>
            </div>
        </header>
        <div class="wrapper"> 
            <!-- game play container -->
        <div class="cointainer  whitebg">
            <div class="row">
                <div class="col-sm-6 col-m-12 col-l-12">
                   <center> <img src="images/lotte.png" alt="picture of game">  </center> 

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text ">
                    <h2>Developer</h2>
        <p>My name is Lotte and I will like to say thanks for stopping by, 
        I made this cute little game that I hope you wanna try out. If you have any questions for me personally 
        feel free to contact me. You can reach me by number or e-mail.
        </p>

</div>
</div>
</div>

<!-- end wrapper -->
</div>
<!--contact info-->
<div class="cointainer contact-info">

<div class="row">

<div class="col-sm-4 col-m-4 col-l-4 contact_icons"><center><i class="fa fa-phone fa-5x" aria-hidden="true"></i>
</br><p>Phone</br> +45 53639591</p>
</center></div>
<div class="col-sm-4 col-m-4 col-l-4 contact_icons"><center><i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
</br><p>E-mail</br> Jottee@live.dk</p></center></div>
<div class="col-sm-4 col-m-4 col-l-4 contact_icons" ><center><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
</br><p>Adress </br>Slothsfogedvej 3 st, 2200 NV</p></center></div>
</div>


</div>





  <!-- Footer -->
  <footer>

<!-- Copyright -->
</br>

<p>&copy; 2020 DOODLE GAMES ApS</p>

<!-- Add font awesome icons -->

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-instagram"></a>
</footer>
<!-- Footer -->


   
    <script src="script.js"></script>
</body>

</html>


