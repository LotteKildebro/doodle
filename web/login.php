<?php
    //login
    //isset=Variablen er sat og ikke null(altså der er noget i variablen)
    if(isset($_POST['submit'])){
        require_once("connect.php");
        $username = $conn->real_escape_string($_POST['username']);
        $password = sha1($_POST['password']);
        $sql = "SELECT id, email, username, `password`, img FROM users WHERE
        username = '$username' AND `password` = '$password'";
        $result = $conn->query($sql);
        $conn->close();
        //check if query return anything, if not no match in database user has to register
        if(!$result->num_rows == 1){
            echo "<script>alert('Invalid username or password');</script>";
        }
        else{
            //fetcher rows fra data
            while($row = $result->fetch_assoc()){
                $img = $row['img'];
                $email = $row['email'];
                $bio = $row['bio'];
             }
            //PHP session start
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['img'] = $img;
            $_SESSION['bio'] = $bio;
            
            //redirect and stop present code
            header('Location: game.php');
            exit();
        }
    }
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
   <!--vue cdn-->
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
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="playgame.php" class="nav-item nav-link">Play game</a>
                            <a href="game.php" class="nav-item nav-link">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto login">
                            <a href="register.php" class="nav-item nav-link">Sign up</a>
                      
                        <a href="login.php" class="nav-item nav-link active"  id="login_btn">Login</a>
                      
                    
                        </div>
                    </div>
                </nav>
            </div>

            <!--nav end-->
            <div class="register-wrap">
            <h2>login</h2>
        
        <form id="app2" @submit="checkForm" action="login.php" method="post" class="register-form login-form" novalidate="true">
          
          <p v-if="errors.length" style="color: red;">
            <b>Please correct the following error(s):</b>
            <ul>
              <li v-for="error in errors" style="color: red;">{{ error }}</li>
            </ul>
          </p>
                                <div class="form-group">
                                    <label class="form-label" id="name" for="name"></label>
                                    <input type="text" name="username" id="username" v-model="username" placeholder="Username">
                                </div>
        
        
                                <div class="form-group">
                                    <label class="form-label" id="lpassword" for="password"></label>
                                    <input type="text" name="password" id="password" v-model="password" placeholder="Password">
                                </div>
        
                          
          <button name="submit" value="submit" id="submit" type="submit" class="btn btn-default btn-gap">SEND</button>
          
        
        </form>
                            
                            <!--end register-wrap-->
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
                    <script src="script/vuelogin.js"></script>
</body>
</html>