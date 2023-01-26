<?php

require_once('oop/class.tictactoe.php');

//this will store their information as they refresh the page
session_start();

//if they haven't started a game yet let's load one
if (!$_SESSION['game']['tictactoe'])
    $_SESSION['game']['tictactoe'] = new tictactoe();

?>
<html>
    <head>
        <title>Tic Tac Toe</title>
        <link rel="stylesheet" type="text/css" href="inc/style.css" />
    </head>
    <body>
        <div id="content">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Let's Play Tic Tac Toe!</h2>
        <?php
            $_SESSION['game']['tictactoe']->playGame($_POST);
        ?>
        </form>
        </div>
    </body>
</html>