<?php
$result1 = preg_match("/4.-49/", "確か49-46でした");
$result2 = preg_match("/4.-49/", "たぶん46-49だった");
$result3 = preg_match("/4.-49/u", "4あ-49かな？");
var_dump($result1);  // 0
var_dump($result2);  // 1
var_dump($result3);  // 1
