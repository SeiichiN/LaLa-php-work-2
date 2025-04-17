<?php
$data = "赤井一郎,伊藤 純,上野信士";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);
/*
Array
(
    [0] => 赤井一郎
    [1] => 伊藤　純
    [2] => 上野信士
)
*/
