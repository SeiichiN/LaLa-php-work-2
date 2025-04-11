<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<table border="1">
<?php
for ($i=0; $i<=3; $i++) {
  echo "<tr>";
  for ($j=0; $j<=5; $j++) {
    echo "<td> {$i}-{$j} </td>";
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>


