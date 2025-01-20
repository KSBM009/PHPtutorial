<?php
    /* --- $_GET & $_POST Superglobals -- */

    /*
      We can pass data through urls and forms using the $_GET and $_POST superglobals.
    */
    
    // echo $_GET['name'];
    // echo $_GET['age'];

    if(isset($_POST['submit'])){
        
        // $name = htmlentities($_POST['name']);
        // $age = htmlentities($_POST['age']);

        // $name = htmlspecialchars($_POST['name']);
        // $age = htmlspecialchars($_POST['age']);

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

        // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);

        echo $name . ' is ' . $age . ' years old.';

        // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
        // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
        // FILTER_SANITIZE_URL - Convert string to a valid URL
        // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
        // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
        // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
    }

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Stephen&age=75">Click</a>

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