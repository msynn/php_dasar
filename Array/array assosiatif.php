<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array assosiatif</title>
</head>
<body>
<?php 

$mahasiswa = [
	[
	"nama" => "Fyan Ramadhan",
	"Nim" => "D0221090",
	"Jurusan" => "Teknik Informatika",
	"Email" => "fyanramadhan1@gmail.com",
	"Nilai" => [90,85,98,78]
],
	[
	"nama" => "Andre Wirawan",
	"Nim" => "D0221240",
	"Jurusan" => "Teknik Informatika",
	"Email" => "andre@gmail.com", 
	"Nilai" => [80,83,87,90]
],
	[
	"nama" => "Hendra Usman",
	"Nim" => "D0221512",
	"Jurusan" => "Teknik Informatika",
	"Email" => "hendra2@gmail.com",
	"Nilai" => [95,87,80,89]
]
];
echo "Menampilkan nama pada indeks 2";
echo "<br>";
echo " = ",$mahasiswa[2]["nama"];

echo "<br>";

echo "Menampilkan Nilai ke 2 fyan ";
echo "<br>";
echo " = ",$mahasiswa[0]["Nilai"][1];

?>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama 	:<?php echo $mhs["nama"]; ?></li>
	<li>Nim		:<?php echo $mhs["Nim"]; ?></li>
	<li>Jurusan	:<?php echo $mhs["Jurusan"]; ?></li>
	<li>Email	:<?php echo $mhs["Email"]; ?></li>
</ul>
<?php endforeach; ?>



</body>
</html>