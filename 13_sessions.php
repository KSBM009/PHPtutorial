<?php
    /* ------------ Sessions ------------ */

    /*
      Sessions are a way to store information (in variables) to be used across multiple pages.
      Unlike cookies, sessions are stored on the server.
    */

    session_start(); // Must be called before accessing any session data
    
    if(isset($_POST['submit'])){

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
      $password = $_POST['password'];

      if($username == 'Kevin' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /PHPtutorial/extras/dashboard.php');
      }
      else{
        echo ' Invalid Login Credentials';
      }
  }

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="username"> Username : </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password"> Password : </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>