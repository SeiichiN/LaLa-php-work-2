<?php
require_once('../../lib/util2.php');
checkEncode($_POST);
$error = [];
if (isset($_POST['sex'])) {
  $sexValues = ['男性', '女性'];
  $isSex = in_array($_POST['sex'], $sexValues);
  if ($isSex) {
    $sex = $_POST['sex'];
  } else {
    $sex = 'error';
    $error[] = "「性別」に入力エラーがありました";
  }
} else {
  $isSex = false;
  $sex = "女性";
}  // sex

if (isset($_POST['marriage'])) {
  $marriageValue = ['独身', '既婚', '同棲中'];
  $isMarriage = in_array($_POST['marriage'], $marriageValue);
  if ($isMarriage) {
    $marriage = $_POST['marriage'];
  } else {
    $marriage = 'error';
    $error[] = '「結婚」に入力エラーがありました';
  }
} else {
  $isMarriage = false;
  $marriage = "独身";
}
?>
<?php //----------- 画面表示 -------------------------
require_once('../../common/header.php');
?>
<body>
  <div>
    <form method="post" action="">
      <ul>
        <li><span>性別：</span>
          <label><input type="radio" name="sex" value="男性"
                  <?php echo ($sex == '男性' ? 'checked' : '') ?>>男性</label>
          <label><input type="radio" name="sex" value="女性"
                  <?php echo ($sex == '女性' ? 'checked' : '') ?>>女性</label>
        </li>
        <li><span>結婚：</span>
          <label><input type="radio" name="marriage" value="独身"
                  <?php echo ($marriage == '独身' ? 'checked' : '') ?>>独身</label>
          <label><input type="radio" name="marriage" value="既婚"
                  <?php echo ($marriage == '既婚' ? 'checked' : '') ?>>既婚</label>
          <label><input type="radio" name="marriage" value="同棲中"
                  <?php echo ($marriage == '同棲中' ? 'checked' : '') ?>>同棲中</label>
        </li>
        <li><input type="submit" value="送信する"></li>
      </ul>
    </form>
    <?php
    $isSubmited = $isSex && $isMarriage;
    if ($isSubmited) {
      echo '<hr>';
      echo h("あなたは「{$sex}、{$marriage}」です。");
    }
    if (count($error) > 0) {
      printError($error);
    }
    ?>
  </div>
</body>
</html>
