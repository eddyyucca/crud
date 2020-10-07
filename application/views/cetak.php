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
            <th>KODE</th>
            <th>JUDUL BUKU</th>
            <th>PENERBIT</th>
            <th>PENGARANG</th>

        </tr>
        <?php foreach ($data as $x) { ?>
            <tr>
                <td><?= $x->kode ?></td>
                <td><?= $x->judul ?></td>
                <td><?= $x->penerbit ?></td>
                <td><?= $x->pengarang ?></td>

            </tr>
        <?php } ?>
    </table>
</body>
<script>
    window.print();
</script>

</html>