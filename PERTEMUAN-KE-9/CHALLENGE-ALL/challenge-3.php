<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form tambah data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h5>SILAHKAN ANDA MENAMBAHKAN DATA DIBAWAH SINI</h5>
	<fieldset>
		<legend>Customer Data</legend>
		<form action="functions.php" method="GET">
			<table>
				<!-- untuk nama -->
				<tr>
					<td>
						<label for="firstname">Firstname</label>
					</td>
					<td>
						<input type="text" name="firstname" id="firstname" autocomplete="off">
					</td>
				</tr>

				<!-- untuk alamat -->
				<tr>
					<td>	
						<label for="address">Address</label>
					</td>
					<td>
						<input type="text" name="address" id="address" autocomplete="off">
					</td>
				</tr>

				<!-- untuk buttton -->
				<tr>
					<td>
						<button type="submit" name="add_data">Add data</button>
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