<?php
$pattern = "/^山/u"; 
var_dump(preg_match($pattern, "山田建設")); // 1
var_dump(preg_match($pattern, "山本接骨医院")); // 1
var_dump(preg_match($pattern, "大山観光")); // 0
var_dump(preg_match($pattern, "藤田商店、山崎商店")); // 0

