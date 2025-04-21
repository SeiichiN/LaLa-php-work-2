<?php 
require_once 'util.php';
?>
<?php
$name = $_POST['name'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo h($name); ?>
  <p><a href="index.php">もどる</a></p>
</body>
</html>