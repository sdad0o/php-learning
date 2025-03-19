<?php

$secrret = "secret";
$attempts = 0;
$maxAttempts = 5;
while ($attempts < $maxAttempts) {
    $attempts++;
    echo "guess the password: ";
    $password = trim(fgets(STDIN));
    if ($password == $secrret) {
        echo "Welcome";
        break;
    } else {
        echo "Invalid password\n";
    }
}
