<?php
require_once('../../lib/util2.php');
session_start();
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php
      if (isset($_SESSION['coupon'])) {
        $coupon = $_SESSION['coupon'];
        $couponList = ['ABC123', 'XYZ999'];
        if (in_array($coupon, $couponList)) {
          echo h($coupon), "は、正しいクーポンコードです。";
        } else {
          echo h($coupon), "は、誤ったクーポンコードです。";
        }
      } else {
        echo "セッションエラーです。";
      }
    ?>
  </div>
</body>
</html>