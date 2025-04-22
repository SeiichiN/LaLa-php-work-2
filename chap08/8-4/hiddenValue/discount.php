<?php  // 処理
require_once('../../lib/util2.php');
checkEncode($_POST);
$errors = [];

if (isset($_POST['discount'])) {
  $discount = $_POST['discount'];
  if (!is_numeric($discount)) {
    $errors[] = "割引率の数値エラー";
  }
} else {
  $errors[] = "割引率が未設定";
}

if (isset($_POST['tanka'])) {
  $tanka = $_POST['tanka'];
  if (!ctype_digit($tanka)) {
    $errors[] = "単価の数値エラー";
  }
} else {
  $errors[] = "単価が未設定";
}

if (isset($_POST['kosu'])) {
  $kosu = $_POST['kosu'];
  if (!ctype_digit($kosu)) {
    $errors[] = "個数は正の整数を入力してください";
  }
} else {
  $errors[] = "個数が未設定";
}
?>
<?php // 画面出力
require_once('../../common/header.php');
?>

<body>
  <div>
    <?php
    if (count($errors) > 0) {
      printError($errors);
    } else {
      $price = $tanka * $kosu;
      $discount_price = floor($price * $discount);
      $off_price = $price - $discount_price;
      $off_per = (1 - $discount) * 100;
      $tanka_fmt = number_format($tanka);
      $discount_price_fmt = number_format($discount_price);
      $off_price_fmt = number_format($off_price);
      echo h("単価：{$tanka_fmt}円、個数：{$kosu}個"), "<br>";
      echo h("金額：{$discount_price_fmt}円"), "<br>";
      echo h("（割引：{$off_price_fmt}円、{$off_per}% OFF）"), "<br>";
    ?>
    <?php } ?>
    <form method="post" action="discountForm.php">
      <input type="hidden" name="kosu" value="<?php echo $kosu ?>">
      <ul>
        <li><input type="submit" value="戻る"></li>
      </ul>
    </form>
  </div>
</body>

</html>