<?php
  class User {
    private $name;
    private $age;

    // Magic methods (so we don't have to create individual getters and setters)
    public function __get($property) {
      if(property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function __set($property, $value) {
      if(property_exists($this, $property)) {
        $this->$property = $value;
      }
    }
    
  }