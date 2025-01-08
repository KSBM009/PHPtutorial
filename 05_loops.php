<?php
    /* ------------ For Loop ------------ */

    /*
    ** For Loop Syntax
      for (initialize; condition; increment) {
      // code to be executed
      }
    */
    for($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    /* ------------ While Loop ------------ */

    /*
    ** While Loop Syntax
      while (condition) {
      // code to be executed
      }
    */

    $y = 1;
    while($y <= 15){
        echo "The number is : $y <br>";
        $y++;
    }

    /* ---------- Do While Loop --------- */

    /*
    ** Do While Loop Syntax
      do {
      // code to be executed
      } while (condition);

    do...while loop will always execute the block of code once, even if the condition is false.
    */

    $z = 7;

    do {
        echo "The number is : $z <br>";
        $z++;
    } while ($z <= 5);