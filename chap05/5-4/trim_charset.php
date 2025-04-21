<?php
$msg = "　東京都千代田区　\n\n";
$result = trim(mb_convert_kana($msg, "as"));
echo "処理前", PHP_EOL;
echo "[{$msg}]", PHP_EOL;
echo "処理後", PHP_EOL;
echo "[{$result}]", PHP_EOL;
/*
処理前
[　東京都千代田区　

]
処理後
[東京都千代田区]
*/
