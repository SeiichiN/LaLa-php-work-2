<?php
require_once '../../common/header.php';
?>
<body>
  <div>
    <pre>
      <?php
        require_once 'lib/util.php';
        $myCode = "<h2>テスト1</h2>";
        $myArray = [
          "a" => "<p>赤</p>",
          "b" => "<script>alert('hello')</script>"
        ];
        echo '$myCodeの値：', es($myCode);
        echo PHP_EOL . PHP_EOL;
        echo '$myArrayの値：';
        print_r(es($myArray));
      ?>
    </pre>
  </div>
</body>
