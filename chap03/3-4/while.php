<?php
$numArray = array();  # 空の配列を作成
while (count($numArray) < 5) {
  $num = mt_rand(1,30);
  if (! in_array($num, $numArray)) {
    array_push($numArray, $num);
  }
}
print_r($numArray);
