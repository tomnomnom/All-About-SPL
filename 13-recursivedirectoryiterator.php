<?php
// RecursiveDirectoryIterator

$dir = new RecursiveIteratorIterator(
  new RecursiveDirectoryIterator('/etc/X11')
);

foreach ($dir as $entry){
  // $entry is an SplFileInfo object
  if ($entry->isDir()) continue;
  echo $entry->getPathname().PHP_EOL;
}


