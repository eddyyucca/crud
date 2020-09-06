<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<form action="<?= base_url('home/input') ?>" method="POST">
		<input type="text" name="nama_mahasiswa">
		<input type="text" name="npm">
		<button>Simpan</button>
	</form>

	<table>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>AKSI</th>
		</tr>
		<?php
		$no = 1;
		foreach ($mhs as $row) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row->nama_mhs ?></td>
				<td><?= $row->npm ?></td>
				<td>
					<a href="<?= base_url('home/hapus/' . $row->id) ?>">HAPUS</a>
					<a href="<?= base_url('home/edit/' . $row->id) ?>">EDIT</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>