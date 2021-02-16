<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x0 =$_POST['id'];
	$x1	=$_POST['kode'];
	$x2	=$_POST['nama'];
	$x3	=$_POST['idtipe'];
	$x4	=$_POST['kapasitas'];
	

	// Perintah Update Tabel
	$sql="update transportation set code='$x1',description='$x2',transportation_typeid='$x3',seat_qty=$x4 where id=$x0";
	mysqli_query($koneksi,$sql);

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=transportasi");
?>