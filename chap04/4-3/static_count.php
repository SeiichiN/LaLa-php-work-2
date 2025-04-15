<?php
function countUp() {
  static $count = 0;
  $count += 1;
  return $count;
}

for ($i=1; $i<=10; $i++) {
  $num = countUp();
  echo "{$num}回目。";
}