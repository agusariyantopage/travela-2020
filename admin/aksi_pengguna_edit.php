<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x0 =$_POST['id'];
	$x1	=$_POST['username'];
	$x2	=$_POST['password'];
	$x3	=$_POST['nama'];
	$x4	=$_POST['level'];
	

	// Perintah Update Tabel
	$sql="update user set username='$x1',password='$x2',fullname='$x3',level=$x4 where id=$x0";
	mysqli_query($koneksi,$sql);

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=pengguna");
?>