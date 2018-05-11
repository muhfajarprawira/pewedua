<!DOCTYPE>
<html>
<head>
	<title>Pemrosessan Form</title>
</head>
<body>
	
	<h2> Selamat Anda Terdaftar </h2>
	<h3> Dengan Identitas </h3>
	<tr>
	<table>
	<form method="POST" action="proses.php">
			
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<?= $_POST ['nama'] ?>
		</td>
	</tr>
	
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>
			<?= $_POST ['name'] ?>
		</td>
	</tr>
	
	<tr>
		<td>No.Hp</td>
		<td>:</td>
		<td>
			<?= $_POST ['no_hp'] ?>
		</td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<?= $_POST ['alamat'] ?>
		</td>
	</tr>
</form>
</table>	
</body>
</html>