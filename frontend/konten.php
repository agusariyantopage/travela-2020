<?php 
// Merubah isi konten sesuai navigasi
	if(empty($_GET['p'])){
		include "konten/home.php";}
	elseif($_GET['p']=='profil'){
		include "konten/profil.php";}
	elseif($_GET['p']=='caritiket'){
		include "konten/caritiket.php";}
	elseif($_GET['p']=='caritiket-step1'){
			include "konten/caritiket_step1.php";}	
	elseif($_GET['p']=='caritiket-step2'){
			include "konten/caritiket_step2.php";}	
	elseif($_GET['p']=='suksesbooking'){
			include "konten/suksesbooking.php";}	
	elseif($_GET['p']=='suksesupload'){
			include "konten/suksesupload.php";}	
	elseif($_GET['p']=='daftarbooking'){
			include "konten/daftarbooking.php";}	
	elseif($_GET['p']=='reupload'){
			include "konten/reupload.php";}	
	elseif($_GET['p']=='hubungikami'){
		include "konten/hubungikami.php";}
	elseif($_GET['p']=='login'){
		include "konten/login.php";}
	elseif($_GET['p']=='registrasi'){
		include "konten/registrasi.php";}			
	elseif($_GET['p']=='suksesregistrasi'){
		include "konten/suksesregistrasi.php";}			

 ?>