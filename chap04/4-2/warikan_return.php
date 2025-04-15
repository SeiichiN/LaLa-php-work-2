
<?php
function warikan($total, $ninzu) {
  if ($ninzu <= 0) {
    echo "中断します<br>" . PHP_EOL;
    return;
  }
  $result = $total/$ninzu;
  echo "{$total}円を{$ninzu}人で分けると、{$result}円。";
  echo "<br>" . PHP_EOL;
}
warikan(2500, 2);  // 2500円を2人で分けると、1250円。<br>
warikan(1000, 0);
warikan(5500, 4);  // 5500円を4人で分けると、1375円。<br>
