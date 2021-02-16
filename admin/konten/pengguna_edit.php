<?php
	// Mengambil Data Pelanggan Sesuai ID Yang Dipilih
	$id=$_GET['id'];
	$sql="select * from user where id=$id";
	$query=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($query);

?>
<!-- Tampilan Tambah Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?p=pengguna">Pengguna</a>
			</li>
			<li class="breadcrumb-item active">
				Ubah Pengguna
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_pengguna_edit.php">
			<div class="form-group">
				<label for="id">ID Pengguna</label>
				<input value="<?= $r['id']; ?>" id="id" name="id" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" value="<?= $r['username']; ?>" name="username" required="" id="username" placeholder="Masukkan Username . . ." class="form-control">
			</div>	
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" value="<?= $r['password']; ?>" name="password" required="" id="password" placeholder="Masukkan Password . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" name="nama" value="<?= $r['fullname']; ?>" required="" id="nama" placeholder="Masukkan Nama Lengkap . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="level">Level Pengguna</label>
				<select name="level" class="form-control">
					<option value="<?= $r['level']; ?>">
						<?php 
							if($r['level']==1){
								echo "Administrator";
							}
							elseif($r['level']==2){
								echo "Bagian Pemesanan";
							}
							if($r['level']==3){
								echo "Bagian Konten";
							}
						?>
					</option>
					<option value="1">Administrator</option>
					<option value="2">Bagian Pemesanan</option>
					<option value="3">Bagian Konten</option>
				</select>
			</div>			
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>