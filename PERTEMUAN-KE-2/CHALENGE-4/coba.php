<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>End</title>
	<style>
		.color {
			background-color: yellow;
		}

		.biru {
			background-color: lightblue;
		}
		.red {
			background-color: red;
		}
		.brown {
			background-color: brown;
		}
	</style>
</head>
<body>
	<!-- table di luar loop untuk memastikan bahwa tabelnya itu membungkus semuanya -->
	<table border="1" cellpadding="10" cellspacing="0">
		<!-- membuat baris dari angka 0 - 12 -->
		<?php for($baris = 0; $baris <= 12; $baris++) :?>
			<tr>
		<!-- membuat kolom dari angka 0 - 12 -->
				<?php for($kolom = 0; $kolom <= 12; $kolom++) :?>
					<?php if ($baris === 0 && $kolom === 0) :?>
						<td></td>
					<?php elseif ($baris === 0) :?>
						<td class="color"><?= $kolom  ?></td>
					<?php elseif ($kolom === 0) :?>
						<td class="color"><?= $baris  ?></td>
					<?php else :?>
						<?php if(($baris * $kolom % 2 == 0)) :?>
							<td class="biru"> <?= $baris * $kolom ?> </td>
						<?php else :?>
							<td class="red"> <?= $baris * $kolom ?> </td>
						<?php endif ?>
					<?php endif ?>
				<?php endfor ?>
			</tr>
		<?php endfor ?>
	</table>
	
</body>
</html>