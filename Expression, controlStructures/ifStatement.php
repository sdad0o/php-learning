<?php

$x = 10;
if ($x > 5) {
    // True
    echo "x is greater than 5 \n";
} else {
    // False
    echo "x is less than 5 \n";
}

//------ Nested if ---------

$score = 60;
if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}

echo "\n\n";

//------ Nested if and ternary operator ---------

$num = 15;
// check if the number positive
if ($num > 0) {
    // check the number is even or odd 
    echo $num % 2 == 0 ? " positive even" : "positive odd";

    // check if the number negative
} elseif ($num < 0) {
    echo "negative";
} else {
    echo "zero";
}

//------ Nested if to compare strings ---------

$username = "admin";
$password = "admin";
if ($username == "admin") {
    if ($password == "admin") {
        echo "Welcome admin";
    } else {
        echo "Invalid password";
    }
}
