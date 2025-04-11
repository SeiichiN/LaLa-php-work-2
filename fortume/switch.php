<?php
$num = mt_rand(1, 99);

switch ($num) {
  case $num < 20: 
    $fortune = "大吉";
    break;
  case $num >= 20 && $num < 40:
    $fortune = "中吉";
    break;
  case $num < 60:
    $fortune = "吉";
    break;
  case $num < 80:
    $fortune = "凶";
    break;
  default:
    $fortune = "大凶";
}
echo $fortune;