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
				Tambah Tipe Transportasi
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_tipe_add.php">
			<div class="form-group">
				<label for="nama">Nama Tipe Transportasi</label>
				<input type="text" name="nama" required="" id="nama" placeholder="Masukkan Nama Tipe Transportasi . . ." class="form-control">
			</div>			
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>