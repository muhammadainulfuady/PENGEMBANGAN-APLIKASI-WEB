<?php
// inisialisasi array:
$foo = array(36, 19, 27, 9, 10, 10, -89);
echo $foo[0]; // 36
echo $foo[2]; // 27
$foo[3] = 42; // $foo[3] berubah menjadi 42
echo $foo[3];
$i = 4;
$foo[$i] = 34; // $foo[4] berubah menjadi 34
echo $foo[$i];
// isi array berbeda tipe data:
$bar = array(42, 3.14, 'Fred', True);
$bar = array(); // array kosong
print_r($foo);
?>