<?php
session_start();
require_once('../../lib/util2.php');
?>
<?php
if (!mb_check_encoding($_POST, 'UTF-8')) {
  $err = "Encoding Error: The expected encofing is UTF-8";
  exit($err);
}
if (isset($_POST['name'])) {
  $_SESSION['name'] = trim(mb_convert_kana($_POST['name'], 's'));
}
if (isset($_POST['kotoba'])) {
  $_SESSION['kotoba'] = trim(mb_convert_kana($_POST['kotoba'], 's'));
}
$error = [];
if (empty($_SESSION['name'])) {
  $error[] = "名前を入力してください";
} else {
  $name = $_SESSION['name'];
}
if (empty($_SESSION['kotoba'])) {
  $error[] = "好きな言葉を入力してください";
} else {
  $kotoba = $_SESSION['kotoba'];
}
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
    <form>
      <?php if (count($error) > 0) { ?>
        <span class="error">
          <?php echo implode('<br>', $error); ?>
        </span>
        <span>
          <input type="button" value="戻る"
            onclick="location.href= 'input.html'">
        </span>
      <?php } else { ?>
        <span>
          名前：<?php echo h($name); ?><br>
          好きな言葉：<?php echo h($kotoba); ?><br>
          <input type="button" value="戻る"
            onclick="location.href='input.html'">
          <input type="button" value="送信する"
            onclick="location.href='thankyou.php'">
        </span>
      <?php } ?>
    </form>
  </div>
</body>

</html>