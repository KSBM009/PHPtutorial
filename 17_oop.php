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

      // A Constructor is a method that runs when an object is instantiated/created
      public function __construct($name, $email){
        echo 'Constructor Called <br>';
        $this->name = $name;
        $this->email = $email;
      }

      // Method is a function that belongs a class
      function set_name($name){
        $this->name = $name;
      }

      function get_name(){
        return $this->name;
      }
    }

    // Instantiate a User Object
    $user1 = new User('Kevin', 'kevinstephenbiju2003@gmail.com');

    $user1->name = 'Kevin Stephen Biju';
    $user1->email = 'kevinstephenbiju2003@gmail.com';

    var_dump($user1);
    echo '<br>';
    
    echo $user1->name . '<br>';	// Kevin Stephen Biju
    // echo $user1->password; This will throw an error as password is private

    // $user1->set_name('Kevin');
    // echo $user1->name . '<br>';  // Kevin

    $user2 = new User('Ryan', 'ryanrejijohn@oges.com');

    // $user2->set_name('Ryan');
    // echo $user2->name . '<br>';  // Ryan

    var_dump($user2);
    echo '<br>';

    echo $user1->get_name() . '<br>';  // Kevin
    echo $user2->get_name() . '<br>';  // Ryan

    // Inheritance
    class Employee extends User{
      public $title;

      public function __construct($name, $email, $title){
        parent::__construct($name, $email);
        $this->title = $title;
      }

      public function get_title(){
        return $this->title;
      }
    }

    $employee1 = new Employee('Rijo','rihoe@oges.com','Software Engineer');

    echo $employee1->get_title() . '<br>'; // Software Engineer
    echo $employee1->get_name() . '<br>';  // Rijo
    echo $employee1->email . '<br>';  // rihoe@oges.com
    
?>