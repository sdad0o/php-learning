<?php
echo "Rocket launch countdown\n";
//  vaeible  condition  run aftre the body
for ($i = 10; $i  >  0;   $i--) {
    echo "$i\n";
    // echo $i . "\n";
    if (1 == $i) {
        echo "Blast off 🚀🚀\n";
    }
    sleep(1); // pause for 1 second

}
