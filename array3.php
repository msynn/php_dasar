<?php 
$mahasiswa = [
	["Fyan Ramadhan", "D0221090", "Teknik Informatika", "fyanramadhan1@gmail.com"],
	["Andreana Wirawan", "D0222460", "Teknik Informatika", "andreanaw32@gmail.com"],
	["Hendra Usman", "D0222403", "Teknik Informatika", "hendrausmn76@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fyan Ramadhan</title>
</head>
<body>

<h1>Data Diri</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
	<li><?php echo $mhs[0]; ?></li>
	<li><?php echo $mhs[1]; ?></li>
	<li><?php echo $mhs[2]; ?></li>
	<li><?php echo $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>