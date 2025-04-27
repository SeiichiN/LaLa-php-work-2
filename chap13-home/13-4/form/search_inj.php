<?php
require_once('../../lib/util2.php');
$gobackURL = "searchForm.html";

if (!mb_check_encoding($_POST, 'UTF-8')) {
  header("Location:{$gobackURL}");
  exit();
}
if (empty($_POST)) {
  header("Location:{$gobackURL}");
  exit();
} else if (!isset($_POST['name']) || $_POST['name'] === ''){
  header("Location:{$gobackURL}");
  exit();
}

$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<?php
if (isset($_POST['name'])) {
  $name = $_POST['name'];
} else {
  $name = '';
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <?php
    $name = $_POST['name'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました。";
      $sql = "SELECT * FROM member WHERE name like '%{$name}%'";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
      echo "<thead><tr>";
      echo "<th>", "ID", "</th>";
      echo "<th>", "名前", "</th>";
      echo "<th>", "年齢", "</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>", h($row['id']), "</td>";
        echo "<td>", h($row['name']), "</td>";
        echo "<td>", h($row['age']), "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } catch (PDOException $e) {
      echo '<span class="error">エラーがありました</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <form action="<?php echo $gobackURL; ?>" method="post">
      <input type="submit" value="戻る">
    </form>
  </div>
</body>

</html>