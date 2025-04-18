<?php
require_once '../../common/header.php';
?>
<body>
  <div>
    <?php
      $no = (int)$_GET['no'];
      $nolist = [3,5,7,8,9];
      if (in_array($no, $nolist)) {
        echo "{$no}はありました。";
      } else {
        echo "{$no}は見つかりません。";
      }
    ?>
    <p><a href="checkNoForm.php">もどる</a></p>

  </div>
</body>