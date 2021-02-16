<!-- Tampilan Tambah Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item">
				<a href="index.php?p=transportasi">Transportasi</a>
			</li>
			<li class="breadcrumb-item active">
				Tambah Transportasi
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_transportasi_add.php">
			<div class="form-group">
				<label for="kode">Kode Tipe Transportasi</label>
				<input type="text" name="kode" required="" id="kode" placeholder="Masukkan Kode Transportasi . . ." class="form-control">
			</div>	
			<div class="form-group">
				<label for="nama">Nama Transportasi</label>
				<input type="text" name="nama" required="" id="nama" placeholder="Masukkan Nama Transportasi . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="idtipe">ID Tipe Transportasi</label>
				<select name="idtipe" class="form-control">
<?php
	$sql="select * from transportation_type";
	$query=mysqli_query($koneksi,$sql);
	while($r=mysqli_fetch_array($query)){
		echo "<option value=$r[id]>$r[description]</option>";
	}
?>				
				</select>

			</div>
			<div class="form-group">
				<label for="kapasitas">Kapasitas Penumpang Transportasi</label>
				<input type="number" name="kapasitas" required="" id="kapasitas" placeholder="Masukkan Kapasitas Transportasi . . ." class="form-control">
			</div>					
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>