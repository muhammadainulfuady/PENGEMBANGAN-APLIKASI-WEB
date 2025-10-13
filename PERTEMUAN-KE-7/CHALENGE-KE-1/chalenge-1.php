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
		<input type="number" name="deret" id="deret" value="<?= $_POST['deret']?>">
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>
<?php 
	if(isset($_POST['submit'])) {
		$iterasi = $_POST['deret'];
		if ($iterasi == "") {
			echo "harus ada isinya";
		} else {
			if($iterasi % 2 == 1) {
				echo "Errors:<br>Jangan ganjil yah";
			}else {
				if($iterasi < 1) {
					echo "Bilangan tidak boleh lebih kecil dari 1";
				}elseif($iterasi > 20) {
					echo "Bilangan tidak boleh lebih besar dari 20";
				}else {
					for($i = 1; $i <= $iterasi; $i++) {
						echo "Iteration Number $i". "<br>";
					}
				}
			}
		}
	}
?>

<!-- masukan angka yang benar klik submit angka teteap muncul di field masukan dan masih tetep -->

<!-- ubah code supaya field masukan tidak boleh kosong tapi tidak boleh pake atribut required -->

<!-- pastikan angka yang di masukkan itu adalah bilangan genap tidak boleh bilangan ganjil-->