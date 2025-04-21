<?php
$msg = "\tHello World!!   \n\n";
$result = trim($msg);
echo "処理前", PHP_EOL;
echo "[{$msg}]", PHP_EOL;
echo "処理後", PHP_EOL;
echo "[{$result}]", PHP_EOL;

/*
処理前
[	Hello World!!   

]
処理後
[Hello World!!]
*/