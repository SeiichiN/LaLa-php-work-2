<?php
$colors = array();
$colors[0] = "赤";
$colors[1] = "青";
$colors[5] = "黃";
array_push($colors, "白");
// var_dump($colors[2]);  // null
$b = $colors;  // 値のコピー
$colors[5] = "紫";
print_r($b);  // 変化しない

