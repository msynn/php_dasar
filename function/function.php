<?php  
// function

function salam($nama) {
	return "Selamat datang, $nama";
}

echo salam("Pian");

echo "<br>";

function luas_persegi($sisi) {
	$hasil = $sisi*$sisi;
	return $hasil;
}

echo "Luas Persegi : ",luas_persegi(5);

echo "<br>";

function luas_segitiga($alas,$tinggi) {
	$hasil = ($alas * $tinggi)/2;
	return $hasil; 

}
echo "Luas Segitiga : ",luas_segitiga(10,10);

?>