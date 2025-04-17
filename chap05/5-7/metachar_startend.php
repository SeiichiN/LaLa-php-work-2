<?php
$pattern = "/^山..子$/u"; 
var_dump(preg_match($pattern, "山田智子")); // 1
var_dump(preg_match($pattern, "山本あさ子")); // 0
var_dump(preg_match($pattern, "山崎貴美")); // 0


