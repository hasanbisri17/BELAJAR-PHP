<?php

if(!isset($_POST["nama"])){
    header("Location: latihan3.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menangkap POST</title>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
    <br>
    <span><a href="latihan3.php">Kembali Isikan Nama Kamu</a></span>
</body>
</html>