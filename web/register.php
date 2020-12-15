<?php 
    //registration form
    if(isset($_POST['submit'])){
        require_once('connect.php');
        //basic security (real_escape_string) avoids SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $img = $conn->real_escape_string($_POST['img']);
        $password = sha1($_POST['password']);
        //Check if username exist else insert
        $check = $conn->query("SELECT username from users WHERE username = '$username'");
        if($check->num_rows == 1) echo "<script>alert('Username already exist, try a new one.');</script>";
        else{
            $insert = "INSERT INTO users (username, email, `password`, img) VALUE ('$username', '$email', '$password', '$img')";
            if($conn->query($insert)){
                echo "<script>alert('Welcome: ".$username." you are now registered!');</script>";
            }
            else{
                echo "<script>alert('Something went wrong');</script>";
            }
        }
        //close connection
        $conn->close();
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
<title>Mikis Island Escape</title>
<link rel="shortcut icon" href="images/banana.png">
   <!--vue cdn-->
   <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
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
                            <a href="register.php" class="nav-item nav-link active">Sign up</a>
                        
                        <a href="login.php" class="nav-item nav-link"  id="login_btn">Login</a>
                      
                        </div>
                    </div>
                </nav>
            </div>

            <!--nav end-->
<div class="register-wrap">
    <h2>Register a profile</h2>

<form id="app" @submit="checkForm" action="register.php" method="post" class="register-form" novalidate="true">
  
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
                            <label class="form-label" id="lemail" for="email"></label>
                            <input type="email" name="email" id="email" v-model="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="lpassword" for="password"></label>
                            <input type="text" name="password" id="password" v-model="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <p>Profile image<p>
                            <input type="file" name="img" id="img" v-model="img">
                            
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
                    <script src="script/vue.js"></script>
                   
</body>
</html>