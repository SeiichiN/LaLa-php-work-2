<?php
ini_set('display_errors', '1');
ini_set('error_reporting', 'E_ALL');

require_once('../../lib/util2.php');
session_start();
?>
<?php
require_once('../../common/header.php');
?>
<body>
  <div>
    <?php
      $_SESSION['coupon'] = "ABC123";
    ?>
    <?php moveTo('goal_page.php', '次のページへ') ?>    
  </div>
</body>
</html>
