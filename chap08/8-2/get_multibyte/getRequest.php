<?php
require_once '../../common/header.php';
?>
<body>
  <div>
  <?php
    $data = "<h1>東京</h1>";
    $data = rawurlencode($data);
  ?>
  <p><a href="checkData.php?data=<?= $data; ?>">送信する</a></p>
</div>
</body>
</html>
