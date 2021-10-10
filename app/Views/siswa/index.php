<h1><?php echo $title ?></h1>
<a href="/tambahSiswa">Tambah Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Siswa</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>
	<?php $a=0; foreach($siswa as $s): $a++; ?>
	<tr>
		<td><?php echo $a; ?></td>
		<td><?php echo $s['nama_siswa'] ?></td>
		<td><?php echo $s['nama_jurusan']; ?></td>
		<td><a href="/editSiswa/<?php echo $s['id_siswa'] ?>" class="btn btn_success">Edit</a>
			<a href="/deleteSiswa/<?php echo $s['id_siswa'] ?>" class="btn btn_success">Hapus</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>