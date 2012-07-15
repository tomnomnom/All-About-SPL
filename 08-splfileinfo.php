<?php
// SplFileInfo

$readme = new SplFileInfo('./README.md');

echo "Last modified: ".date(DATE_RSS, $readme->getMTime())."\n";

echo "Size: ".$readme->getSize()." bytes\n";

echo "Owner UID: ".$readme->getOwner()."\n";

echo ($readme->isReadable()? 'Is' : 'Is not')." readable\n";

echo ($readme->isWritable()? 'Is' : 'Is not')." writable\n";

echo ($readme->isLink()? 'Is' : 'Is not')." a symlink\n";

$readme->openFile(); // ???





