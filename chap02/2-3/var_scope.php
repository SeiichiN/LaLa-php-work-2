<html>
  <body>
    <h1>変数のスコープ</h1>
    <?php
      $a = 5;
      if ($a === 5) {
        $a = 10;
        echo $a, "<br>";  # 10
        $b = 3;
      }
      echo $a, "<br>";  # 10
      echo $b, "<br>";  # 3
    ?>

    <script>
      'use strict';

      let a = 5;
      if (a === 5) {
        let a = 10;
        console.log(a);  // 10
        let b = 3;
      }
      console.log(a)  // 5
      console.log(b);  // Error
    </script>
  </body>
</html>