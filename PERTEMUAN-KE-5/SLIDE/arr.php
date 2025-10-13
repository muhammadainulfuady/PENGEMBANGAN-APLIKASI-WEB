<?php
$angka = [5, 2, 9, 1, 7];

// count() → jumlah elemen
echo count($angka) . "<br>"; // Output: 5

// sort() → urutkan ascending
sort($angka);
print_r($angka); // Output: [1,2,5,7,9]
echo "<br>";

// asort() → urutkan array asosiatif berdasarkan nilai
$nilai = ["Ani" => 80, "Budi" => 90, "Cici" => 85];
print_r($nilai); // Output urut nilai terkecil ke terbesar
echo "<br>";

// ksort() → urutkan array asosiatif berdasarkan key
ksort($nilai);
print_r($nilai);
echo "<br>";

// array_key_exists() → cek apakah key ada
echo array_key_exists("Budi", $nilai) ? "Ada" : "Tidak Ada"; // Output: Ada
echo "<br>";

// array_push() → tambah elemen ke belakang
array_push($angka, 99);
print_r($angka); // Output: [1,2,5,7,9,99]
echo "<br>";

// array_pop() → hapus elemen terakhir
array_pop($angka);
print_r($angka); // Output: [1,2,5,7,9]
?>