<?php
declare(static_types=1)
// All this NULL ⬇️
// to assign default value
$db =$abc ?? "default";
var_dump(
    null ==null,
    null == false,
    null == 0,
    null == '',
    null == [],
    $abc,
    isset($abc),//it return false
    is_null($abc),
    $db,
    empty([])
);
// Example on defualt parameter
function greet(?string $name)
{
    echo "Hello, $name !";
}
greet(null);
// to remove the null values from array
var_dump(
    array_filter([1,null,"", 3])
);