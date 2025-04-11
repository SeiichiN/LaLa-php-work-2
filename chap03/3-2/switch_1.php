<?php
$color = "blue";
switch ($color) {
  case "green":
    $price = 120;
    break;
  case "red":
    $price = 140;
    break;
  case "blue":
    $price = 160;
    break;
  default:  // その他
    $price = 100;
}
echo "{$color}は、{$price}円。";
