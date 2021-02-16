<?php
	$server	="127.0.0.1";
	$user	="root";
	$passw	="";
	$db		="dbtravel2020b";

	$koneksi=mysqli_connect($server,$user,$passw,$db);

	if(!$koneksi){
		die("Koneksi Ke Database Gagal");
	} else {
		//echo "Koneksi Ke Database Sukses";
	}
?>