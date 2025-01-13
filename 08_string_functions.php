<?php

    /*
      Functions to work with strings
      https://www.php.net/manual/en/ref.strings.php
    */

    $string = "Hello, World!";

    // Get the length of a string
    echo strlen($string) . "<br>";

    // Find the position of the first occurrence of a substring in a string
    echo strpos($string, 'World') . "<br>";

    // Find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'o') . "<br>";

    // Reverse a string
    echo strrev($string) . "<br>";

    // Convert all characters in a string to lowercase
    echo strtolower($string) . "<br>";

    // Convert all characters in a string to uppercase
    echo strtoupper($string) . "<br>";

    // Uppercase/Captilize the first character of each word in a string
    echo ucwords($string) . "<br>";

    // String Replace
    echo str_replace('World', 'Everyone', $string) . "<br>";

    // Return portion of a string specified by the offset and length
    echo substr($string, 0, 5) . "<br>";
    echo substr($string, 5) . "<br>";

    // Checking String starts with or ends with a particular substring
    if(str_starts_with($string, 'Hello')){
        echo "String starts with 'Hello'<br>";
    }
    if(str_ends_with($string, 'World!')){
        echo "String ends with 'World!'<br>";
    }

    // HTML Entities
    $str = "<h1>Hello, World!</h1>";
    echo $str . "<br>";
    echo htmlentities($str) . "<br>";
    echo htmlspecialchars($str) . "<br>";
    echo html_entity_decode($str) . "<br>";

    $str1 = "<script>alert('Hello, World!');</script>";
    echo $str1 . "<br>";
    echo htmlentities($str1) . "<br>";
    echo htmlspecialchars($str1) . "<br>";
    echo html_entity_decode($str1) . "<br>";