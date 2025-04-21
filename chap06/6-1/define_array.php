<?php
// define("RANK", ["松", "竹", "梅"]);
const RANK = ["松", "竹", "梅"];
print_r(RANK);
// RANK[1] = "熊"; 定数は変更できない
echo RANK[1];
?>
<html><body>
<script>
  'use strict';
  const rank = ['松', '竹', '梅'];
  rank[1] = "熊";
  console.log(rank);
</script>
</body></html>
