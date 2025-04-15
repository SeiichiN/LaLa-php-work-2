<?php
function fee($adult=0, $child=0) {
  $adult_fee = 1000 * $adult;
  $child_fee = 600 * $child;
  $fee = $adult_fee + $child_fee;
  return $fee;
}

$total = fee(child:1);
echo "大人一人、子ども二人の料金:";
echo "{$total}円";
// 大人一人、子ども二人の料金:2200円
