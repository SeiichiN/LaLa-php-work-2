<?php
$data = ["赤井一郎","伊藤 純","上野信士"];
$glue = "さん、";
$nameList = implode($glue, $data);
$nameList .= "さん";
print_r($nameList);
// 赤井一郎さん、伊藤 純さん、上野信士さん
