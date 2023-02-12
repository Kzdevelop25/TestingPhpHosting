<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "urf8r7w2_db_anime";

$conn = mysqli_connect($localhost, $username, $password, $database);


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $anime = [];
    while ($anime = mysqli_fetch_assoc($result)) {
        $animes[] = $anime;
    }

    return $animes;
}

$animes = query("SELECT * FROM anime");


function tambah($data)
{
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $kategori = htmlspecialchars($data['kategori']);
    $kreator = htmlspecialchars($data['kreator']);
    $tanggal =htmlspecialchars( $data['tanggal']);
    $tipe = htmlspecialchars($data['tipe']);
    $durasi =htmlspecialchars($data['durasi']);
    $studio = htmlspecialchars($data['studio']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO anime VALUES ('','$judul','$kategori','$kreator','$tanggal','$tipe','$durasi','$studio','$sinopsis','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;

    mysqli_query($conn,"DELETE FROM anime WHERE id = $id ");

    return mysqli_affected_rows($conn);
}
