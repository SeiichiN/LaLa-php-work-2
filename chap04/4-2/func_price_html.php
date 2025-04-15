<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
function price($tanka, $kosu) {
  $souryou = 250;
  $ryoukin = $tanka * $kosu;
  if ($ryoukin<5000) {
    $ryoukin += $souryou;
  }
  return $ryoukin;
}

$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
echo "金額1は{$kingaku1}円。" . "<br>" . PHP_EOL;
echo "金額2は{$kingaku2}円。";
?>
</body>
</html>