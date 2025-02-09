<?php
    /* ----------- Exceptions ----------- */

    /*
      PHP has an exception model similar to that of other programming languages. 
      An exception can be thrown, and caught ("catched") within PHP. 
      Code may be surrounded in a try block, to facilitate the catching of potential 
      exceptions. Each try must have at least one corresponding catch or finally 
      block.
    */

    function inverse($x){
        if(!$x){
            throw new Exception('Division By Zero');
        }
        return 1/$x;
    }

    echo inverse(10) . '<br>';

    try {
        echo inverse(5) . '<br>';
        echo inverse(0) . '<br>';
    } catch (Exception $e){
        echo 'Caught Exception: ' . $e->getMessage() . '<br>';
    } finally {
        echo 'First Finally' . '<br>';
    }

    try {
        echo inverse(0) . '<br>';
    } catch (Exception $e){
        echo 'Caught Exception: ' . $e->getMessage() . '<br>';
    } finally {
        echo 'Second Finally' . '<br>';
    }

    echo 'Hello World';

?>