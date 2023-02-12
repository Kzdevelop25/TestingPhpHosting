<?php
require_once "./model/anime.php";

$id = $_GET['id'];

if (hapus($id) > 0){
    echo "<script> alert('Berhasil')
    window.location.href = 'input.php'</script>";
}else{
    echo "<script> window.location.href = 'input.php'</script>";
}
