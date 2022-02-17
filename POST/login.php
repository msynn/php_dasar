<?php 
//  cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"])) {
	// cek username & password 
	if ($_POST["username"] == "pian" && $_POST["password"] == "myhvtwq49m") {
	// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
	// jika salah, tampilkan pesan kesalahan}
		$eror = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
<?php if ( isset($eror) ) : ?>
<p style="color: red; font-style: italic;">username / password salah !</p>
<?php endif; ?>

<h1>Login Admin</h1>

<ul>
<form action="" method="post">
	<li>
		<label for="username">Username :</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>

</body>
</html>