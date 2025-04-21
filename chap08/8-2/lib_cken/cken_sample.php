<?php
$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');
if (mb_check_encoding($sjis_string)) {
  echo '文字列の値は UTF-8 です。';
} else {
  echo '文字列の値は UTF-8 ではありません';
}