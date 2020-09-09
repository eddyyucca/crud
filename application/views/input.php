<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?= base_url('buku/simpan') ?>" method="post">
        <p>Kode</p>
        <p><input type="text" name="kode"></p>
        <p>judul</p>
        <p><input type="text" name="judul"></p>
        <p>penerbit</p>
        <p><input type="text" name="penerbit"></p>
        <p>pengarang</p>
        <p><input type="text" name="pengarang"></p>
        <p><button>SIMPAN</button></p>
    </form>
</body>

</html>