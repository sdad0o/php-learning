<?php

declare(strict_types=1);

// Variadic functions are functions that accept a variable number of arguments, also known as varargs.
function sum(int ...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
    //array_sum($numbers);
}
var_dump(sum());
var_dump(sum(1));
var_dump(sum(1, 2, 3));
var_dump(sum(50, 50));

$numbers = [1, 2, 3, 4, 5];
var_dump('aaaaaa' . '   ' . sum(...$numbers));
///////////////////////////
function introduceTeam(string $teamName, string ...$members): void // void is the return type, it means it does not return anything, it is optional, it is a good practice to use it, it is added in PHP 7
{
    echo "Welcome to $teamName\n";
    echo "Team members:\n" . implode("\n", $members);
}
introduceTeam("Team A", "John", "Jane", "Doe");

$members = ['John', 'Jane', 'Doe'];
introduceTeam("Team b", ...$members);


introduceTeam("Team c", 'John', 'Jane', 'Doe', 'Smith', 'Alex', 'Bob', ...$members);
