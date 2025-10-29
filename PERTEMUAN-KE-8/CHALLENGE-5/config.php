<?php
require_once "function.php";
function getHarryPotter($pdo) {
	$stmt = $pdo->prepare("SELECT * FROM books WHERE SERIESID = (SELECT series.SERIESID FROM series WHERE series.SERIESDESCRIPTION = 'Harry Potter')");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>