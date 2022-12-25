<?php
    //Pertemuan 2 => SIntaks PHP

    //Standar Output
    // echo, print
    //print_r
    //var_dump
    echo "Mohamad Hasan Bisri <br>";

    //penulisan sintaks PHP 
    // Variable dan Type Data
    // Aturan pembuatan variable tidak boleh di awali dengan angka tapi boleh mengandung angka
    $nama = "Hasan Bisri";

    echo "Hallo nama saya adalah $nama <br>";

    //Operator
    //Operator Aritmatika
    // ada beberapa macam oprator seperti ( + - * / % )
    // $x = 20;
    // $y = 30;
    // echo $x * $y;

    //Penggabung string / concatetanion / concat
    // penghubungnya adalah tanda titik (.)
    // $nama_depan = "Mohamad";
    // $nama_tenggah = "Hasan";
    // $nama_akhir = "Bisri";

    // echo $nama_depan . " " . $nama_tenggah . " " . $nama_akhir;

    // Assigment
    //ada beberapa macam oprator Assigment seperti ( =, +=, -=, *=, /=, %= )
    // $nama = "Mohamad";
    // $nama .= " ";
    // $nama .= "Hasan";
    // $nama .= " ";
    // $nama .= "Bisri";
    // echo $nama;



    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hallo, nama saya <?php echo $nama; ?></h1>
    <?php 
        echo "h1>Hallo, nama saya Mohamad Hasan Bisri</h1>";
    ?>
</body>
</html>