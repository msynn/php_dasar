<?php 
$email = "fyanramadhan1@gmail.com";
$password = "pratama5";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="CSS/css.html">
</head>
<body>
<table border="1" cellspacing="0" cellpadding="5">
	<form action="post2.php" method="post">
<!-- user,password -->
		 <tr>
			<td><label for="email">email : </label></td>
			<td><input type="text" id="email"></td>
		</tr>
		 	<br>
		<tr>
			<td><label for="password">password : </label></td>
			<td><input type="password" id="password"></td>
		</tr>
			<br>
		<tr>
			<td><label for="nama">nama lengkap : </label></td>
			<td><input type="nama" id="nama" name="nama"></td>
		</tr>
			<br>
<!-- RADIO BUTTON -->
		<tr>
			<td colspan="2"><input type="radio" id="pira" name="jeniskelamin"><label for="pria">pria</label><input type="radio" id="wanita" name="jeniskelamin"><label for="wanita">wanita</label></td>

		</tr>
			<br>
<!-- Combo box -->
		<tr>
		<td>Alamat : </td>
		<td><select>
			<option>Mamuju</option>
			<option>Mamuju tengah</option>
			<option>Majene</option>
			<option>Pasangkayu</option>
		</select></td>
		</tr>
			<br>
<!-- Button -->
		<tr>
			<td colspan="2"><button type="submit">Daftar!</button></td>
		</tr>

	</form>
</table>
</body>
</html>