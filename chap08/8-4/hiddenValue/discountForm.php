<?php
require_once ('../../lib/util2.php');
checkEncode($_POST);
if (isset($_POST['kosu'])) {
  $kosu = $_POST['kosu'];
  if (!ctype_digit($kosu)) {
    $kosu = '';
  }
} else {
  $kosu = '';
}
?>
<?php  // ここから表示
$title = "金額の計算";
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php
      $discount = 0.8;
      $off = (1 - $discount) * 100;
      if ($discount > 0){
        echo "<h2>このページでのご購入は {$off}% OFF になります！</h2>";
      }
      $tanka = 2900;
      $tanka_fmt = number_format($tanka);
    ?>
    <form method="post" action="discount.php">
      <input type="hidden" name="discount" value="<?php echo $discount ?>">
      <input type="hidden" name="tanka" value="<?php echo $tanka ?>">
      <ul>
        <li><label>単価：<?php echo $tanka_fmt; ?>円</label></li>
        <li><label>個数：
          <input type="number" name="kosu"
                  value="<?php echo h($kosu) ?>">
        </label></li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
  </div>
</body>
</html>
