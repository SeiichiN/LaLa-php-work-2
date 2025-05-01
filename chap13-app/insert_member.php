<?php
require_once('lib/util2.php');
$gobackURL = "insertForm.php";

if (!mb_check_encoding($_POST, "UTF-8")) {
  header("Location: {$gobackURL}");
  exit();
}

$errors = [];

if (!isset($_POST['name']) || $_POST['name'] === "") {
  $errors[] = "名前が空です";
}
if (!isset($_POST['age']) || $_POST['age'] === "") {
  $errors[] = "年齢には数値を入れてください";
}
if (!isset($_POST['sex']) || $_POST['sex'] === "") {
  $errors[] = "性別が男または女ではありません";
}

if (count($errors) > 0) {
  printError($errors);
  echo "<hr>";
  echo "<a href=", $gobackURL, ">戻る</a>";
  exit();
}
require_once('common/dbSettings.php');

?>
<?php require_once('common/header.php') ?>
<main>
  <div>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = <<< HHH
INSERT INTO member (name, age, sex) 
VALUES (:name, :age, :sex)
HHH;
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', $name, PDO::PARAM_STR);
      $stm->bindValue(':age', $age, PDO::PARAM_INT);
      $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
      $rrr = $stm->execute();
      if ($rrr) {
        echo "<p>新規登録できました。</p>";
        echo '<a href="index.php">一覧へ</a>';
        // exit();
      } else {
        echo '<span class="error">追加エラーがありました</span>';
      }  // if end
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL ?>">もどる</a></p>
  </div>
</main>
<?php
require_once('common/aside.php');
require_once('common/footer.php');

