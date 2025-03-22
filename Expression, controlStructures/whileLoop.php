<?php
$secrret = "secret";
$attempts = 0; // to count the attempts
$maxAttempts = 5; // set max attempts
while ($attempts < $maxAttempts) {
    echo "guess the password: ";
    // way to accept the input 
    $password = trim(fgets(STDIN));
    // Incremt for the attempts  to avoid the infinit loop
    $attempts++;
    if ($password == $secrret) {
        echo "Welcome , correct !";
        break;//to stop the loop
    } else {
        echo "Invalid password\n";
    }
}
