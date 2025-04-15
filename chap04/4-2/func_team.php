<?php
function team($name, ...$members) {
  echo $name . PHP_EOL;
  print_r($members);
}

team("鈴木", "佐藤", "田中", "加藤");
/*
Peach
Array
(
    [0] => 佐藤
    [1] => 田中
    [2] => 加藤
)
*/