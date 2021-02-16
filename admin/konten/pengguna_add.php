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
				Tambah Pengguna
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_pengguna_add.php">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" required="" id="username" placeholder="Masukkan Username . . ." class="form-control">
			</div>	
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" required="" id="password" placeholder="Masukkan Password . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" name="nama" required="" id="nama" placeholder="Masukkan Nama Lengkap . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="level">Level Pengguna</label>
				<select name="level" class="form-control">
					<option value="1">Administrator</option>
					<option value="2">Bagian Pemesanan</option>
					<option value="3">Bagian Konten</option>
				</select>
			</div>					
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>