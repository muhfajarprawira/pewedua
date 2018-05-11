<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$prodi	= [
			["id"=>0,
			 "nama"=>"kimia",
			 "kuota"=>12,
			 "kaprodi"=>"Andi"
			],

			["id"=>1,
			 "nama"=>"fisika",
			 "kuota"=>14,
			 "kaprodi"=>"nur hasanah"
			],

			["id"=>2,
			 "nama"=>"biologi",
			 "kuota"=>12,
			 "kaprodi"=>"rizalinda"
			],

			["id"=>3,
			 "nama"=>"sisfo",
			 "kuota"=>32,
			 "kaprodi"=>"Ilham"
			],

			["id"=>4,
			 "nama"=>"kelautan",
			 "kuota"=>11,
			 "kaprodi"=>"nora"
			],

			["id"=>5,
			 "nama"=>"statistika",
			 "kuota"=>15,
			 "kaprodi"=>"naomi"
			],

			["id"=>6,
			 "nama"=>"matematika",
			 "kuota"=>12,
			 "kaprodi"=>"mariatul"
			]
		];
		echo $prodi[0]['nama'];
		echo "<br>";
		echo $prodi[2] ['kaprodi'];

		$nama = true;
		echo "<pre>";
		echo "<br>";
		var_dump($prodi);
		echo "</pre>";

 ?>
<h1>ini latihan table</h1>

<table border="1" cellspacing="0">

	<tr>
		<td>id</td>
		<td>nama prodi</td>
		<td>kuota</td>
		<td>kaprodi</td>
	</tr>

<?php 
for ($i=1; $i <= 100; $i++) :
?>

<tr>
		<td><?php echo $i ?></td>
		<td>Sisfo</td>
		<td><?php echo $i*3 ?></td>
		<?php if ($i%2): ?>
			<td>ILhamsyah</td>
			<?php else : ?>
				<td>Renny</td>
				<?php endif ; ?>
<?php endfor;

?>
</tr>
</table>	
</body>
</html>


