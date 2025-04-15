<?php
$value = 123.456;
$num1 = round($value);
$num2 = round($value, 2);
$num3 = round($value, 1);

var_dump($num1);  // double(123)
var_dump($num2);  // double(123.46)
var_dump($num3);  // double(123.5)

