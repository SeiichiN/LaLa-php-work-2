<?php
require_once('../../lib/util2.php');
$user = 'inventoryuser';
$password = 'inventoryuser';
$dbName = 'inventory';
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
  <link rel="stylesheet" href="../../css/tablestyle2.css">
</head>
<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = <<< HHH
SELECT
  goods.id AS goods_id,
  goods.name AS goods_name,
  goods.size,
  brand.name AS brand_name
FROM goods
  INNER JOIN brand
  ON goods.brand = brand.id
ORDER BY goods_id
HHH;      
      $prepare = $pdo->prepare($sql);
      $prepare->execute();
      $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
      echo "<thead><tr>";
      echo "<th>", "ID", "</th>";
      echo "<th>", "商品", "</th>";
      echo "<th>", "サイズ", "</th>";
      echo "<th>", "ブランド", "</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>", h($row['goods_id']), "</td>";
        echo "<td>", h($row['goods_name']), "</td>";
        echo "<td>", h($row['size']), "</td>";
        echo "<td>", h($row['brand_name']), "</td>";
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
</body>
</html>