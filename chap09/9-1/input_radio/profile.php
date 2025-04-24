<?php
require_once('../../lib/util2.php');

if (!mb_check_encoding($_POST, 'UTF-8')) {
  $err = "Encoding Error! The expected encoding is UTF-8";
  die($err);  
}
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
  $sex = "男性";
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
// $value -- '男性', '女性'
// $checkedValues -- ['男性'] or ['女性']
function checked(string $value, array $checkedValues) {
  $isCkecked = in_array($value, $checkedValues);
  if ($isCkecked) {
    echo 'checked';
  }
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
    <form method="post" action="">
      <ul>
        <li><span>性別：</span>
          <label><input type="radio" name="sex" value="男性"
                  <?php checked('男性', [$sex]) ?>>男性</label>
          <label><input type="radio" name="sex" value="女性"
                  <?php checked('女性', [$sex]) ?>>女性</label>
        </li>
        <li><span>結婚：</span>
          <label><input type="radio" name="marriage" value="独身"
                  <?php checked('独身', [$marriage]) ?>>独身</label>
          <label><input type="radio" name="marriage" value="既婚"
                  <?php checked('既婚', [$marriage]) ?>>既婚</label>
          <label><input type="radio" name="marriage" value="同棲中"
                  <?php checked('同棲中', [$marriage]) ?>>同棲中</label>
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
