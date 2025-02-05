<?php

    session_start(); // Must be called before accessing any session data

    session_destroy();
    header('Location: /PHPtutorial/13_sessions.php');

?>