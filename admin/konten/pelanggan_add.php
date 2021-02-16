<!-- Tampilan Tambah Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?p=pelanggan">Pelanggan</a>
			</li>
			<li class="breadcrumb-item active">
				Tambah Pelanggan
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_pelanggan_add.php">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" required="" id="nama" placeholder="Masukkan Nama . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat . . ." required=""></textarea>
			</div>
			<div class="form-group">
				<label for="nohp">Nomor Handphone</label>
				<input type="text" name="nohp" required="" id="nohp" placeholder="Masukkan Nomor Handphone . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<select class="form-control" name="jk" id="jk">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>