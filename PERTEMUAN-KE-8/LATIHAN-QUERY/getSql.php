<?php

// alamaat server
$host = "localhost";
// nama db kita
$dbname = "customer_db";
// username db kita
$username = "root";
// password kosong
$password = "";


// langkah pertama kita akan membuat fungsi dari pdo itu sendiri
try {
	// kita panggil host dan juga passwordd dan username
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	// jika gagal dia akan mengirim kan pesan gagal
	die("Koneksi gagal : " . $e->getMessage());
}
?>