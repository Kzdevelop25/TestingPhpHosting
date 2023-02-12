<?php

require "./model/anime.php";

// cek apakah tombol sudah ditekan atau belum
if (isset($_POST['submit'])) {


    if (tambah($_POST) > 0){
        echo "<script> alert('Berhasil');
                document.location.href = 'input.php';
                </script>";
    }else {
        echo "<script> alert('Gagal')
        document.location.href = 'input.php';
         </script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
</head>
<style>
    form {
        width: 300px;
        /* background-color: #236bce; */
        padding: 1rem;
        display: flex;
        flex-direction: column;
    }
    .input {
        margin-bottom: 1rem;
        justify-content: space-between;
        display: flex;
        align-items: center;
    }

    label {
        font-size: 1.125rem;
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-transform: capitalize;
    }

    input {
        padding: 16px;
    }

    input:focus {
        outline: none;
        box-shadow: none;
    }

    .btn,.cls {
        background: #236bce;
        padding: 12px 24px;
        position: fixed;
        top: 10%;
        right: 20%;
        text-decoration: none;
        color: white;
    }

    .cls {
        top: 0;
    }

</style>

<body>

    <h1>Tambah Anime</h1>

    <form action="" method="POST">
        <div class="input">
            <label for="judul">Judul :</label>
            <input type="text" id="judul" required name="judul">
        </div>
        <div class="input">
            <label for="kategori">kategori :</label>
            <input type="text" id="kategori" required name="kategori">
        </div>
        <div class="input">
            <label for="kreator">kreator :</label>
            <input type="text" id="kreator" required name="kreator">
        </div>
        <div class="input">
            <label for="tanggal">tanggal :</label>
            <input type="date" id="tanggal" required name="tanggal">
        </div>
        <div class="input">
            <label for="tipe">tipe :</label>
            <input type="text" id="tipe" required name="tipe">
        </div>
        <div class="input">
            <label for="durasi">durasi :</label>
            <input type="text" id="durasi" required name="durasi">
        </div>
        <div class="input">
            <label for="studio">studio :</label>
            <input type="text" id="studio" required name="studio">
        </div>
        <div class="input">
            <label for="sinopsis">sinopsis :</label>
            <input type="text" id="sinopsis" required name="sinopsis">
        </div>
        <div class="input">
            <label for="gambar">gambar :</label>
            <input type="text" id="gambar" required name="gambar">
        </div>

        <button type="submit" class="btn" required name="submit">Tambah</button>
    </form>
    <a href="index.php" class="cls">index</a>

</body>

</html>