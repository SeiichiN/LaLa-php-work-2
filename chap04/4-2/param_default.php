<?php
function charge($rank, $days=1) {
  $ryoukin = match($rank) {
    "A" => 15000 * $days,
    "B" => 12000 * $days,
    default => 8000 * $days,
  };
  return $ryoukin;
}

$kingaku1 = charge("B", 2);
$kingaku2 = charge("A");
echo "金額1は{$kingaku1}円。<br>", PHP_EOL;
echo "金額2は{$kingaku2}円。";
// 金額1は24000円。<br>
// 金額2は15000円。
