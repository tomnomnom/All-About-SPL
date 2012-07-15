<?php
// SplFileObject (extends SplFileInfo)

$readme = new SplFileObject('./README.md');

if (!$readme->isReadable()){
  throw new Exception("File not readable");
}

$readme->fseek(16);

while(!$readme->eof()){
  echo $readme->fgets();
}

// Works for streams too
$stdin = new SplFileObject('php://stdin');
while(!$stdin->eof()){
  echo $stdin->fgets();
}



