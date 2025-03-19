<?php

do {
    $dice = rand(1, 6);
    echo "You rolled a $dice\n";
    if (6 == $dice) {
        echo "You win\n";
        break;
    }
    echo "Do you want to roll again? (y/n): ";
    $answer = trim(fgets(STDIN));
} while ('y' == $answer);
