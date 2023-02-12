<?php

require_once "./model/anime.php";

$judul = $_GET["title"];

if( !isset($judul)){

    //redirect
     header("Location:index.php");
    exit;
};


function details($query){
    global $conn, $judul;

    $results = mysqli_query($conn,$query);
    $order = [];
    while ( $order = mysqli_fetch_assoc($results)){
        $orders[] = $order;
    }

    return $orders;
}

$ordered = details("SELECT * FROM anime WHERE judul = '$judul'");








?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>

    <style>
    ul li {
        line-height: 1.5;
    }

    * {
        margin: 0;
        padding: 0;
    }

    img {
        display: block;
        width: 100%;
        height: 400px;
        object-fit: cover;
        object-position: top;
    }

    .back {
        background-color: #236bce;
        padding: 12px 16px;
        border-radius: .5em;
        position: fixed;
        top: 10%;
        right: 10%;
        font-size: 16px;
        color: white;
        text-decoration: none;
    }

    ul {
        padding: 1rem;
    }
    </style>

</head>

<body>

    <a href="./index.php" class="back">back</a>

    <?php foreach ( $ordered as $order) :?>
    <div class="container">
        <img src="<?= $order['gambar']?>" alt="">
    </div>


    <ul>
        <li>Judul : <?= $order["judul"] ?></li>
        <li>Kategori : <?= $order["kategori"] ?></li>
        <li>Kreator : <?= $order["kreator"] ?></li>
        <li>Studio : <?= $order["studio"] ?></li>
        <li>Tahun Liris : <?= $order["tanggal"] ?></li>
        <li>Tipe : <?= $order["tipe"] ?></li>
        <li>Sinopsis : <?= $order["sinopsis"] ?></li>
    </ul>
        <?php endforeach; ?>
</body>

</html>