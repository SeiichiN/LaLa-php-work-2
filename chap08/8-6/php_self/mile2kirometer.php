<?php  // 処理
require_once('../../lib/util2.php');
checkEncode($_POST);
if (isset($_POST['mile'])) {
  $isNum = is_numeric($_POST['mile']);
  if ($isNum) {
    $mile = $_POST['mile'];
    $error = "";
  } else {
    $mile = "";
    $error = '<span class="error">←数値を入力してください</span>';
  }
} else {
  $isNum = false;
  $mile = "";
  $error = "";
}
?>
<?php  // 画面表示
require_once('../../common/header.php');
?>
<body>
  <div>
    <form method="post" action="">
      <ul>
        <li>
          <label>マイルをKMに換算：
            <input type="text" name="mile"
                   value="<?php echo h($mile) ?>">
          </label>
        </li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
    <?php
      if ($isNum) {
        echo '<hr>';
        $kirometer = $mile * 1.609344;
        echo h("{$mile}マイルは{$kirometer}kmです");
      }
    ?>
  </div>
</body>
</html>
