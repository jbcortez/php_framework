<?php
  class User { 
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass) {
      // Use self to access a static property
      if(strlen($pass) >= self::$minPassLength) {
        return true;
      } else {
        return false;
      }
    }
  }

  $pass = '12346';

  // A static method can be accessed without instantiating an object of that class.
  if(User::validatePass($pass)) {
    echo 'password valid';
  } else {
    echo 'password too short';
  }