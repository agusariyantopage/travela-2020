<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x1	=$_POST['nama'];
	$x2	=$_POST['alamat'];
	$x3	=$_POST['nohp'];
	$x4	=$_POST['jk'];

	// Perintah Insert Tabel
	mysqli_query($koneksi,"insert into customer (name,address,phone,gender) values('$x1','$x2','$x3','$x4')");

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=pelanggan");
?>