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
<?php if ($num < 20) : ?>
  大吉
<?php elseif ($num < 40) : ?>
  中吉
<?php elseif ($num < 60) : ?>
  吉
<?php elseif ($num < 80) : ?>
  凶
<?php else : ?>
  大凶
<?php endif; ?>

  </body>
</html>


