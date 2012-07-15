<?php
// Countable interface

class Users implements Countable {
  protected $users = ['tom', 'dick', 'harry'];

  public function count(){
    return count($this->users);
  }
}

$users = new Users();

var_dump(count($users));









