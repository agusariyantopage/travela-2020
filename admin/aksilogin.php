<?php
	session_start();
	include "koneksi.php";
	$x1		= $_POST['username'];
	$x2		= $_POST['inputPassword'];

	// Cek Username Dan Password Di Database
	$sql="select * from user where username='$x1' and password='$x2'";
	$perintah=mysqli_query($koneksi,$sql);
	$ketemu=mysqli_num_rows($perintah);

	if($ketemu>=1){
		// echo "Login Sukses";
		$r=mysqli_fetch_array($perintah);
		$_SESSION['namapengguna'] 	= $r['username'];
		$_SESSION['namalengkap']	= $r['fullname'];
		$_SESSION['level']			= $r['level'];
		header('location:index.php');
	} else {
		//echo "Login Gagal";
		header('location:login.php?status=gagallogin');
	}

?>