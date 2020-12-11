<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />


</head>

<body>
    <audio autoplay="autoplay" loop>
        <source src="gamesounds/t.mp3" />
    </audio>

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