<?php 

//untuk mengecek apakah variabel sudah di buat atau belum
// Jika belum ada maka akan di kembalikan ke latilan1.php
if( !isset( $_GET["nama_barang"] ) ||
    !isset( $_GET["stok"] ) ||
    !isset( $_GET["harga_satuan"] ) ||
    !isset( $_GET["harga_grosir"] ) ||
    !isset( $_GET["suplayer"] ) ||
    !isset( $_GET["gambar"] ) 
    ) 
    {

        header("Location: latihan1.php");
        exit;
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menangkap GET latihan 1</title>
</head>
<body>
    <h1>Detail Data Barang</h1>
    <br />
    <ul>
        <li>
            <img src="img/<?= $_GET["gambar"]; ?>" alt="">
        </li>
        <li><?= $_GET["nama_barang"]; ?></li>
        <li><?= $_GET["stok"]; ?></li>
        <li><?= $_GET["harga_satuan"]; ?></li>
        <li><?= $_GET["harga_grosir"]; ?></li>
        <li><?= $_GET["suplayer"]; ?></li>
    </ul>
    <br />
    <ul>
        <li><a href="latihan1.php">Kembali ke daftar Barang</a></li>
    </ul>
</body>
</html>