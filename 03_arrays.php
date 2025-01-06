<?php
    // Simple Array
    $numbers = [1,2,3,4,5];
    $fruits = array('apple', 'banana', 'cherry');

    print_r($numbers);
    var_dump($numbers);
    echo $fruits[1];

    // Associative Array
    $colors = [
        1 => 'red',
        6 => 'green',
        4 => 'blue'
    ];

    echo $colors[4];

    $hex = [
        'red' => '#f00',
        'green' => '#0f0',
        'blue' => '#00f'
    ];

    echo $hex['blue'];

    $person = [
        'first_name' => "Kevin",
        'last_name' => "Stephen Biju",
        'email' => "kevinstephenbiju2003@gmail.com"
    ];

    echo $person['first_name'];