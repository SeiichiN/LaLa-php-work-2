<?php
$filepath = "/goods/image/cat/";
var_dump(preg_match("/\/image\//", $filepath));
var_dump(preg_match("#/image/#", $filepath));
