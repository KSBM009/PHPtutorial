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

    if(empty($posts)){
        echo 123;
    }

    if(!empty($posts)){
        echo 4567;
    }