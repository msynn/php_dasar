<?php 
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) ||
	 !isset($_GET["nim"]) ||
	 !isset($_GET["email"]) ||
	 !isset($_GET["jurusan"]) ||
	 !isset($_GET["gambar"]) ) {
	// redirect
	header("Location: belajar.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Mahasiswa</title>
	<style type="text/css">
		img {
			width: 60px;
			height: 60px;
			
		}
	</style>
</head>
<body>

<ul>
	<li><img src="../latihan/img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["nim"];  ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="belajar.php">Kembali ke halaman pertama!</a>

</body>
</html>