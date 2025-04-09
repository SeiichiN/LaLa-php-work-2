<?php
const TAX = 0.08;
$price = 1250 * (1+TAX);
echo $price, "<br>";
# TAX = 0.1;  // 定数は再代入できない
define("MONEY", 1000);
echo __DIR__, "<br>";
echo MONEY, "<br>";
echo PHP_VERSION_ID, " ", PHP_OS, "<br>";



