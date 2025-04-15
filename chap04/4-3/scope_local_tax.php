<?php
const TAX = 0.1;

function taxPrice($tanka, $kosu){
  $ryoukin = $tanka * $kosu * (1+TAX);
  echo "{$ryoukin}円です";
}

taxPrice(tanka:250, kosu:4);
echo "税込み" . TAX*100 . "%";
// 1100円です税込み10%