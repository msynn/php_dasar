<?php 

// Array
// Variabel yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at","Sabtu"];
$campuran = [1,10, "anggur", false];


// Menampilkan Array
// vardump(variabel);
// print_r(variabel);

var_dump($hari);

echo "<br>";

print_r($campuran);

echo "<br>";

// Menampilkan 1 elemen pada array
echo $hari[0];

// Menambahkan elemen pada array
$hari[] = "Minggu";

echo "<br>";

var_dump($hari);

echo "<br>";

$angka = [1,2,3];
$angka[] = 4;

var_dump($angka);

?>