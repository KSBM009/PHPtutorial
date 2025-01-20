<?php
    /* --- $_GET & $_POST Superglobals -- */

    /*
      We can pass data through urls and forms using the $_GET and $_POST superglobals.
    */
    
    // echo $_GET['name'];
    // echo $_GET['age'];

    if(isset($_POST['submit'])){
        echo $_POST['name'];
        echo $_POST['age'];
    }

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Stephen&age=75">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <div>
      <label for="name"> Name : </label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age"> Age : </label>
      <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
      <label for="name"> Name : </label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age"> Age : </label>
      <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>