<?php
echo "<table>";
  echo "<thead>
    <tr>";
      echo "<th>", "ID", "</th>";
      echo "<th>", "名前", "</th>";
      echo "<th>", "年齢", "</th>";
      echo "<th>", "性別", "</th>";
      echo "<th></th>";
      echo "<th></th>";
      echo "</tr>
  </thead>";
  echo "<tbody>";
    foreach ($result as $row) {
    echo "<tr>";
      echo "<td>", h($row['id']), "</td>";
      echo "<td>", h($row['name']), "</td>";
      echo "<td>", h($row['age']), "</td>";
      echo "<td>", h($row['sex']), "</td>";
      echo "<td><a href=\"update.php?id={$row['id']}\">編集</a></td>";
      echo "<td><a href=\"delete.php?id={$row['id']}\">削除</a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
  echo "</table>";
  