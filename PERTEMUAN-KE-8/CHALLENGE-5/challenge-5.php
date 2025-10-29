<?php  
require_once "config.php";
$customers = getHarryPotter($pdo);
$seriesid = "SERIESID";
$booktitle = "BOOKTITLE";
$yearpublished = "YEARPUBLISHED";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challenge-5</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- untuk bagian challenge -->
	<div class="challenge">
		<h1>Challenge #5</h1>
		<p>Buatlah SQL untuk menampilkan judul buku yang termasuk dalam series “Harry Potter”!
		</p>
	</div>

	<div class="container">
		<table>
			<tr>
				<th>NO</th>
				<th>SERIES ID</th>
				<th>BOOK TITLE</th>
				<th>YEAR PUBLISHED</th>
			</tr>
			<?php $count = 1 ?>
			<?php foreach ($customers as $key) :?>
			<tr>
				<td>
					<?= $count ?>
				</td>
				<td>
					<?=  $key[$seriesid] ?>
				</td>
				<td>
					<?=  $key[$booktitle] ?>
				</td>
				<td>
					<?=  $key[$yearpublished] ?>
				</td>
			</tr>
			<?php $count += 1 ?>
			<?php endforeach ?>
			</tr>
		</table>
	</div>
</body>
</html>