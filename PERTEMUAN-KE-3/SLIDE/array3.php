<?php
$foo = array(36, 19, 27, 9, 10, 10, -89);
$foo[99] = 3; // OK
echo $foo[99]; // 3
echo $foo[7]; // Runtime error
?>