<?php
function price(string $str) {
  $kakaku = 3000;
  $length = mb_strlen($str);
  if ($length>10){
    $kakaku += ($length - 10) * 100;
  }
  $kakaku = number_format($kakaku);
  $result = "{$length}文字 {$kakaku}円";
  return $result;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <pre> -->
  <?php
    $msg1 = "Hello World!";
    $msg2 = "ハローワールド";
    echo price($msg1);
    echo "<br>", PHP_EOL;
    echo price($msg2);
  ?>
  <!-- </pre> -->
</body>
</html>