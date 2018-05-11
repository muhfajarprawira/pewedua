<!DOCTYPE>
<html>
<head>
	<title>Pemrosessan Form</title>
</head>
<body>
<?php 
$kabupaten [
		        ["id"=>1,
		         "nama_kab"=>"Pontianak"
		        ],
		       
		       ["id"=>2,
		       	"nama_kab"=>"Mempawah" 
		       ],
		  
		  	 ["id"=>3,
		   	  "nama_kab"=>"Sintang"
		   	]
		];
	 ?>
	
	<h2>Form Regristrasi</h2>
	
	<tr>
	<table>
	<form method="POST" action="proses.php">
		<td>Username</td>
		<td>:</td>
	<td><input type="text" name="name">
	</tr>
	
	
	<tr>
		<td>Password</td>
		<td>:</td>
	<td><input type="password" name="password">
	</tr>
	
	
	<tr>
		<td>Nama</td>
		<td>:</td>
	<td><input type="text" name="nama">
	</tr>
	
	<tr>
		<td>No.Hp</td>
		<td>:</td>
	<td><input type="text" name="no_hp">
	</tr>

	<tr>
		<td>Alamat</td>
		<td>:</td>
	<td><textarea name="alamat" rows="5" cols="30"></textarea>
	</tr>
<tr>
		<td>Kabupaten</td>
		<td>:</td>
	<td>
	<select name="kabupaten">
<?php foreach ($kabupaten as $kab): ?>

							<option value="<?php $kab['id'] ?>"><?php echo $kab['nama_kab'] ?></option>

						<?php endforeach; ?>
	</option>
	</select>
</td>
	</tr>

<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
	<td>
	<input type="radio" name="jenkla" value="4">Pria<br>
	<input type="radio" name="jenkla" value="5">Wanita<br>
	</tr>

	<tr>
		<td>Prodi Pilihan</td>
		<td>:</td>
	<td>
	<input type="checkbox" name="prodi" value="7">Sistem Informasi<br>
	<input type="checkbox" name="prodi" value="8">Sistem Komputer<br>
	<input type="checkbox" name="prodi" value="9">Informatika<br>
	</tr>

<td>
	<input type="submit" name="submit" value="simpan">
</td>

				</form>
			</table>	
		</body>
</html>