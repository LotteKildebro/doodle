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
    <!-- vue cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
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
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="contact.php" class="nav-item nav-link active">Contact</a>
                            <a href="playgame.php" class="nav-item nav-link">Play game</a>
                            <a href="game.php" class="nav-item nav-link">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link">Sign up</a>
                            
                        <a href="login.php" class="nav-item nav-link"  id="login_btn">Login</a>
                      
                        </div>
                    </div>
                </nav>
            </div>

            <!--nav end-->

        <!-- header -->
        <header class="header" id="header3">
            <div class="left">
                <div class="caption">
                    <h2 class="title">Contact us!</h2>
                    <p class="text">We get a lot of questions about this super awesome game, ask us about anything
                        and we will try to reply within a few days. No questions a too small nor too big, so dont be shy
                        ask us whatever you want!
                    </p>
                
                </div>
            </div>
        </header>

        <div class="wrapper"> 
            <!-- contact form-->
        <div class="cointainer contact">
            <div class="row">
                <div class="col-sm-6 col-m-6 col-l-6 ">
                    <h2>Feel free to ask!</h2>
                    <p>
                        Don't be shy, ask away! We will try to answer every questions you might have about us or the games we develop do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrudoris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 

                    </p>

                </div>
                <div class="col-sm-6 col-m-6 col-l-6 ">
        <form action="message.php"  @submit="checkForm" method="post" id="app3" name="index" 
                        role="form" novalidate>
                        <p v-if="errors.length" style="color: red;">
                        <b>Please correct the following error(s):</b>
                         <ul>
                        <li v-for="error in errors" style="color: red;">{{ error }}</li>
                        </ul>
                         </p>
                        <div class="form-group">
                            <label class="form-label" id="name" for="name"></label>
                            <input type="text" class="form-control" id="fname" name="fname" v-model="username" placeholder="Navn" tabindex="1" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="lemail" for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" v-model="email" tabindex="2" required>
                        </div>

                        
                        <div class="form-group">
                            <label class="form-label" id="ltlf" for="tlf"></label>
                            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number"
                                maxlength="8" class="form-control" id="tlf" name="tlf" v-model="tlf" placeholder="Tlf" tabindex="3" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="lmessage" for="message"></label>
                            <input  type="textbox"
                                 class="form-control" id="message" name="message" v-model="message" placeholder="Message" tabindex="4" required>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="tilmeld" value="tilmeld">
                            <label for="tilmeld">Sign up for newsletter.</label>
                            <br>
                        </div>


                        <button name="knap" value="submit" id="submit" type="submit" class="btn btn-default btn-gap">SEND</button>

                    </form>

</div>
</div>
</div>

</div>
 <!-- end wrapper -->

<!--contact info-->
<div class="cointainer contact-info">

<div class="row">

<div class="col-sm-4 col-m-4 col-l-4 contact_icons"><center><i class="fa fa-phone fa-5x" aria-hidden="true"></i>
</br><p>Phone</br> +45 53639598</p>
</center></div>
<div class="col-sm-4 col-m-4 col-l-4 contact_icons"><center><i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
</br><p>E-mail</br> doodle@info.com</p></center></div>
<div class="col-sm-4 col-m-4 col-l-4 contact_icons" ><center><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
</br><p>Adress </br>Street 1, 4000 City</p></center></div>
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



   
    <script src="script/vuemessage.js "></script>
</body>

</html>


