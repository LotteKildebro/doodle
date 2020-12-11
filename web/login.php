
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
            echo "<p>Invalid username/password</p>";
        }
        else{
            while($row = $result->fetch_assoc()){
                $img = $row['img'];
                $id = $row['email'];
             }

            echo "<p>test</p>";
            //PHP session start
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['img'] = $img;
            $_SESSION["favanimal"] = "cat";
            
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="text" name="password" placeholder="Password">
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>