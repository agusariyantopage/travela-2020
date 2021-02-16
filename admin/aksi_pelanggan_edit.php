<?php
	include "koneksi.php";

	// Mengambil Variabel Dari Form
	$x0 =$_POST['id'];
	$x1	=$_POST['nama'];
	$x2	=$_POST['alamat'];
	$x3	=$_POST['nohp'];
	$x4	=$_POST['jk'];

	// Perintah Update Tabel
	$sql="update customer set name='$x1',address='$x2',phone='$x3',gender='$x4' where id=$x0";
	mysqli_query($koneksi,$sql);

	// Mengarahkan Ke Halaman Daftar
	header("location:index.php?p=pelanggan");
?>