<?php 

    $toko = [
        [
        "nama_barang" => "Biskuat",
        "stok" => "50",
        "harga_satuan" => "1000",
        "harga_grosir" => "500",
        "gambar" => "biskuat.jpg",
        "suplayer" => "BI Store"
        ],
        [
        "nama_barang" => "Gery Coklat",
        "stok" => "100",
        "harga_satuan" => "2000",
        "harga_grosir" => "1800",
        "gambar" => "gery-coklat.jpg",
        "suplayer" => "Ardi Jaya"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihat 1 GET </title>
</head>
<body>
    <h1>List Data Barang</h1>
    <br/>
    <?php foreach( $toko as $store ) : ?>
    <ul>
        <li>
            <a href="latihan2.php?nama_barang=<?=$store["nama_barang"];?>&&stok=<?=$store["stok"];?>&&harga_satuan=<?=$store["harga_satuan"];?>&&harga_grosir=<?=$store["harga_grosir"];?>&&suplayer=<?=$store["suplayer"];?>&&gambar=<?=$store["gambar"];?>"><?= $store["nama_barang"]; ?></a>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>