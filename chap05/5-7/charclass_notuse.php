<?php
$pattern = "/赤の玉/u";
var_dump(preg_match($pattern, "赤の玉です")); // 1
var_dump(preg_match($pattern, "青の玉です")); // 0
var_dump(preg_match($pattern, "赤の箱です")); // 0
