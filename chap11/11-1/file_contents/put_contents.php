<?php
$filename = "mytext.txt";
$writedata = <<< HHH
あいうえお
かきくけこ
さしすせそ
HHH;
$result = touch($filename);
if ($result) {
  file_put_contents($filename, $writedata, LOCK_EX);
  echo "{$filename}にデータを書き出しました";
  echo "<hr>";
  echo '<a href="get_contents.php">ファイルを読み込む</a>';
} else {
  echo '<span class="">ファイルに保存できませんでした</span>';
}