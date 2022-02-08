<?php 
// Pengulangan pada array
// for / foreach
$angka = [1,2,3,4,5,6,7,8,9,10,11,12]

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar array</title>
	<style type="text/css">
		.kotak1 {
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

<?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
	<div class="kotak1"><?php echo $angka[$i] ; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $a ) { ?>

	<div class="kotak1"><?php echo $a ?></div>

<?php } ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
	<div class="kotak1"><?php echo $a ?></div>
<?php endforeach; ?>
</body>
</html>