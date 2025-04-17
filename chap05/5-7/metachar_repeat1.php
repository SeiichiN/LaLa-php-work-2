<?php
$pattern = "/[0-9]{3}-?[0-9]{2}/"; // 含まれていればOK
// -? -がある、もしくは、ない　にマッチ
var_dump(preg_match($pattern, "12345")); // 1
var_dump(preg_match($pattern, "abc-090-88-345")); // 1
var_dump(preg_match($pattern, "11-222")); // 0
var_dump(preg_match($pattern, "abc-de")); // 0


