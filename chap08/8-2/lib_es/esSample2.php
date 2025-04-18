<?php
require_once '../../common/header.php';
?>
<body>
  <div>
    <pre>
      <?php
        require_once 'lib/util2.php';
        $myCode = "<h2>テスト1</h2>";
        $myArray = [
          "a" => "<p>赤</p>",
          "b" => "<script>alert('hello')</script>"
        ];
        echo '$myCodeの値：', h($myCode);
        echo PHP_EOL . PHP_EOL;
        echo '$myArrayの値：';
        foreach ($myArray as $str) {
          echo h($str) . "<br>" . PHP_EOL;
        }
      ?>
    </pre>
  </div>
</body>
