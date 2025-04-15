<?php
function oneUp(&$var) {
  $var += 1;
}

$num = 5;
oneUp($num);
echo $num;  // 6
