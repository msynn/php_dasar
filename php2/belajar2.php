<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>belajar 2</title>
</head>
<body>

<table border="1" cellpadding="10" cellpadding="0">
 <?php 
 	for ($i = 1; $i <= 5; $i++) { 
 		echo "<tr>";
 		for( $j = 1; $j <= 5; $j++ ) {
 			echo "<td>$i,$j</td>";
 		}
 		echo "<tr>";
 	}
  ?>
</table>

</body>
</html>