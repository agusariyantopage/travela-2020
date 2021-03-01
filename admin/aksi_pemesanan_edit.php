<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x1=$_POST['id'];
	$x2=$_POST['kr'];
	$x3=$_POST['kk'];
	$x4=$_POST['status'];
	$x5=$_POST['alasan'];
	

	// Perintah Update Tabel
	$sql="update reservation set reservation_code='$x2',seat_code='$x3',status='$x4',alasan_ditolak='$x5' where id=$x1";
	mysqli_query($koneksi,$sql);

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=pemesanan");
?>