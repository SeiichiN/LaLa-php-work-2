<?php
ob_start();
echo "出力";
ob_end_flush();
header("Location: start_page.php");
session_start();  // ← ここでエラーになる
