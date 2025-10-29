<?php  
require_once "function.php";
$customers = getDataDesc($pdo);
$nama = "firstname";
$alamat = "addres";
$uang = "balance";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge-2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- untuk bagian challenge -->
	<div class="challenge">
		<h1>Challenge #2</h1>
		<p>Buatlah SQL untuk menampilkan nama dan balance dari Customer yang memiliki tabungan yang besarnya antara 1000000 hingga 2000000! Urutkan tampilan data berdasarkan nama secara descending!
		</p>
	</div>

	<!-- untuk bagian alfabet -->
	<div class="alfabet">
		<?php 
			$alfabets = range("A", "Z");
			$jumlah_alfa = 1;
		?>
		<table>
			<tr>
			<?php foreach ($alfabets as $alfabet) :?>
				<td><?="{$jumlah_alfa}. {$alfabet}" ?></td>
				<?php if ($jumlah_alfa % 10 == 0): ?>
					</tr><tr>
				<?php endif ?>
				<?php $jumlah_alfa +=1 ?>
			<?php endforeach?>
			</tr>
		</table>
	</div>

	<!-- bagian container -->
	<div class="container">
		<table>
			<tr>
				<!-- <th>NO</th> -->
				<th>NAMA</th>
				<!-- <th>ALAMAT</th> -->
				<th>BALANCE</th>
			</tr>
			<?php $count = 1 ?>
			<?php foreach ($customers as $key) :?>
			<tr>
				<!-- <td> -->
				<!-- </td> -->
				<td>
					<?=  $key[$nama] ?>
				</td>
				<!-- <td> -->
				<!-- </td> -->
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