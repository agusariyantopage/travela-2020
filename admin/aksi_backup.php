<?php
	include "koneksi.php";
	//$waktu=date(Ymdhis);
	$tabel=$_GET['tabel'];
	$hasil="C:/xampp/htdocs/travela/admin/backup/".$tabel.".sql";
	
	$sql="select * into outfile '$hasil' from $tabel";
	mysqli_query($koneksi,$sql);

	header("location:index.php?p=backup&status=sukses");
?>