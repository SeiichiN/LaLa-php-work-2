<?php
class Robot {
  public string $name;
  public int $energy = 100;
  const FUEL = 10;

  function __construct($name) {
    $this->name = $name;
  }
  public function run() {
    echo $this->name . "が走る" . PHP_EOL;
    $this->energy -= self::FUEL;
    echo "エネルギーを" . self::FUEL . "消費した。" . PHP_EOL;
  }
  public function status() {
    echo "{$this->name}の残りエネルギーは";
    echo "{$this->energy}です";
    echo PHP_EOL;
  }
}