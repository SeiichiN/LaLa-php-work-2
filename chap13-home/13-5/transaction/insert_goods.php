<?php
require_once('../../lib/util2.php');
$gobackURL = "insertform.php";

if (!mb_check_encoding($_POST, 'UTF-8')) {
  header("Location: {$gobackURL}");
  exit();
}
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
    $errors = [];
    if (!isset($_POST['id']) || $_POST['id'] === '') {
      $errors[] = '商品IDが空です';
    }
    if (!isset($_POST['name']) || $_POST['name'] === '') {
      $errors[] = '商品名が空です';
    }
    if (!isset($_POST['brand']) || $_POST['brand'] === '') {
      $errors[] = 'ブランドが空です';
    }
    if (!isset($_POST['quantity']) || !ctype_digit($_POST['quantity'])) {
      $errors[] = '個数が整数値ではありません';
    }
    if (count($errors) > 0) {
      printError($errors);
      echo '<hr>';
      echo '<a href="', $gobackURL, '">戻る</a>';
      exit();
    }
    $user = 'inventoryuser';
    $password = 'inventoryuser';
    $dbName = 'inventory';
    $host = 'localhost:3306';
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span>';
      echo $e->getMessage();
      exit();
    }

    try {
      $pdo->beginTransaction();
      $sql1 = "INSERT INTO goods (id, name, size, brand) " . 
             " VALUES (:id, :name, :size, :brand)";
      $sql2 = "INSERT INTO stock (goods_id, quantity) VALUES (:goods_id, :quantity)";
      $insertGoods = $pdo->prepare($sql1);
      $insertStock = $pdo->prepare($sql2);
      $insertGoods->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
      $insertGoods->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
      $insertGoods->bindValue(':size', $_POST['size'], PDO::PARAM_STR);
      $insertGoods->bindValue(':brand', $_POST['brand'], PDO::PARAM_STR);
      $insertStock->bindValue(':goods_id', $_POST['id'], PDO::PARAM_STR);
      $insertStock->bindValue(':quantity', $_POST['quantity'], PDO::PARAM_INT);
      $insertGoods->execute();
      $insertStock->execute();
      $pdo->commit();
      echo "商品データ、在庫データを追加iしました";
    } catch (Exception $e) {
      $pdo->rollBack();
      echo '<span class="error">登録エラーがありました</span>';
      echo $e->getMessage();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL; ?>">もどる</a></p>
  </div>
</body>

</html>