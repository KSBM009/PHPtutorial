<?php
    /* ------------ Operators ----------- */

    /*
      < Less than
      > Greater than
      <= Less than or equal to
      >= Greater than or equal to
      == Equal to
      === Identical to
      != Not equal to
      !== Not identical to
    */

    /* ---------- If Statements --------- */

    /*
    ** If Statement Syntax
    if (condition) {
      // code to be executed if condition is true
    }
    */

    $age = 21;
    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "Sorry, You are not eligible to vote.";
    }

    $t = date("H");
    echo $t;

    if ($t < "12") {
        echo "Good Morning!";
    } else if($t < "17") {
        echo "Good Afternoon!";
    } else {
        echo "Good Evening!";
    }

    $posts = ['First Post', 'Second Post', 'Third Post'];

    if(!empty($posts)){
        echo $posts[0];
    } else {
        echo "No Posts Found!";
    }

    echo !empty($posts) ? $posts[0] : "No Posts Found!";

    $fp = !empty($posts) ? $posts[0] : "No Posts Found!";
    $fp1 = !empty($posts) ? $posts[0] : null;
    $fp2 = $posts[0] ?? null;
    echo $fp;

    $fav_color = "red";

    switch ($fav_color) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }