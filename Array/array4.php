<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menampilkan element</title>
	<style type="text/css">
		.kotak {
			width: 50px;
			height: 50px;
			background-color: darkred;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {clear: both;}
	</style>
</head>
<body>
<h1> Menampilkan elemen pada array </h1>

<?php
$angka = [[1,2,3],
		[4,5,6],
		[7,8,9]
	];
?>

<?php foreach ( $angka as $key1 ) : ?>
	<?php foreach ( $key1 as $key2 ) : ?>		
		<div class="kotak"><?php echo $key2; ?></div>
	<?php endforeach; ?>
	<div class="clear"></div>
<?php endforeach; ?>

</body>
</html>