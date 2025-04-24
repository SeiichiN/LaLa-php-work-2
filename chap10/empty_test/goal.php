<?php
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  if ($name !== '') {
    echo $name, "です";
  } else {
    echo "nameは空です";
  }
} else {
  echo "nameは未設定です";
}
