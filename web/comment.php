

<?php 
    //registration form
    if(isset($_POST['submit'])){
        require_once('connect.php');
        //basic security (real_escape_string) avoids SQL injection (' or 0=0 #)
        $comment = $conn->real_escape_string($_POST['comment']);
        $post_time = $conn->real_escape_string($_POST['post_time']);
        $id_users = 673;
        //Check if username exist else insert
        $check = $conn->query("SELECT comment from userpost WHERE comment = '$comment' LIMIT 1");
        if($check->num_rows == 1) echo "<p>comment already exists!</p>";
        else{
            $insert = "INSERT INTO userpost (comment, post_time, id_users) VALUES ('$comment', '$post_time', '$id_users')";
            if($conn->query($insert)){
                echo "you made a comment";
            }
            else{
                echo "Something went wrong";
            }
        }
        //close connection
        $conn->close();
    }
?>

<h2>Make a blog post</h2>
        <form action="comment.php" method="post">
        <input type="text" name="comment" placeholder="Comment">
        <br>
        <input type="date" name="post_time" placeholder="Date">
        <br>
       
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php 

    //andet forsøg
    //registration form
    if(isset($_POST['submit'])){
        require_once('connect.php');
        //basic security (real_escape_string) avoids SQL injection (' or 0=0 #)
        $username = $conn->real_escape_string($_REQUEST['username']);
        $comment = $conn->real_escape_string($_POST['comment']);
        $post_time = $conn->real_escape_string($_POST['post_time']);
        //Check if username exist else insert
       
        $check = $conn->query("SELECT users.username, userpost.comment FROM userpost INNER JOIN users ON userpost.id_users = users.id");
        if($check->num_rows == 1) echo "<p>comment already exists!</p>";
        else{
            $insert = "INSERT INTO userpost ( comment, post_time) VALUE ( '$comment', '$post_time')";
            if($conn->query($insert)){
                echo "New post: ".$post." updated!";
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
    <title>test</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php echo "hello ".$username." !";?>
        <input type="text" name="username" placeholder="Username">
        <br>
        <input type="text" name="comment" placeholder="comment">
        <br>
        <input type="date" name="post_time" placeholder="date_time">
        <br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>