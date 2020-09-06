<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<form action="<?= base_url('home/update/' . $mhs->id) ?>" method="POST">
		<input type="text" name="nama_mahasiswa" value="<?= $mhs->nama_mhs ?>">
		<input type="text" name="npm" value="<?= $mhs->npm ?>">
		<button>Simpan</button>
	</form>


</body>

</html>