<?php
	// Mengarahkan Isi Konten Sesuai Navigasi
	if (empty($_GET)){
		include "konten/dashboard.php";
	} elseif ($_GET['p']=='dashboard') {
		include "konten/dashboard.php";
	} elseif ($_GET['p']=='pelanggan') {
		include "konten/pelanggan.php";
	} elseif ($_GET['p']=='pemesanan') {
		include "konten/pemesanan.php";
	} elseif ($_GET['p']=='rute') {
		include "konten/rute.php";
	} elseif ($_GET['p']=='tipetransportasi') {
		include "konten/tipe.php";
	} elseif ($_GET['p']=='transportasi') {
		include "konten/transportasi.php";
	} elseif ($_GET['p']=='pengguna') {
		include "konten/pengguna.php";
	} elseif ($_GET['p']=='addpelanggan'){
		include "konten/pelanggan_add.php";
	} elseif ($_GET['p']=='editpelanggan'){
		include "konten/pelanggan_edit.php";
	} elseif ($_GET['p']=='edittipe'){
		include "konten/tipe_edit.php";
	} elseif ($_GET['p']=='addtipe'){
		include "konten/tipe_add.php";
	} elseif ($_GET['p']=='edittransportasi'){
		include "konten/transportasi_edit.php";
	} elseif ($_GET['p']=='addtransportasi'){
		include "konten/transportasi_add.php";
	} elseif ($_GET['p']=='editpengguna'){
		include "konten/pengguna_edit.php";
	} elseif ($_GET['p']=='addpengguna'){
		include "konten/pengguna_add.php";
	} elseif ($_GET['p']=='editrute'){
		include "konten/rute_edit.php";
	} elseif ($_GET['p']=='addrute'){
		include "konten/rute_add.php";
	} elseif ($_GET['p']=='editpemesanan'){
		include "konten/pemesanan_edit.php";
	} elseif ($_GET['p']=='addpemesanan'){
		include "konten/pemesanan_add.php";
	} elseif ($_GET['p']=='laporan'){
		include "konten/laporan.php";
	} else if($_GET['p']=="backup"){
		include "konten/backup.php";
	}


?>