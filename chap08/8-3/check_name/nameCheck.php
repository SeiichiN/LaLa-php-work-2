<?php
require_once('../../lib/util2.php');
checkEncode($_POST);
$isError = false;
if (isset($_POST['name'])) {
  $name = trim($_POST['name']);
  if ($name === ""){  // 何も入力しないで送信
    $isError = true;
    echo "何も入力しないで送信したね";
  }
} else {
  $isError = true;
  echo "POSTが空っぽ";
}
?>
<?php
// ここから画面表示
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php if ($isError): ?>
      <span class="error">名前を入力してください</span>
      <?php moveTo("nameCheckForm.php", "戻る") ?>
    <?php else: ?>
      <span>
        こんにちは、<?php echo h($name); ?>さん。
      </span>
    <?php endif; ?>
  </div>
</body>