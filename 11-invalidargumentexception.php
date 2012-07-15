<?php
// InvalidArgumentException

class User {
  protected $age;

  public function setAge($age){
    if (!is_int($age)){
      throw new InvalidArgumentException(
        "Age must be an integer"
      );
    }
    $this->age = $age;
  }
}

$tom = new User();
$tom->setAge("Twenty five and a half");
