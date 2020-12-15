<?php
/* (user 'root' with no password for mac) */
$link = mysqli_connect("localhost", "root", "", "doodle");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$tlf = mysqli_real_escape_string($link, $_REQUEST['tlf']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

 
// Attempt insert query execution
$sql = "INSERT INTO contact (fname, email, tlf, `message`) VALUES ('$fname', '$email', '$tlf', '$message')";
if(mysqli_query($link, $sql)){
    echo "<script>alert('Thank you for your message');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
               
// Close connection
mysqli_close($link);
?>
<html>
<head>
</head>
<body>
<div id="center_button">
    <button onclick="location.href='contact.php'">Back to site</button>
</div>
</body>
</html>