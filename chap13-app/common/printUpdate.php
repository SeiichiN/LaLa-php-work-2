<form action="" method="post">
  <table>
    <tr>
      <th>ID</th>
      <td><?php echo h($id) ?></td>
    </tr>
    <tr>
      <th>名前</th>
      <td>
        <input type="text" name="name"
               value="<?php echo h($name) ?>">
      </td>
    </tr>
    <tr>
      <th>年齢</th>
      <td>
        <input type="number" name="age"
              value="<?php echo h($age) ?>">
      </td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
        <input type="radio" name="sex" value="男"
               <?php echo ($sex === '男') ? 'checked' : '' ?>>男性<br>
        <input type="radio" name="sex" value="女"
               <?php echo ($sex === '女') ? 'checked' : '' ?>>女性
      </td>
    </tr>
  </table>
</form>
