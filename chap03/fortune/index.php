<?php
$kuji = mt_rand(1, 99);
$fortune = match(true) {
  $kuji >= 1 && $kuji < 20 => "大吉",
  $kuji >= 20 && $kuji < 40 => "中吉",
  40 <= $kuji && $kuji < 60 => "吉",
  60 <= $kuji && $kuji < 80 => "凶",
  default => "大凶",
};
echo $fortune;
