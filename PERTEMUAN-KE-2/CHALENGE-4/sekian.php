<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.warna {
			background-color: lightblue;
		}
	</style>
</head>
<body>
	<!-- membuat table pembungkus di awal -->
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for($baris = 0; $baris <= 12; $baris++) :?>
			<tr>
				<?php for ($kolom = 0; $kolom <= 12; $kolom++) :?>
					<td> 
						<?= $baris * $kolom ?> 
					</td>
				<?php endfor ?>
			</tr>
		<?php endfor ?>
	</table>
</body>
</html>