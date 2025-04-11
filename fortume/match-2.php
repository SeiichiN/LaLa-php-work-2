<?php
$num = mt_rand(1, 99);

$fortune = match(true) {
  $num < 20 => "大吉",
  $num >= 20 && $num < 40 => "中吉",
  $num < 60 => "吉",
  $num < 80 => "凶",
  default => "大凶",
};
echo $fortune;