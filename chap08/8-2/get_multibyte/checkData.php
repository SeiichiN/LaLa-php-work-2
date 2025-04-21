<?php
require_once '../../common/header.php';
?>
<body>
  <div>
    <?php
     $data = $_GET['data'];
     // $data = rawurldecode($data);
     $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
     echo "「{$data}」を受け取りました。";
    ?>
  </div>
</body>