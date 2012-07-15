<?php
// GlobIterator

// What one was...
$slides = glob('./*.php');

foreach ($slides as $slide){
  echo $slide.': '.filesize($slide).PHP_EOL;
}

// Can now be...
$slides = new GlobIterator('./*.php');

foreach ($slides as $slide){
  echo $slide->getPathname().': '.$slide->getSize().PHP_EOL;
}
