<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x1	=$_POST['username'];
	$x2	=$_POST['password'];
	$x3	=$_POST['nama'];
	$x4	=$_POST['level'];
	
	// Perintah Insert Tabel
	mysqli_query($koneksi,"insert into user (username,password,fullname,level) values('$x1','$x2','$x3',$x4)");

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=pengguna");
?>