<?php
$kyori = 20;
$kakudo = 32 * pi()/180;  // ラジアン値を求める
$takasa = $kyori * tan($kakudo);
// $takasa = round($takasa*10)/10;
$takasa = round($takasa, 1);

echo "木の高さは{$takasa}です";
// 木の高さは12.5です
