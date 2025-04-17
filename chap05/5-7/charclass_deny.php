<?php
$pattern = "/[^青赤]木/u";
var_dump(preg_match($pattern, "大木")); // 1
var_dump(preg_match($pattern, "青木")); // 0
var_dump(preg_match($pattern, "赤木")); // 0
var_dump(preg_match($pattern, "赤木、白木")); // 1
