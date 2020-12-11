<form action="game.php" method="post">
        <?php
        //Brug localhost og ikke refer til portnavn
            $conn = new mysqli("localhost", "root", "", "doodle");
        ?>

        <?php
            function findes($id, $c)
            {
             
                $sql = $c->prepare("SELECT * from userpost where id_userpost = ?");
                $sql->bind_param("i", $id);
                $sql->execute();
                $result = $sql->get_result();
                if($result->num_rows > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        ?>

        <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                // Read
                if($_REQUEST['knap'] == "read")
                {
                   
                    $id = $_REQUEST['id_userpost'];
                    if(is_numeric($id) && is_integer(0 + $id))
                    {
                        $sql = $conn->prepare("SELECT id_userpost, id_users, username, comment, post_time  FROM users INNER JOIN userpost ON users.id_userpost = userpost.id_users where id_userpost = ?");
                        $sql->bind_param("i", $id);
                        $sql->execute();
                        $result = $sql->get_result();
                        if($result->num_rows > 0)
                        {
                            $row = $result->fetch_assoc();
                            $id = $row["id_userpost"];
                            $comment = $row["comment"];
                            $id_users = $row["id_users"];
                            $post_time = $row["post_time"];
                            $username = $row["username"];
                            $fejltekst = "read ok";
                            $tekstfarve = "#000000";
                        }
                        else
                        {
                            $fejltekst = "post nummer $id findes ikke";
                            $tekstfarve = "#ff0000";
                        }
                    }
                    else
                    {
                        $fejltekst = "id skal være et heltal";
                        $tekstfarve = "#ff0000";
                    }
                }

                // Update
                if($_REQUEST['knap'] == "update")
                {
                    $id = $_REQUEST['id'];
                    $comment = $_REQUEST['comment'];
                    $id_users = $_REQUEST['id_users'];
                    $post_time = $_REQUEST['post_time'];
                    $username = $_REQUEST['username'];
                    if($comment == "") $comment = "ukendt";
                    if($id_users == "") $id_users = "ukendt";
                    if($post_time == "") $post_time = "ukendt";
                    if($username == "") $username = "ukendt";
                    if(is_numeric($id) && is_integer(0 + $id))
                    {
                        if(findes($id, $conn))
                        {
                            $sql = $conn->prepare("update userpost set comment = ?, id_users = ?, post_time = ? where id_userpost = ?");
                            $sql->bind_param("sisi", $comment, $id_users, $post_time, $id);
                            $sql->execute(); 
                            $fejltekst = "update ok";
                            $tekstfarve = "#000000"; 
                        }
                        else
                        {
                            $fejltekst = "post nummer $id findes ikke";
                            $tekstfarve = "#ff0000";
                        }
                    }
                    else
                    {
                        $fejltekst = "id skal være et heltal";
                        $tekstfarve = "#ff0000";
                    }
                }

                // create
                if($_REQUEST['knap'] == "create")
                {
                    
                    $id = $_REQUEST['id_userpost'];
                   
                    $comment = $_REQUEST['comment'];
                    $id_users = $_REQUEST['id_users'];
                    $post_time = $_REQUEST['post_time'];
                    $username = $_REQUEST['username'];
                    if($comment == "") $comment = "ukendt";
                    if($id_users == "") $id_users = "ukendt";
                    if($post_time == "") $post_time = "ukendt";
                    if($username == "") $username = "ukendt";
                    if(is_numeric($id) && is_integer(0 + $id))
                    {
                        if(!findes($id, $conn))
                        { 
                            $id = 9;
                            //$sql = $conn->("insert into userpost (id_userpost, comment, id_users, post_time) values (?, ?, ?, ?)");
                            $insert = "INSERT INTO userpost (id_userpost, comment, id_users, post_time) VALUES ($id, $comment, $id_users, $post_time)";
                            echo $id, $comment, $id_users, $post_time;
                            $conn->query($insert);
                           // $sql->bind_param("isis", $id, $comment, $id_users, $post_time );
                           // $sql->execute();
                            $fejltekst = "create ok";
                            
                            $tekstfarve = "#00ff00";
                        }
                        else
                        {
                            $fejltekst = "post nummer $id findes allerede";
                            $tekstfarve = "#ff0000";
                        }
                    }
                    else
                    {
                        $fejltekst = "id skal være et heltal";
                        $tekstfarve = "#ff0000";
                 
                    }
                }

                // delete
                if($_REQUEST['knap'] == "delete")
                {
                    $id = $_REQUEST['id'];
                    if(is_numeric($id) && is_integer(0 + $id))
                    {
                        if(findes($id, $conn))
                        {
                            $sql = $conn->prepare("delete from userpost where id_userpost = ?");
                            $sql->bind_param("i", $id);
                            $sql->execute();
                            $fejltekst = "delete ok";
                            $tekstfarve = "#000000"; 
                        }
                        else
                        {
                            $fejltekst = "post nummer $id findes ikke";
                            $tekstfarve = "#ff0000";
                        }
                    }
                    else
                    {
                        $fejltekst = "id skal være et heltal";
                        $tekstfarve = "#ff0000";
                    }
                }

                // clear
                if($_REQUEST['knap'] == "clear")
                {
                    $id = "";
                    $comment = "";
                    $id_users = "";
                    $post_time = "";
                    $username = "";
                    $fejltekst = "post database";
                    $tekstfarve ="#0000000";
                }
            }
            else
            {
                $fejltekst = "post database";
                $tekstfarve ="#0000000";
            }
        ?>

        <?php
          $sql = "select * FROM users INNER JOIN userpost ON users.id = userpost.id_users";
          $result = $conn->query($sql);
   
          echo '<table id="userpost">';
          echo "<tr>";
          echo "<th>id</th>";
          echo "<th>comment</th>";
          echo "<th>id users</th>";
          echo "<th>post_time</th>";
          echo "<th>username</th>";
          echo "</tr>";
         

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["comment"]."</td>";
                    echo "<td>".$row["id_users"]."</td>";
                    echo "<td>".$row["post_time"]."</td>";
                    echo "<td>".$row["username"]."</td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "No posts";
            }

            echo "</table>"
        ?>

        <?php
            $conn->close();
        ?>

<div id="inputs">
id : <input type="number" name="id_userpost" value="<?php echo isset($id_userpost) ? $id_userpost : '' ?>"><br/><br/>
comment : <input type="text" name="comment" value="<?php echo isset($comment) ? $comment : '' ?>" ><br/><br/>
user id :  <input type="number" name="id_users" value="<?php echo isset($id_users) ? $id_users : '' ?>"><br/><br/>
username: <input type="text" name="username" value="<?php echo isset($username) ? $username : '' ?>" ><br/><br/>
post_time :  <input type="date" name="post_time" value="<?php echo isset($post_time) ? $post_time : '' ?>" ><br/><br/>
Status : <span style="position:absolute; left: 100px; color: <?php echo $tekstfarve ?>"><?php echo $fejltekst ?></span><br/><br/>
</div>

<div>
<input type="submit" name="knap" value="read" style="width: 80px">
<input type="submit" name="knap" value="update" style="width: 80px">
<input type="submit" name="knap" value="create" style="width: 80px">
<input type="submit" name="knap" value="delete" style="width: 80px">

</div>
    </form>
