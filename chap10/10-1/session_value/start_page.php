<?php
session_start();
?>
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
      $_SESSION['coupon'] = 'AB&123';
    ?>
    <a href="goal_page.php">次のページ</a>
  </div>
</body>
</html>