<?php
require_once('./lib/util2.php');
$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tablestyle.css">
  <link rel="stylesheet" href="css/addstyle.css">
</head>

<body>
  <header>
    <h1>社員情報管理</h1>
  </header>
  <div class="content">
    <main>
      <h2>社員一覧</h2>
      <div>
        <?php
        try {
          $pdo = new PDO($dsn, $user, $password);
          $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT id, name, age, sex FROM member";
          $stm = $pdo->prepare($sql);
          $stm->execute();
          $result = $stm->fetchAll(PDO::FETCH_ASSOC);
          echo "<table>";
          echo "<thead><tr>";
          echo "<th>", "ID", "</th>";
          echo "<th>", "名前", "</th>";
          echo "<th>", "年齢", "</th>";
          echo "<th>", "性別", "</th>";
          echo "<th></th>";
          echo "<th></th>";
          echo "</tr></thead>";
          echo "<tbody>";
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", h($row['id']), "</td>";
            echo "<td>", h($row['name']), "</td>";
            echo "<td>", h($row['age']), "</td>";
            echo "<td>", h($row['sex']), "</td>";
            echo "<td><a href=\"update.php?id={$row['id']}\">編集</a></td>";
            echo "<td><a href=\"delete.php?id={$row['id']}\">削除</a></td>";
            echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
        } catch (Exception $e) {
          echo '<span class="error">エラーがありました</span>';
          echo $e->getMessage();
          exit();
        }
        ?>
      </div>
    </main>
    <aside>
        <h2>補助機能</h2>
        <form action="like.php" method="post">
          <input type="text" name="name" placeholder="名前">
          <input type="submit" value="検索">
        </form>
    </aside>
  </div><!-- .content end -->
  <footer>
    <small>&copy; 2025 Seiichi Nukayama</small>
  </footer>
</body>

</html>