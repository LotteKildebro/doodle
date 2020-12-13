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
</head>
<body>
<?php include('nav.php'); ?>
<div class="register-wrap">
    <h2>Register a profile</h2>
    <form action="register.php" method="post" id="register-form" name="index" class="needs-validation" onsubmit="return validateForm()"
                        role="form" novalidate>

                        <div class="form-group">
                            <label class="form-label" id="name" for="name"></label>
                            <input type="text" class="form-control" id="fname" name="username" placeholder="Username" tabindex="1" required>
                            <div class="invalid-feedback">You're missing a step.</div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" id="lemail" for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
                            <div class="invalid-feedback">You're missing a step.</div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" id="lpassword" for="password"></label>
                            <input  type="text"
                                 class="form-control" id="password" name="password" placeholder="password" tabindex="4" required>
                            <div class="invalid-feedback">You're missing a step.</div>
                        </div>

                        <div class="form-group">
                            <p>Profile image<p>
                            <input  type="file"
                                 class="form-control" id="img" name="img" placeholder="img" tabindex="5" >
                            
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="tilmeld" value="tilmeld">
                            <label for="tilmeld">Sign up for newsletter.</label>
                            <br>
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
                    <script src="script/script.js"></script>
</body>
</html>