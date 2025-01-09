<?php
    
    $x = 10;
    
    function registerUser(){
        global $x;
        echo $x . "<br>";
        echo "User Registered Successfully!";
    }

    registerUser();

    function register_User($username){
        echo "User $username Registered Successfully!";
    }

    register_User('ksbm009');

    function sum($a, $b){
        return $a + $b;
    }

    echo sum(10, 20);
    