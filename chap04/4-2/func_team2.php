<?php
function team($name, ...$members) {
  $list = implode("、", $members);
  return "{$name} : {$list}";
}

$team1 = team("鈴木", "佐藤", "田中", "加藤");
$team2 = team("かぼす", "ひろし", "さえこ");
echo $team1 . "<br>" . PHP_EOL;
echo $team2;
/*
鈴木 : 佐藤、田中、加藤<br>
かぼす : ひろし、さえこ
*/
