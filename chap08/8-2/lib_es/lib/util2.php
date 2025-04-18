<?php
function h(string $data):string {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}