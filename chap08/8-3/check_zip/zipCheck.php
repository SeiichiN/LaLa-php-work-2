<?php  // 処理
require_once('../../lib/util2.php');
checkEncode($_POST);

$errors = [];
if (isset($_POST['zip'])) {
  $zip = trim($_POST['zip']);
  $pattern = "/^[0-9]{3}-[0-9]{4}$/";
  if (!preg_match($pattern, $zip)) {
    $errors[] = "郵便番号を正しく入力してください";
  }
} else {
  $errors[] = "郵便番号が未入力です";
}
?>
<?php  // 表示
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php
      if (count($errors) > 0) {
        printError($errors);
      } else {
        echo h("郵便番号は{$zip}です。");
      }
      moveTo('zipCheckForm.php', '戻る');
    ?>
  </div>
</body>
</html>
