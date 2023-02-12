<?php
require_once "./model/anime.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<style>
    .container {
        width: 80%;
        margin: auto;
        overflow: auto;
    }

    img {
        display: block;
        width: 400px;
    }

    table {
        display: table;
    }

    tr {
        display: table-row-group;
    }

    td {
        display: table-cell;
    }

    .i {
        width: 600px;
        display: block;
    }

    .g {
        padding: 0;
    }

    .btn {
        background: #236bce;
        padding: 12px 24px;
        position: fixed;
        top: 10%;
        right: 20%;
        text-decoration: none;
        color: white;
    }

    .btn:first-of-type{
        right: 5%;
    }
</style>

<body>
    <a href="tambah.php" class="btn">Tambah</a>


    <a href="index.php" class="btn">index</a>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;">
            <tr>
                <td>No</td>
                <td>Aksi</td>
                <td>Judul</td>
                <td>Kategori</td>
                <td>Kreator</td>
                <td>Tanggal</td>
                <td>Tipe</td>
                <td>Durasi</td>
                <td>Studio</td>
                <td class="i">Sinopsis</td>
                <td>Gambar</td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($animes as $anime) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><a href="hapus.php?id=  <?= $anime['id'] ?>">hapus</a> | <a href="">Ubah</a></td>
                    <td><?= $anime["judul"] ?></td>
                    <td><?= $anime['kategori'] ?></td>
                    <td><?= $anime["kreator"] ?></td>
                    <td><?= $anime["tanggal"] ?></td>
                    <td><?= $anime["tipe"] ?></td>
                    <td><?= $anime["durasi"] ?></td>
                    <td><?= $anime["studio"] ?></td>
                    <td class="io"><?= $anime["sinopsis"] ?></td>
                    <td class="g"><img src="<?= $anime["gambar"] ?>" alt="<?= $anime["judul"] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>


</body>

</html>