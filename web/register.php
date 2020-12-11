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
        $check = $conn->query("SELECT username from users WHERE username = '$username' LIMIT 1");
        if($check->num_rows == 1) echo "<p>Username already exists!</p>";
        else{
            $insert = "INSERT INTO users (username, email, `password`, img) VALUE ('$username', '$email', '$password', '$img')";
            if($conn->query($insert)){
                echo "Welcome: ".$username." you are now registered!";
            }
            else{
                echo "Something went wrong";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
</head>
<body>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="password" placeholder="password">
        <br>
        <input type="file" name="img" placeholder="profile picture">
        <br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>