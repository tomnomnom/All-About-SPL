<?php
// SplFixedArray
define('ITERATIONS', 100000);
$initalMem = memory_get_usage();

// Standard array
$standard = [];
$start = microtime(true);
for ($i = 0; $i < ITERATIONS; ++$i){ $standard[$i] = $i; }
echo 'Standard time: '.(microtime(true) - $start)."\n";
echo 'Standard mem:  '.(memory_get_usage() - $initalMem)."\n";

$initalMem = memory_get_usage() - $initalMem;

// SplFixedArray
$fixed = new SplFixedArray(ITERATIONS);
$start = microtime(true);
for ($i = 0; $i < ITERATIONS; ++$i){ $fixed[$i] = $i; }
echo 'Fixed time:    '.(microtime(true) - $start)."\n";
echo 'Fixed mem:     '.(memory_get_usage() - $initalMem)."\n";



