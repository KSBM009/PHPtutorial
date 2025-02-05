<?php
    /* ------------ Sessions ------------ */

    /*
      Sessions are a way to store information (in variables) to be used across multiple pages.
      Unlike cookies, sessions are stored on the server.
    */

    if(isset($_POST['submit'])){

      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
      $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

      echo $name . ' is ' . $age . ' years old.';

  }

?>

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