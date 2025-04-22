<?php
require_once('../../common/header.php');
?>
<body>
  <div>
    <form method="post" action="warikan.php">
      <ul>
        <li><label>合計金額：<input type="number" name="goukei"></label></li>
        <li><label>人数：<input type="number" name="ninzu"></label></li>
        <li><input type="submit" value="割り勘する"></li>
      </ul>
    </form>
  </div>
</body>
</html>
