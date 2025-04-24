<?php
require_once('../../lib/util2.php');

$filename = "mytext.txt";
$result = touch($filename);
if ($result) {
  $readdata = file_get_contents($filename);
  $readdata = h($readdata);
  // false -- <br>で出力
  // true -- <br />で出力
  $readdata_br = nl2br($readdata, false);
  echo "{$filename}を読み込みました<br>";
  echo $readdata_br;
  echo "<hr>";
  echo '<a href="put_contents.php">ファイルに書き込む</a>';
} else {
  echo '<span class="">ファイルを読み込めませんでした</span>';
}