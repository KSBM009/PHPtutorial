<?php
    $fruits = ['apple', 'banana', 'orange', 'grape', 'pear'];

    // Get the number of elements in an array
    echo count($fruits) . "<br>";

    // Search for a value in an array
    echo var_dump(in_array('apple', $fruits)) . "<br>";
    echo var_dump(in_array('apples', $fruits)) . "<br>";

    // Add an item to the array
    $fruits[] = 'pineapple';
    array_push($fruits, 'kiwi');
    array_push($fruits, 'watermelon', 'papaya');
    array_unshift($fruits, 'mango');

    print_r($fruits);

    // Remove an item from the array
    array_pop($fruits);
    array_shift($fruits);
    unset($fruits[1]);

    print_r($fruits);

    // Split it into different chunks
    $chunked = array_chunk($fruits, 3);

    print_r($chunked);

    // Merge arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr = array_merge($arr1, $arr2);
    $ar = [...$arr1, ...$arr2];

    print_r($arr);
    print_r($ar);