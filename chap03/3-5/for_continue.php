<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
for ($i=0; $i<$count; $i++) {
  $value = $list[$i];
  if ($value<0) {
    $msg = "マイナスの値{$value}が含まれていたので中断しました";
    continue;  // for文次
  } else {
    $sum += $value;
  }
}
echo "合計：{$sum} {$msg}";
