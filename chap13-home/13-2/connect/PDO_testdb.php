<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
      $user = 'testuser';
      $password = 'testuser';
      $dbName = 'testdb';
      $host = 'localhost:3306';
      $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
      try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "データベース{$dbName}に接続しました。";
        $pdo = NULL;
      } catch (PDOException $e) {
        echo '<span class="error">エラーがありました</span>';
        echo $e->getMessage();
        exit();
      }
    ?>
  </div>
</body>
</html>