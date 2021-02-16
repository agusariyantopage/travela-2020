<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x1	=$_POST['kode'];
	$x2	=$_POST['nama'];
	$x3	=$_POST['idtipe'];
	$x4	=$_POST['kapasitas'];
	
	// Perintah Insert Tabel
	mysqli_query($koneksi,"insert into transportation (code,description,transportation_typeid,seat_qty) values('$x1','$x2','$x3','$x4')");

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=transportasi");
?>