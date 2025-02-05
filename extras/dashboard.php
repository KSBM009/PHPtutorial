<?php

    session_start(); // Must be called before accessing any session data

    if(isset($_SESSION['username'])){
        echo '<h1> Welcome ' . $_SESSION['username'] . '! </h1> <br>';
    } else {
        echo '<h1> Welcome Guest! </h1> <br>';
        echo '<a href="/PHPtutorial/13_sessions.php"> Click here to Login! </a>';
    }