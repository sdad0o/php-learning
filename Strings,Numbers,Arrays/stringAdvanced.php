<?php
$mb_string = "你好世界";
var_dump(mb_strlen($mb_string));
$url = "https://github.com/sdad0o";
var_dump(urlencode($url));
var_dump(urldecode($url));

$html ='<p> this is "qouted" text & a <a href="#">link</a>.</p>';
var_dump(htmlentities($html));

// Base 64 encoding  -- for images or email attachments
var_dump(base64_encode("hello world"));
var_dump(base64_decode(base64_encode("hello world")));