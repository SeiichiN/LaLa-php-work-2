<?php
function connect() {
  $user = 'testuser';
  $password = 'testuser';
  $dbName = 'testdb';
  $host = 'localhost:3306';
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    $pdo = null;
  }
  return $pdo;
}

function findAll(PDO $pdo) {
  try {
    $sql = 'SELECT * FROM member';
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo '<span class="error">エラーがありました</span>';
    echo $e->getMessage();
    $result = [];
  }
  return $result;  
}

function insert($pdo, $name, $age, $sex) {
  try {
    $sql = "INSERT INTO member (name, age, sex) VALUES (:name, :age, :sex)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $name, PDO::PARAM_STR);
    $stm->bindValue(':age', $age, PDO::PARAM_INT);
    $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
    $result = $stm->execute();    
  } catch (PDOException $e) {
    echo '<span class="error">エラーがありました</span>';
    echo $e->getMessage();
    $result = false;
  }
  return $result;
}