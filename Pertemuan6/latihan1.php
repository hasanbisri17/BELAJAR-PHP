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
    <title>Latihan Multi Array</title>
</head>
<body>

    <h1>Semalat Datang di toko Mbk Ning</h1>

    <h3>List barang : </h3>
        <?php foreach($toko as $store) : ?>
            <ul>
                <li>
                    <img src="img/<?= $store["gambar"]; ?>" alt="">
                </li>
                <li>Nama Barang : <?= $store["nama_barang"]; ?></li>
                <li>Stok Barang : <?= $store["stok"]; ?></li>
                <li>Harga Satuan : <?= $store["harga_satuan"]; ?></li>
                <li>Harga Grosir : <?= $store["harga_grosir"]; ?></li>
                <li>Nama Suplayer : <?= $store["suplayer"]; ?></li>
            </ul>
        <?php endforeach; ?>
</body>
</html>