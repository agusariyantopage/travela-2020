<?php
	// Mengambil Data Pelanggan Sesuai ID Yang Dipilih
	$id=$_GET['id'];
	$sql="select * from transportation_type where id=$id";
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
				<a href="index.php?p=tipetransportasi">Tipe Transportasi</a>
			</li>
			<li class="breadcrumb-item active">
				Ubah Tipe Transportasi
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_tipe_edit.php">
			<div class="form-group">
				<label for="id">ID Tipe Transportasi</label>
				<input value="<?= $r['id']; ?>" id="id" name="id" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label for="nama">Nama Tipe Transportasi</label>
				<input value="<?= $r['description']; ?>" type="text" name="nama" required="" id="nama" placeholder="Masukkan Nama Tipe Transportasi . . ." class="form-control">
			</div>			
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>