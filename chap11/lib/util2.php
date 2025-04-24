<?php
function h(string $data):string {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function checkEncode(array|string $data) {
  if (!mb_check_encoding($data, 'UTF-8')) {
    $err = "Encoding Error! The expected encoding is UTF-8";
    die($err);  
  }
}

function moveTo(string $path, string $msg) {
  ?>
  <form method="post" action="<?= $path ?>">
    <input type="submit" value="<?= $msg ?>">
  </form> 
  <?php
}

function printError(array $errors) {
  echo '<ol class="error">';
  foreach($errors as $value) {
    echo "<li>{$value}</li>";
  }
  echo '</ol>';
}
