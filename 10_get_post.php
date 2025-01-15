<?php
    /* --- $_GET & $_POST Superglobals -- */

    /*
      We can pass data through urls and forms using the $_GET and $_POST superglobals.
    */
    
    echo $_GET['name'];
    echo $_GET['age'];

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Stephen&age=75">Click</a>

<form action=""></form>