<?php
require_once 'Robot.php';

$robot1 = new Robot("Taro");
$robot1->run();
$robot2 = new Robot("Hanako");
$robot2->run();
echo "走って使う燃料は" . Robot::FUEL . "です。";
$robot1->status();

