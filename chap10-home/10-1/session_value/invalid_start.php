<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>session_start()</title>
  </head>
  <body>
    <h1>実験</h1>
    <?php
      echo "ここで出力しています。\n";
      ob_end_flush();
      session_start();
    ?>
  </body>
</html>
