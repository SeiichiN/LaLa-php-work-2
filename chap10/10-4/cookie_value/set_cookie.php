<?php
$message = "ハロー";
$result = setcookie("message", $message);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
      if ($result) {
        echo "クッキーを保存しました", "<hr>";
        echo '<a href="check_cookie.php">クッキー確認ページへ</a>';
      } else {
        echo '<span class="error">クッキーの保存でエラー</span>', "<br>";
      }
    ?>
  </div>
</body>
</html>