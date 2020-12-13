<?php
    //login
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
<title>Mikis Island Escape</title>
<link rel="shortcut icon" href="images/banana.png">
</head>
<body>
<?php include('nav.php'); ?>
<div class="register-wrap login-form">
    <h2>Login to play</h2>
    <form action="login.php" method="post" id="register-form" name="index" class="needs-validation" onsubmit="return validateForm()"
                        role="form" novalidate>

                        <div class="form-group">
                            <label class="form-label" id="name" for="name"></label>
                            <input type="text" class="form-control" id="fname" name="username" placeholder="Username" tabindex="1" required>
                            <div class="invalid-feedback">You're missing a step.</div>
                        </div>

                        
                        <div class="form-group">
                            <label class="form-label" id="lpassword" for="password"></label>
                            <input  type="text"
                                 class="form-control" id="password" name="password" placeholder="password" tabindex="2" required>
                            <div class="invalid-feedback">You're missing a step.</div>
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