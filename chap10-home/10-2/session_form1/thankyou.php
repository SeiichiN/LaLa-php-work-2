<?php
session_start();
require_once('../../lib/util2.php');
$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
  $name = $_SESSION['name'];
  $kotoba = $_SESSION['kotoba'];
} else {
  $error[] = "セッションエラーです";
}
killSession();
?>
<?php
function killSession() {
  $_SESSION = [];
  echo session_name(), PHP_EOL;
  if (isset($_COOKIE[session_name()])) {
    $params = session_get_cookie_params();
    print_r($params); echo PHP_EOL;
    setcookie(session_name(), '', time() - 36000, $params['path']);
  }
  session_destroy();
}
?>
<?php require_once('../../common/header.php'); ?>
<body>
  <div>
    <?php 
    if (count($error) > 0) {
      printErrorString($error);
    ?>
      <a href="input.html">最初のページにもどる</a>
    <?php } else { ?>
      <span>
        <hr>
        <span>
          名前：<?php echo h($name); ?><br>
          好きな言葉：<?php echo h($kotoba); ?><br>
          <a href="input.html">最初のページにもどる</a>
        </span>
      </span>
    <?php } ?>
  </div>
</body>