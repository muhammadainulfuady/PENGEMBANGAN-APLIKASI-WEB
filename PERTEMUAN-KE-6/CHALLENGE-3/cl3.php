
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label>Masukkan jumlah deret angka : </label>
		<input type="number" name="deret" id="deret">
		<button type="submit" name="submit">Submmit</button>
	</form>
</body>
</html>
<?php 
	if(isset($_POST['submit'])) {
		$batas = $_POST['deret'];
		$temp = 1;
		for($i = 1; $i <= $batas; $i++) {
			echo "$temp". "<br>";
			$temp += sqrt($temp);
		}
	} else {
		echo "Masukkan Angka";
	}
?>