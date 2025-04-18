<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
      $tanka = (int)$_POST['tanka'];
      $kosu = (int)$_POST['kosu'];
      $price = $tanka * $kosu;
      $tanka = number_format($tanka);
      $price = number_format($price);
      echo "単価{$tanka}円 ✕ {$kosu}個は {$price}円です。";
    ?>
  </div>
</body>
</html>