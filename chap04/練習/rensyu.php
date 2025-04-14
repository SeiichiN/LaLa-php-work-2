<?php
function triangle(float $teihen, float $takasa) : float {
  return $teihen * $takasa / 2;
}

$takasa = $_POST['height'];
$teihen = $_POST['bottom'];
$area = triangle($teihen, $takasa);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>底辺<?= $teihen ?>cm、高さ<?= $takasa ?>cm 
    の三角形の面積は <?= $area ?>cm<sup>2</sup></p>
  <a href="index.php">もどる</a>
</body>
</html>
