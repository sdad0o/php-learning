<?php

$x = 10;
if ($x > 5) {
    echo "x is greater than 5 \n";
} else {
    echo "x is less than 5 \n";
}
//////////////
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

echo "\n";
/////////////////////////
$num = 15;
if ($num > 0) {
    echo $num % 2 == 0 ? " positive even" : "positive odd";
} elseif ($num < 0) {
    echo "negative";
} else {
    echo "zero";
}

///////////////////////////////////////////////
$username = "admin";
$password = "admin";
if ($username == "admin") {
    if ($password == "admin") {
        echo "Welcome admin";
    } else {
        echo "Invalid password";
    }
}
