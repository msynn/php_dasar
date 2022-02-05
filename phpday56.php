<?php 

$nilai = 80;

if ($nilai >= 90 and $nilai <= 100) {
	$grade = "A"
}
elseif ($nilai >= 80) {
	$grade = "A-";
	$status = "Lulus";
}
elseif ($nilai >= 75) {
	$grade = "B";
	$status = "Lulus";
}
elseif ($nilai >= 70) {
	$grade = "B-";
	$status = "Lulus";
}
elseif ($nilai >= 60) {
	$grade = "C";
	$status = "Mengulang";
}
else {
	$grade = "E";
	$status = "Tidak Lulus";
}
// Output

echo "Nilai anda =", $nilai;
echo "Grade anda =", $grade;
echo "Keterangan =", $status;
 ?>