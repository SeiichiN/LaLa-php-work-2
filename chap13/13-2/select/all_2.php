<?php
require_once('../../lib/util2.php');
$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<?php
$result = [];
try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "データベース{$dbName}に接続しました";
  $sql = "SELECT * FROM member";
  $stm = $pdo->prepare($sql);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  echo '<span class="error">エラーがありました</span>';
  echo $e->getMessage();
  // exit();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>

<body>
  <div>
    <?php if (count($result) > 0) { ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $row) { ?>
            <tr>
              <td><?php echo h($row['id']) ?></td>
              <td><?php echo h($row['name']) ?></td>
              <td><?php echo h($row['age']) ?></td>
              <td><?php echo h($row['sex']) ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } ?>

  </div>
</body>

</html>