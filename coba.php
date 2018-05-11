<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<?php 
		$kabupaten = [
			[
				"id" => 1,
				"nama_kab" => "Pontianak"
			],
			[
				"id" => 2,
				"nama_kab" => "Mempawah"
			],
			[
				"id" => 3,
				"nama_kab" => "Sintang"
			]
		];
	?>
	<h1>Registrasi</h1>
	<form method="POST" action="proses.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td>:</td>
				<td><input type="number" name="no_hp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" placeholder="Masukan alamat anda..."></textarea></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td>:</td>
				<td>
					<select name="kabupaten">
						<?php foreach ($kabupaten as $kab): ?>

							<option value="<?php $kab['id'] ?>"><?php echo $kab['nama_kab'] ?></option>

						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="pria">Pria
					<input type="radio" name="jenis_kelamin" value="wanita">Wanita
				</td>
			</tr>
			<tr>
				<td>Prodi Pilihan</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="prodi" value="prodi_si">Sistem Informasi<br>
					<input type="checkbox" name="prodi" value="prodi_sk">Sistem Komputer<br>
					<input type="checkbox" name="prodi" value="prodi_i">Informatika
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>