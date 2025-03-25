<?php

$simpleArray = [1, 2, 3, 4, 5];

$associativeArray = [
    'name' => 'jhone',
    'age'  => 30,
    'city' => 'Amman'
];

echo $simpleArray[0];
echo $associativeArray['name'];
// to add to array
$simpleArray[] = 6;
// add the key then the vlue
$associativeArray['country'] = 'jordan';

$matrix =
    [
        [1, 2, 3],
        [4, 5, 6]
    ];
echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];
var_dump(count($fruits));
// assinding sort 
sort($fruits);
// dessinnding sort 
rsort($fruits);

// you can sort the associative Array by value or by key
var_dump($associativeArray);
asort($associativeArray);
ksort($associativeArray);

$numbers = range(1, 5);
$squared = array_map(fn($n) => $n ** 2, $numbers);

$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);
// to rduce the array to one value
$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n,
    0
);
var_dump($sum);

$moreNumbers = [0, ...$numbers, 6];
var_dump($moreNumbers);

// array destructring
[$first, $second] = $fruits;
var_dump($first, $second);

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

var_dump(
 array_intersect($set1,$set2),
array_intersect($set2, $set1),
        array_diff($set1,$set2),
        array_diff($set2, $set1)
);


$key = array_keys($associativeArray);
$value =array_values($associativeArray);

var_dump($key,$value);

// check if key exist
var_dump('name',$associativeArray,in_array('jhone',$associativeArray));

// convert array to string 
$fruitString = implode(', ',$fruits);
$backToArray = explode(', ',$fruitString);

var_dump($fruitString,$backToArray);

// merge arrays 
var_dump(
     array_merge($set1 ,$set2),
    array_merge($associativeArray,['country' => 'USA']),
    $set1 +$set2,
    $associativeArray +['country' => 'USA']
);
