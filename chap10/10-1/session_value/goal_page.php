<?php
session_start();
require_once('../../lib/util2.php');
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
      if (isset($_SESSION['coupon'])) {
        $coupon = $_SESSION['coupon'];
        $couponList = ['ABC123', 'XYZ999'];
        if (in_array($coupon, $couponList)) {
          echo h($coupon), "は、正しいクーポンコードです";
        } else {
          echo h($coupon), "は、誤ったクーポンコードです";
        }
      } else {
        echo "セッションエラーです";
      }
    ?>
  </div>
</body>
</html>