<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $num = mt_rand(1, 99);
  ?>
  <?php switch ($num): ?>
<?php case $num < 20: ?>
      大吉
      <?php break; ?>
    <?php case $num < 40: ?>
      中吉
      <?php break; ?>
    <?php case $num < 60: ?>
      吉
      <?php break; ?>
    <?php case $num < 80: ?>
      凶
      <?php break; ?>
    <?php default: ?>
      大凶
  <?php endswitch; ?>

</body>

</html>