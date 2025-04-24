<?php
require_once('../../lib/util2.php');
require_once('../../lib/db_functions.php');

$gobakURL = 'insertForm.html';
if (!mb_check_encoding($_POST, 'UTF-8')) {
  header("Location:{$gobackURL}");
  exit();
}
$errors = [];
if (!isset($_POST['name']) || $_POST['name'] === '') {
  $errors[] = '名前が空です';
}
if (!isset($_POST['age']) || !ctype_digit($_POST['age'])) {
  $errors[] = '年齢には数値を 入力してください';
}
if (!isset($_POST['sex']) || !in_array($_POST['sex'], ['男', '女'])) {
  $errors[] = '性別が男または女ではありません';
}
if (count($errors) > 0) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>", $value, "</li>";
  }
  echo '</ol>';
  echo '<hr>';
  echo '<a href="', $gobakURL, '">戻る</a>';
  exit();
}
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];

$pdo = connect();
$result = insert($pdo, $name, $age, $sex);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>
<body>
  <div>
    <?php
    if ($result) {
      $list = findAll($pdo);
      echo "<table>";
      echo "<thead><tr>";
      echo "<th>", "ID", "</th>";
      echo "<th>", "名前", "</th>";
      echo "<th>", "年齢", "</th>";
      echo "<th>", "性別", "</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($list as $row) {
        echo "<tr>";
        echo "<td>", h($row['id']), "</td>";
        echo "<td>", h($row['name']), "</td>";
        echo "<td>", h($row['age']), "</td>";
        echo "<td>", h($row['sex']), "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } else {
      echo '<span class="error">追加エラーがありました</span>';
    }
    
    ?>
  </div>
</body>
</html>
