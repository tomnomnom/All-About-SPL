<?php
// class_implements

class Users implements Countable, IteratorAggregate {
  protected $users = ['tom', 'dick', 'harry'];

  public function count(){
    return count($this->users);
  }

  public function getIterator(){
    return new ArrayIterator($this->users);
  }
}

var_dump(class_implements('Users'));

$users = new Users();
var_dump(class_implements($users));




