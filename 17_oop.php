<?php
    /* ---------- Object Oriented Programming --------- */

    /* 
      Object Oriented Programming (OOP) is a programming paradigm that uses objects and classes.
      It aims to implement real-world entities like inheritance, polymorphism, encapsulation, etc.
      in the programming.
    */

    /*
      From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
      OOP consists of classes that can hold "properties" and "methods". 
      Objects can be created from classes.
    */
    
    class User{
      // Properties are attributes that belong to a Class

      // Access Modifiers: Public, Private, Protected
      // public - can be accessed from anywhere
      // private - can only be accessed from inside the class
      // protected - can only be accessed from inside the class and by inheriting classes
      public $name;
      public $email;
      private $password;

      // Method is a function that belongs a class
      function set_name($name){
        $this->name = $name;
      }
    }

    // Instantiate a User Object
    $user1 = new User();
    $user1->name = 'Kevin Stephen Biju';
    $user1->email = 'kevinstephenbiju2003@gmail.com';

    var_dump($user1);
    echo '<br>';
    
    echo $user1->name . '<br>';	// Kevin Stephen Biju
    // echo $user1->password; This will throw an error as password is private

    $user1->set_name('Kevin');
    echo $user1->name . '<br>';  // Kevin
    
?>