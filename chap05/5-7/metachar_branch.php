<?php
$pattern = "/東京|横浜/u"; // 含まれていればOK
var_dump(preg_match($pattern, "東京タワー")); // 1
var_dump(preg_match($pattern, "横浜駅前")); // 1
var_dump(preg_match($pattern, "新東京美術館")); // 1
var_dump(preg_match($pattern, "東横ホテル")); // 0


