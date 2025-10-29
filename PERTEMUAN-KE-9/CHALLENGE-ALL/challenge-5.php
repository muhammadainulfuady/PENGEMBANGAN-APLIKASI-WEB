<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form hapus data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h5>SILAHKAN ANDA MENGHAPUS DATA DIBAWAH SINI</h5>
	<fieldset>
		<legend>Customer Data</legend>
		<form action="functions.php" method="GET">
			<table>	
				<tr>
					<td>
						<label for="customerID">Masukkan ID</label>
					</td>
					<td>
						<input type="text" name="customerID" id="customerID" autocomplete="off">
					</td>
				</tr>

				<!-- untuk buttton -->
				<tr>
					<td>
						<button type="submit" name="hapus_data">Hapus data</button>
					</td>
					<td>
						<button type="reset" name="reset">Reset</button>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>