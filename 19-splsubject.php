<?php
// SplSubject
class User implements SplSubject {
  protected $name;
  protected $observers;
  public function __construct(){
    $this->observers = new SplObjectStorage();
  }
  public function attach(SplObserver $observer){
    $this->observers->attach($observer);
  }
  public function detach(SplObserver $observer){
    $this->observers->detach($observer);
  }
  public function notify(){
    foreach ($this->observers as $observer)
      $observer->update($this);
  }
  public function setName($name){
    $this->name = $name;
    $this->notify();
  }
}
