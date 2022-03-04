<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat kalkulator</title>
</head>
<body>

<h1>Kalkulator</h1>

<form action="" method="post">
    <input type="text" name="angka1" placeholder="Masukkan angka ">
    <input type="text" name="angka2" placeholder="Masukkan angka ">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="submit" name="submit" value="Hitung">
</form>
<?php
    if (isset($_POST['submit'])){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                echo $angka1 + $angka2;
                break;
            case '-':
                echo $angka1 - $angka2;
                break;
            case '*':
                echo $angka1 * $angka2;
                break;
            case '/':
                echo $angka1 / $angka2;
                break;
        } 
    }
?>

</body>
</html>