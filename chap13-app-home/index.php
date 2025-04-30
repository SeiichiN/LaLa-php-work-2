<?php
require_once('./lib/util2.php');
require_once('common/dbSettings.php');
?>
<?php require_once('common/header.php'); ?>
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
          require_once('common/printTable.php');
        } catch (Exception $e) {
          echo '<span class="error">エラーがありました</span>';
          echo $e->getMessage();
          exit();
        }
        ?>
      </div>
    </main>
  <?php require_once('common/aside.php'); ?>
  <?php require_once('common/footer.php');