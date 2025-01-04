<?php
    /* --------- PHP Data Types --------- */
    /*
    - String - A string is a series of characters surrounded by quotes
    - Integer - Whole numbers
    - Float - Decimal numbers
    - Boolean - true or false
    - Array - An array is a special variable, which can hold more than one value
    - Object - A class
    - NULL - Empty variable
    - Resource - A special variable that holds a resource
    */

    /* --------- Variable Rules --------- */
    /*
    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - variables can't start with a number
    - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variables are case-sensitive ($name and $NAME are two different variables)
    */

    // String
    $name = 'Kevin Stephen Biju';
    echo $name;
    echo '<br>';

    // Integer
    $age = 21;
    echo $age;
    echo '<br>';

    // Boolean
    $is_Married = false;
    echo $is_Married;
    echo '<br>';
    var_dump($is_Married);
    echo '<br>';

    // Boolean
    $is_Healhty = true;
    echo $is_Healhty;
    echo '<br>';
    var_dump($is_Healhty);
    echo '<br>';

    // Float
    $cash_on_hand = 100.50;
    echo $cash_on_hand;
    echo '<br>';
    var_dump($cash_on_hand);
    echo '<br>';

    echo '$name is $age years old.';
    echo '<br>';
    echo $name . ' is ' . $age . ' years old.';
    echo '<br>';
    echo "$name is $age years old.";
    echo '<br>';
    echo "${name} is ${age} years old.";
    echo '<br>';
    echo 5 + 5;
    echo '<br>';
    echo '5' + '5';   
    echo '<br>';
    $x = '5' + '5';
    var_dump($x);
    echo '<br>';
    echo 7 - 3;
    echo '<br>';
    echo 7 * 3;
    echo '<br>';
    echo 15 / 3;
    echo '<br>';
    echo 15 % 2;
    echo '<br>';

    //Constants
    define('PI', 3.14);

    echo PI;