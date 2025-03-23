<?php
// Performance test we will genarate larg data set and access by reference
// Range function allows to generate a big array with some value
echo "------ BY VALUE --------\n";
$largeArray = range(1,1_000_000);
// in php you can write the number like this to be readable
$startTime =microtime(true);
$startMem =memory_get_usage();
$out =[];
foreach($largeArray as $value){
    $out[] =$value *2;
}
$endTime = microtime(true);
$endMem = memory_get_usage();

echo "Time: " . ($endTime -$startTime) . " seconds\n";
echo "Memory: " . round(($endMem - $startMem)/1024/1024) . " MBs\n";

echo "------ BY REFERENCE --------\n";

$largeArray = range(1, 1_000_000);
$startTime = microtime(true);
$startMem = memory_get_usage();
foreach ($largeArray as &$value) {
    $value = $value * 2;
}
$endTime = microtime(true);
$endMem = memory_get_usage();

echo "Time: " . ($endTime - $startTime) . " seconds\n";
echo "Memory: " . round(($endMem - $startMem) / 1024 / 1024) . " MBs\n";
/**
 * with refrences it's slower
 * so the refrences not always faster
 */
