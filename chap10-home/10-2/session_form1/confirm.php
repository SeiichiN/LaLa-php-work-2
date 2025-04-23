<?php
session_start();
require_once('../../lib/util2.php');
checkEncode($_POST);
?>
<?php
if (isset($_POST['name'])) {
  $_SESSION['name'] = trim(mb_convert_kana($_POST['name'], 's'));
}
if (isset($_POST['kotoba'])) {
  $_SESSION['kotoba'] = trim(mb_convert_kana($_POST['kotoba'], 's'));
}
$error = [];
if (empty($_SESSION['name'])) {
  $error[] = '名前を入力してください。';
} else {
  $name = $_SESSION['name'];
}
if (empty($_SESSION['kotoba'])) {
  $error[] = '好きな言葉を入力してください。';
} else {
  $kotoba = $_SESSION['kotoba'];
}
?>
<?php require_once('../../common/header.php'); ?>

<body>
  <div>
    <?php
    if (count($error) > 0) {
      printErrorString($error);
    ?>
      <span>
        <input type="button" value="戻る"
          onclick="location.href='input.html'">
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
  </div>
</body>