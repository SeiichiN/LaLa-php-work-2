<?php
require_once('../../lib/util2.php');
checkEncode($_POST);
$errors = [];

if (isset($_POST['goukei'])) {
  $goukei = $_POST['goukei'];
  if (!ctype_digit($goukei)) {
    $errors[] = "合計金額を整数で入力してください";
  }
} else {
  $errors[] = "合計金額が未設定";
}

if (isset($_POST['ninzu'])) {
  $ninzu = $_POST['ninzu'];
  if (!ctype_digit($ninzu)) {
    $errors[] = "人数を整数で入力してください";
  } else if ($ninzu == 0) {
    $errors[] = "0人では割れません";
  }
} else {
  $errors[] = "人数が未設定";
}
?>
<?php
// 表示
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php
      // エラー処理
      if (count($errors) > 0) {
        printError($errors);
        moveTo('warikanForm.php', '戻る');
      } else {  // L74
        $amari = $goukei % $ninzu;
        $price = ($goukei - $amari) / $ninzu;
        $goukei_fmt = h(number_format($goukei));
        $price_fmt = h(number_format($price));
        $ninzu = h($ninzu);
        $amari = h($amari);
        echo "{$goukei_fmt}円を{$ninzu}で割り勘します。<br>";
        echo "一人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です。";
      }  // L84
    ?>
  </div>
</body>
</html>
