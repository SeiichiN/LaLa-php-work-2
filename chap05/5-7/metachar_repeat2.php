<?php
$pattern = "/[a-z]{4,8}/"; // 含まれていればOK
var_dump(preg_match($pattern, "cycling")); // 1
var_dump(preg_match($pattern, "HONOLULU-marathon-Full")); // 1
var_dump(preg_match($pattern, "run")); // 0
var_dump(preg_match($pattern, "SURF")); // 0


