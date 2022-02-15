<?php 
// Variabel Scope / lingkup variabel
$x = 10;

// function tampilx() {
// 	echo $x;
// }

// Agar fuction bisa membaca variabel diluar function memakai Global $variabel;
function tampilx() {
	global $x;
	echo $x;
}

tampilx();

?>