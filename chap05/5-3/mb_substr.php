<?php
$msg = "吾輩は猫である。名前はまだない。";
//      0 1 2 3 4 5 6 7 8 9 101112131415
echo mb_strlen($msg), PHP_EOL;         // 16
echo mb_substr($msg, 4), PHP_EOL;      // である。名前はまだない。
echo mb_substr($msg, 4, 10), PHP_EOL;  // である。名前はまだな
echo mb_substr($msg, -6), PHP_EOL;     // はまだない。

