<?php
$a = mt_rand(0,50);
$b = mt_rand(0,50);
// $bigger = ($a > $b) ? $a : $b;
if ($a > $b) {
  $bigger = $a;
} else {
  $bigger = $b;
}
echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
