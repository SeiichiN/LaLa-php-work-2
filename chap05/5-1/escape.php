<?php
$msg = "私の名前は\"太郎\"です";
echo $msg;
// 私の名前は"太郎"です

$msg2 = "\r\nabc\r\ndef";  // windows
echo $msg2;
// 私の名前は"太郎"です
// abc
// def

$msg3 = PHP_EOL . "\\ \$ { }";
echo $msg3;
// \ $ { }

$msg4 = PHP_EOL . "\101 \x42";
echo $msg4;
// A B
