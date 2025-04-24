<?php
require_once('../../lib/util2.php');
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
$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
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
      $name = $_POST['name'];
      $age = $_POST['age'];
      $sex = $_POST['sex'];
      try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO member (name, age, sex) VALUES (:name, :age, :sex)";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':name', $name, PDO::PARAM_STR);
        $stm->bindValue(':age', $age, PDO::PARAM_INT);
        $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
        if ($stm->execute()) {
          header("Location: all.php");
          exit();
        } else {
          echo '<span class="error">追加エラーがありました</span>';
        }
       } catch (PDOException $e) {
        echo '<span class="error">エラーがありました</span>';
        echo $e->getMessage();
       }
    ?>
  </div>
</body>
</html>
