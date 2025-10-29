<?php  
require_once "function.php";
$customers = getDataAddres($pdo);
$nama = "firstname";
$alamat = "addres";
$uang = "balance";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge-3</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- untuk bagian challenge -->
	<div class="challenge">
		<h1>Challenge #3</h1>
		<p>Buatlah SQL untuk menampilkan nama dan balance dari Customer yang tinggal di “Surabaya”!
		</p>
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