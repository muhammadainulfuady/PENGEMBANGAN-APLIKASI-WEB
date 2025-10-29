<?php
require_once "getSql.php";

// challenge-1
// Balance setidaknya data itu lebih dari 1 juta
function getData($pdo) {
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE balance >= 1000000 ORDER BY balance DESC");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// challenge-2
// Between untuk mengatur rentang yang ada dari 1 juta - 2 juta
function getDataDesc($pdo) {
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE balance BETWEEN 1000000 AND 2000000 ORDER BY firstname DESC");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// challenge-3
// % yang penting data itu ada %
// % Yang penting ada surabaya di belakang
// Yang penting ada surabaya di bagian depan  %
function getDataAddres($pdo) {
	$stmt = $pdo->prepare("SELECT * FROM customer WHERE addres like '%Surabaya%'");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>