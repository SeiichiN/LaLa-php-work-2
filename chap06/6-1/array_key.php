<?php
$goods = [
  "id" => "R56",
  "size" => "M",
  "price" => 2340,
];
$goods['price'] = 3000;
echo "id:" . $goods['id'] . PHP_EOL;
echo "サイズ:", $goods['size'], PHP_EOL;
echo "価格:" . number_format($goods['price']) . "円" . PHP_EOL;
// print_r($goods);
?>
<html><body>
  <script>
    'use strict';

    const goods = {
      id: "R56",
      size: "M",
      price: 2350,
    };
    console.log(goods.id);
    console.log(goods['price']);
  </script>
</body></html>
