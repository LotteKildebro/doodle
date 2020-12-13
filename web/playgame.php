<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
</head>

<body>
    <audio autoplay="autoplay" loop>
        <source src="gamesounds/t.mp3" />
    </audio>

 
    <div class="buttons-game">
    <a class="mybutton" href="game.php">Back to profile<a>
    <a class="mybutton" href="playgame.php">Start over<a>
    </div>
   

    <center>
        <h1>MIKI'S ISLAND ESCAPE... WITH ZOMBIES</h1>
        <canvas width="1000" height="600" id="canvas"></canvas>
    </center>
    <center>
        <div id="timetext">You've got
            <span id="time-showing"></span> secounds left!</div>
    </center>

    <div id="gameover">
    </div>
    <div id="winbox"></div>


    <div id="text">
        <div id="demo">Life:</div>
        <div id="boxscore">Bananas:</div>
    </div>




    <script src="script/game.js"></script>
</body>

</html>