<?php
$dbc = new PDO("mysql:host=localhost;dbname=customer_db", "root", "");
function tambahData($firstname, $addres)
{
	try {
		global $dbc;
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $dbc->prepare("INSERT INTO customer (firstname, address, balance) VALUES (:firstname, :address, :balance)");
		$statement->bindValue(':firstname', $_GET['firstname']);
		$statement->bindValue(':address', $_GET['address']);
		$statement->bindValue(':balance', 0);
		$statement->execute();
		header("Location:challenge-3.php");

	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function updateData($firstname, $addres)
{
	$customerID = $_GET['customerID'];
	if ($customerID === "" || !is_numeric($customerID)) {
		require_once "challenge-4.php";
		$str_eror = "Error: ID harus berupa angka!";

		array_push($eror, $str_eror);
		foreach ($eror as $key) {
			echo "$key";
		}
	} else {
		global $dbc;
		$statement = $dbc->prepare("UPDATE customer SET firstname = :firstname, address = :address WHERE customerID = :customerID");
		$statement->bindValue(':firstname', $_GET['firstname']);
		$statement->bindValue(':address', $_GET['address']);
		$statement->bindValue(':customerID', $_GET['customerID']);
		$statement->execute();
		header("Location:challenge-5.php");
	}
}

function deleteData($customerID)
{
	global $dbc;
	$customerID = $_GET['customerID'];
	if ($customerID === "" || !is_numeric($customerID)) {
		require_once "challenge-5.php";
		$eror = [];
		$str_eror = "Error: ID harus berupa angka! dan tidak boleh kosong.";
		array_push($eror, $str_eror);
		foreach ($eror as $key) {
			echo "$key";
		}
	} else {
		$statement = $dbc->prepare("DELETE FROM customer WHERE customerID = :customerID");
		$statement->bindValue(':customerID', $_GET['customerID']);
		$statement->execute();
		header("Location:challenge-5.php");
	}
}

if (isset($_GET['add_data'])) {
	$firstname = $_GET['firstname'];
	$address = $_GET['address'];
	tambahData($firstname, $address);
}

if (isset($_GET['update_data'])) {
	$firstname = $_GET['firstname'];
	$address = $_GET['address'];
	updateData($firstname, $address);
}

if (isset($_GET['hapus_data'])) {
	$customerID = $_GET['customerID'];
	deleteData($customerID);
}
?>