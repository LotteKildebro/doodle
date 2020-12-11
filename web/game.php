
<?php 
session_start();
if(($_SESSION)['logged_in']==true){
?>

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
    <title>Mikis island escape</title>
</head>

<body>
    <container>
        <section>

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
                            <a href="#" class="nav-item nav-link active">About</a>
                            <a href="#" class="nav-item nav-link">Contact</a>
                            <a href="#" class="nav-item nav-link">Play game</a>
                            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Forum</a>
                        </div>
                        <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link">Sign up</a>
                            
                            <?php
                    if (($_SESSION['logged_in'])) {
                        echo '
                        <a href="logout.php" id="logout_btn" class="nav-item nav-link ">Log out</a>
                       ';
                    } else {
                        echo '
                        <a href="login.php" class="nav-item nav-link"  id="login_btn">Login</a>
                      
                        ';
                    }
                    ?>
                        </div>
                    </div>
                </nav>
            </div>

            <!--nav end-->
        </section>
        <!-- header -->
        <header class="header" id="header3" >
            <div class="left">
                <div class="caption">
                    <h2 class="title"><?php
      echo "Welcome ".$_SESSION['username']."";
      ?></h2>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam
                        maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti
                        iusto!
                    </p>
                    <a class="mybutton" href="playgame.php">Play game<a>
                </div>
            </div>
        </header>
        <div class="wrapper">
     
      

<div class="container">
    <div class="row">
    <div class="col-sm-6 col-m-12 col-l-12">
        <h2>Profile</h2>
    <?php
     echo "<div>".'<img style ="border-radius: 100px;" width="200px" src="images/'.$_SESSION['img'].'"/>'."</div>";
     echo "<p>"."Name:"." ".$_SESSION['username']."</p>";
     echo "<p>"."E-mail:"." ".$_SESSION['email']."</p>";
 
//print_r($_SESSION);
?>
</div>
<div class="col-sm-6 col-m-12 col-l-12">
   <h3> Bio</h3>
    <?php
    echo "<p>"."E-mail:"." ".$_SESSION['email']."</p>";
    ?>
</div>
</div>
</div>

        

        <!-- wrapper end-->
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


    </container>
    <script src="script.js"></script>
</body>

</html>

<?php 
}
else{
    header('location: login.php');
}
?>