<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengitungan Win Rate</title>
</head>
<body>
    
<h1>Perhitungan WinRate</h1>
<form action="" method="post">
    Total match Anda <br><input type="text" name="totalMatch" placeholder="Cth: 259">
    <br><br>
    total WR Anda <br><input type="text" name="totalWR" placeholder="Cth: 72.4">
    <br><br>
    Berapa WR yang anda inginkan? <br><input type="text" name="upWR" placeholder="Cth: 80">
    <br><br>
    <input type="submit" name="submit" value="Hasil">
</form>

<?php
    if (isset($_POST['submit'])){
        $totalMatch = $_POST['totalMatch'];
        $totalWR = $_POST['totalWR'];
        $upWR = $_POST['upWR'];
        // MAAF MASIH BINGUNG CARA NGITUNGNYA HEHE

    }
?>

</body>
</html>