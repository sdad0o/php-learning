<?php
/**
 *  1.Gloable scope 
 *  2.Local scope -> inside function ,function arguments
 *  3.Static functions ,variables
 *  ------- EXAMPLE ON THAT ---------
 */
$superhero = "SuperMan";
// less protect , may cuse some problems
function revealIdentity(){
    global $superhero; // to make the variable global from php 4
    $message = "real name is clark";
    // $superhero = "SpiderMan"; //like this make an unexpected output
    echo "$superhero $message";
}
revealIdentity();


function countVistors(){
    static $visitorCount = 0; // it save the change even if we recall the function
    $visitorCount++;
    echo "Visitor #$visitorCount \n";
}
countVistors();
countVistors();
countVistors();