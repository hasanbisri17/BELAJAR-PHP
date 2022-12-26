<?php 

//array
//variable yang bisa menampung banyak nilai
//terdapat 2 cara dalam penulisan array ada cara lama dan cara baru
//ellement pada array bleh memiliki type data yang berbeda
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0

//cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");

//cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

//berbagai macam type data
$arr = [1234, "bisri", true];


//Menampilkan Array
// untuk menampilkan array tidak bisa hanya menggunakn echo
//terdapat 2 cara untuk menampilkan array
//menngunakan var_dump() / print_r()
var_dump($hari);
echo "<br>";
echo "<br>";
print_r($bulan);
echo "<br>";
echo "<br>";
//menampilkan 1 ellement pada array
echo $arr[0];
echo "<br>";
echo "<br>";
echo $bulan[2];
echo "<br>";
echo "<br>";


//menambahkan ellement baru pada array yang sudah di buat
var_dump($arr);
$arr [] = "mata";
$arr [] = 5678;
echo "<br>";
var_dump($arr);


?>