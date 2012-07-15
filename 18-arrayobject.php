<?php
// ArrayObject

$users = new ArrayObject(['tom', 'dick', 'harry']);

foreach ($users as $user){
  echo $user.PHP_EOL;
}

echo $users->count().PHP_EOL;

var_dump($users->offsetExists(2));
var_dump($users->offsetExists(4));

$users->natSort();

foreach ($users as $user){
  echo $user.PHP_EOL;
}
