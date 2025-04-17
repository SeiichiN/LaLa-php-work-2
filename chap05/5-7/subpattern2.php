<?php
$pattern = "/(090|080|070)(-?\d{4}){2}/"; // 含まれていればOK
var_dump(preg_match($pattern, "oosaka090-1234-5678yumeshima")); // 1
var_dump(preg_match($pattern, "0080-1234-56789")); // 1
var_dump(preg_match($pattern, "123070123456789023")); // 1
var_dump(preg_match($pattern, "12345678")); // 0


