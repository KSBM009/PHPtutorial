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

    function sum_of_nos($a = 5, $b = 7){
        return $a + $b;
    }

    echo sum_of_nos();

    $subtract = function($a, $b){
        return $a - $b;
    };

    echo $subtract(10, 5);

    $multiply = fn($a, $b) => $a * $b;
    echo $multiply(15, 5);