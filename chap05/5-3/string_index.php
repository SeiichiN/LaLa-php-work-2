<?php
$id = "Pease";
//     01234
$length = strlen($id);
for ($i=0; $i<$length; $i++) {
  $chr = $id[$i];
  echo "{$i}-", $chr, PHP_EOL;
}

$id2 = "愛とピース";
$length2 = mb_strlen($id2);
for ($i=0; $i<$length2; $i+=1) {
  $chr2 = $id2[$i];
  echo "{$i}-", $chr2, PHP_EOL;
}

