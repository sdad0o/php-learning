<?php
/*
 *   singel and double qoute strings
 *   1.single qoute string you can't use the spichial charachter like \n
 */

$name ="jhone";
echo 'hello, $name \n';
echo "hello, $name \n";

// to write multible line string ⬇️
$heredoc = <<<EOD
MULTI-LINE STRING 
WITH VARIABLE NAME $name
EOD;

$nowdoc = <<<'EOD'
MULTI-LINE STRING 
WITH out VARIABLE NAME $name
EOD;

// whay we have this tow type becuse the single qoute string is faster 