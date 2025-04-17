<?php
$pattern = "/[A-F][1-9]/";
var_dump(preg_match($pattern, "B8")); // 1
var_dump(preg_match($pattern, "G7")); // 0
var_dump(preg_match($pattern, "D9")); // 1
var_dump(preg_match($pattern, "a2")); // 0
var_dump(preg_match($pattern, "1A")); // 0
