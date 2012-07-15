<?php
// SplObserver
require './19-splsubject.php';

class CacheInvalidator implements SplObserver {
  public function update(SplSubject $subject){
    // Hah; like I actually have a solution for this.
    echo "Busting cache for ".get_class($subject)." object\n";    
  }
}

$cacheInvalidator = new CacheInvalidator();

$tom = new User();
$tom->attach($cacheInvalidator);

$tom->setName('Tom');


//  There are only two hard things in Computer Science: 
//    cache invalidation and naming things.
//                                      -- Phil Karlton

