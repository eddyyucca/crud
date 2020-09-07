<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<table border="1">
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

			</tr>
		<?php } ?>
	</table>
</body>
<script type="text/javascript">
window.print();
</script>
</html>
