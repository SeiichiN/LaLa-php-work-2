<?php
if (empty($_POST['name'])) {
  echo "nameが空です";
} else {
  echo $_POST['name'];
}
