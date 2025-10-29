<?php  
require_once "function.php";
$customers = getData($pdo);
$nama = "firstname";
$alamat = "addres";
$uang = "balance";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge-4</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- untuk bagian challenge -->
	<div class="challenge">
		<h1>Challenge #4</h1>
		<p>Buatlah basisdata dengan nama “bookstore”! Di dalam basisdata “bookstore”, buatlah tabel dengan nama “series” dan “books” agar dapat diisi data berikut:
		</p>
		<img src="gambar-3.png" alt="eror">
	</div>

	<div class="container">
		<table>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>BALANCE</th>
			</tr>
			<?php $count = 1 ?>
			<?php foreach ($customers as $key) :?>
			<tr>
				<td>
					<?= $count ?>
				</td>
				<td>
					<?=  $key[$nama] ?>
				</td>
				<td>
					<?=  $key[$alamat] ?>
				</td>
				<td>
					<?=  $key[$uang] ?>
				</td>
			</tr>
			<?php $count += 1 ?>
			<?php endforeach ?>
			</tr>
		</table>
	</div>
</body>
</html>