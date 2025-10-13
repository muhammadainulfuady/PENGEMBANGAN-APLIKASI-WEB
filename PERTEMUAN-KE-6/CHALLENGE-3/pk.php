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
		<br>
		<label for="">Masukan pangkat</label>
		<input type="number" name="pangkat" id="pangkat">
		<button type="submit" name="submit">Submit</button>
		<br>
		<select value="pilihan">
			<option name="memimilih" id="memimilih" value="memimilih">Decremnet</option>
			<option name="memimilih" id="memimilih" value="memimilih">Increment</option>
		</select>
	</form>
	<?php 
	if(isset($_POST['submit'])) {
		$batas = $_POST['deret'];
		$pangkat = $_POST['pangkat'];
		$temp = 1;
		$lst = [];
		if ($_POST['memilih'] == "Decrement") {
			for ($i=1; $i <= $batas ; $i++) { 
				echo "$i". "<br>";
			}
		}
		for($i = 1; $i <= $batas; $i++) {
			$lst[] = $i;
		}
		foreach ($lst as $key) {
			echo $key ** $pangkat. "<br>";
		}
}
?>
</body>
</html>