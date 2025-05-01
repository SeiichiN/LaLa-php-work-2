<?php
require_once('lib/util2.php');
if (isset($_GET['id']) && $_GET['id'] !== "") {
  $id = $_GET['id'];
} else {
  header("Location: index.php");
  exit();
}
require_once('common/dbSettings.php');
require_once('common/header.php');
?>
<main>
<?php
try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT name, age, sex FROM member WHERE id = :id";
  $stm = $pdo->prepare($sql);
  $stm->bindValue(':id', $id, PDO::PARAM_INT);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  if (count($result) === 1) {
    $name = $result[0]['name'];
    $age = $result[0]['age'];
    $sex = $result[0]['sex'];
    require_once('common/printUpdate.php');
  } else {
    echo "<p>そのデータは見つかりません</p>";
    echo '<p><a href="index.php">もどる</a></p>';
  }
} catch (Exception $e) {
  echo $e->getMessage();
}
?>
</main>
<?php 
require_once('common/aside.php');
require_once('common/footer.php');
