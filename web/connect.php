<?php
    //connect to database
    $conn = new mysqli("localhost", "root", "", "doodle");
    if($conn->connect_error){
        echo "Failed to connect to MySQL: ".$conn->connect_error." (".$conn->connect_error.")";
        exit();
    }
    else{
        echo "connection succes";
    }
    //set character set to utf8
    $conn->set_charset("utf8");
?>