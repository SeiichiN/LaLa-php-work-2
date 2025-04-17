<?php
$namelist = ["赤井一郎", "伊藤ゴロー", "上野信士"];
echo "<ol>", PHP_EOL; 
foreach($namelist as $value) {
  echo "<li>", $value, "</li>", PHP_EOL;
}
echo "</ol>", PHP_EOL;