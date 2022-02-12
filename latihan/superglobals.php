<?php 

$mahasiswa = [
	[
	"nama" => "Fyan Ramadhan",
	"nim" => "D0221090",
	"jurusan" => "Teknik Informatika",
	"email" => "fyanramadhan1@gmail.com",
	"gambar" => "pian.jpg"
],
	[
	"nama" => "Andre Wirawan",
	"nim" => "D0221240",
	"jurusan" => "Teknik Informatika",
	"email" => "andre@gmail.com", 
	"gambar" => "andre1.jpg"
],
	[
	"nama" => "Hendra Usman",
	"nim" => "D0221512",
	"jurusan" => "Teknik Informatika",
	"email" => "hendra2@gmail.com",
	"gambar" => "hendra.jpg"
]
];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		img {
			width: 100px;
			height: 100px;
		}
	</style>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
	<ul>
		<li id="img"><img src="img/<?= $mhs["gambar"] ?>"></li>
		<li><?= $mhs["nama"]; ?></li>
		<li><?= $mhs["nim"]; ?></li>
		<li><?= $mhs["jurusan"]; ?></li>
		<li><?= $mhs["email"] ?></li>
	</ul>
<?php endforeach; ?>


</body>
</html>