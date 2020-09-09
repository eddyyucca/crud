<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?= base_url('buku/input') ?>">INPUT BUKU</a>
    <table border="1">
        <tr>
            <th>KODE</th>
            <th>JUDUL BUKU</th>
            <th>PENERBIT</th>
            <th>PENGARANG</th>
            <th>AKSI</th>
        </tr>
        <?php foreach ($data as $x) { ?>
            <tr>
                <td><?= $x->kode ?></td>
                <td><?= $x->judul ?></td>
                <td><?= $x->penerbit ?></td>
                <td><?= $x->pengarang ?></td>
                <td>
                    <a href="<?= base_url('buku/edit/' . $x->id) ?>">EDIT</a>
                    <a href="<?= base_url('buku/hapus/' . $x->id) ?>">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>