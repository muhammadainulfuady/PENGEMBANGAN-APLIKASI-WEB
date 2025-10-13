<?php
$text = "   Universitas Trunojoyo Madura   ";

// strlen() → hitung jumlah karakter
echo strlen($text) . "<br>";   // Output: 33

// substr() → ambil sebagian string
echo substr($text, 0, 11) . "<br>"; // Output: Universitas

// trim() → hapus spasi di depan & belakang
echo trim($text) . "<br>"; // Output: Universitas Trunojoyo Madura

// strstr() → cari string pertama kali muncul
echo strstr("ainulfuady@gmail.com", "@") . "<br>"; // Output: @gmail.com
?>