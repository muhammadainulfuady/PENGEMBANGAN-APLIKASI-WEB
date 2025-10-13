<?php
$angka = -9.7;

// abs() → nilai mutlak
echo abs($angka) . "<br>"; // Output: 9.7

// ceil() → pembulatan ke atas
echo ceil(4.2) . "<br>"; // Output: 5

// floor() → pembulatan ke bawah
echo floor(4.9) . "<br>"; // Output: 4

// log() → logaritma natural
echo log(10) . "<br>";

// min() dan max()
echo min(2, 5, 8, 1) . "<br>"; // Output: 1
echo max(2, 5, 8, 1) . "<br>"; // Output: 8

// pow() → pangkat
echo pow(2, 3) . "<br>"; // Output: 8

// round() → pembulatan normal
echo round(4.6) . "<br>"; // Output: 5

// rand() → angka acak
echo rand(1, 100) . "<br>";

// sqrt() → akar kuadrat
echo sqrt(81) . "<br>"; // Output: 9

// sin(), cos(), tan()
echo sin(pi() / 2) . "<br>"; // Output: 1
echo cos(0) . "<br>";     // Output: 1
echo tan(pi() / 4) . "<br>"; // Output: 1
?>