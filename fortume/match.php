<?php
$num = mt_rand(1, 5);

$fortune = match ($num) {
    1 => "大吉",
    2 => "中吉",
    3 => "吉",
    4 => "凶",
    default => "大凶",
};
echo $fortune;