<?php
// $escaped = preg_quote("http://sample.com/php/", "/");
$pattern = "!http://sample.com/php/!";
echo $pattern, PHP_EOL;
var_dump(preg_match($pattern, "URLはhttp://sample.com/php/です"));   // 1
var_dump(preg_match($pattern, "URLはhttp://sample.com/swift/です")); // 0

