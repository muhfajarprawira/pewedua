<h1>Isi Kategori</h1>


<table class="table table-bordered">
	
	<tr>
		<td>
			No	
		</td>
		
		<td>
			Nama Kategori
		</td>
<?php foreach ($isi_kategori as $ik): ?>
	</tr>

	<td><?= $ik['id_kategori']?></td>
	<td><?= $ik['nama_kategori']?></td>

<?php endforeach; ?>

</table>
	
