<?php
$pattern = "/[A-F]-\d-\w/";
var_dump(preg_match($pattern, "A-5-5")); // 1
var_dump(preg_match($pattern, "F-9-c")); // 1
var_dump(preg_match($pattern, "D-17-10")); // 0
var_dump(preg_match($pattern, "a-2-9")); // 0

