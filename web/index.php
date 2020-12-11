<?php include('nav.php'); ?>
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
</head>

<body>
  
        <!-- header -->
        <header class="header" id="header3">
            <div class="left">
                <div class="caption">
                    <h2 class="title">Miki's island escape!</h2>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ea accusamus enim hic, itaque eius quibusdam
                        maxime veritatis maiores, ipsum porro beatae. Quisquam deleniti maxime velit tempora, molestias corrupti
                        iusto!
                    </p>
                    <a class="mybutton" href="register.php">Sign up<a>
                </div>
            </div>
        </header>
        <div class="wrapper"> 
            <!-- game play container -->
        <div class="cointainer  whitebg">
            <div class="row">
                <div class="col-sm-6 col-m-12 col-l-12">
                   <center> <img src="images/miki.png" alt="picture of game">  </center> 

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text ">
                    <h2>Player</h2>
        <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>

</div>
</div>
</div>

<div class="cointainer zombie-mobile">
            <div class="row">
                <div class="col-sm-6 col-m-12 col-l-12 ">
                   <center> <img width="500px" src="images/zombie.png" alt="picture of game">  </center> 

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text ">
                <h2>Enemies</h2>
        <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>

</div>
</div>
</div>
<!-- end wrapper -->
</div>

<div class="cointainer zombie-desktop">
            <div class="row wrapit">
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text">
                <h2>Enemies</h2>
                <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>
                   

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 ">
                <center> <img width="500px" src="images/zombie.png" alt="picture of game">  </center>

</div>
</div>
</div>
<!--start wrapper-->
<div class="wrapper">
<div class="cointainer whitebg">
            <div class="row">
                <div class="col-sm-6 col-m-12 col-l-12 ">
                   <center> <img width="500px" src="images/monkey.png" alt="picture of game">  </center> 

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text ">
                <h2>Objective</h2>
        <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>

</div>
</div>
</div>

<div class="cointainer zombie-mobile">
            <div class="row">
                <div class="col-sm-6 col-m-12 col-l-12 ">
                   <center> <img width="500px" src="images/banana.png" alt="picture of game">  </center> 

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text ">
                <h2>Enemies</h2>
        <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>

</div>
</div>
</div>

</div>
 <!-- end wrapper -->
 <div class="cointainer zombie-desktop">
            <div class="row wrapit">
                <div class="col-sm-6 col-m-12 col-l-12 gameplay-text">
                <h2>Collect bananas</h2>
                <p>You play as Miki, he is a survior of the dangerous sea. He nearly drowned
            but he luckily managed to drift up to shore on an undiscovered island.

        </p>
                   

                </div>
                <div class="col-sm-6 col-m-12 col-l-12 ">
                <center> <img width="500px" src="images/banana.png" alt="picture of game">  </center>

</div>
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


