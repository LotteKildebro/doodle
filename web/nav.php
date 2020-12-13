<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My style -->
    <link rel="stylesheet" href="style/style.css">
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
    <title>The Car Roadshow</title>
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
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="playgame.php" class="nav-item nav-link">Play game</a>
                            <a href="game.php" class="nav-item nav-link">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link">Sign up</a>
                        
                        <?php
                        $_SESSION['logged_in'] = true;
                    if (($_SESSION['logged_in'] = false)) {
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
        

    <script src="script.js"></script>
</body>

</html>