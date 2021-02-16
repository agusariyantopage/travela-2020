<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x1	=$_POST['nama'];
	
	// Perintah Insert Tabel
	mysqli_query($koneksi,"insert into transportation_type (description) values('$x1')");

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=tipetransportasi");
?>