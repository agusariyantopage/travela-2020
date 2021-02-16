<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x0 =$_POST['id'];
	$x1	=$_POST['nama'];
	

	// Perintah Update Tabel
	$sql="update transportation_type set description='$x1' where id=$x0";
	mysqli_query($koneksi,$sql);

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=tipetransportasi");
?>