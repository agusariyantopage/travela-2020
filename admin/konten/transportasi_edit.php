<?php
	// Mengambil Data Pelanggan Sesuai ID Yang Dipilih
	$id=$_GET['id'];
	$sql="select * from transportation where id=$id";
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
				<a href="index.php?p=transportasi">Transportasi</a>
			</li>
			<li class="breadcrumb-item active">
				Ubah Transportasi
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_transportasi_edit.php">
			<div class="form-group">
				<label for="id">ID Transportasi</label>
				<input value="<?= $r['id']; ?>" id="id" name="id" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label for="kode">Kode Tipe Transportasi</label>
				<input type="text" value="<?= $r['code']; ?>" name="kode" required="" id="kode" placeholder="Masukkan Kode Transportasi . . ." class="form-control">
			</div>	
			<div class="form-group">
				<label for="nama">Nama Transportasi</label>
				<input type="text" value="<?= $r['description']; ?>" name="nama" required="" id="nama" placeholder="Masukkan Nama Transportasi . . ." class="form-control">
			</div>
			<div class="form-group">
				<label for="idtipe">ID Tipe Transportasi</label>
				<select name="idtipe" class="form-control">
<?php
	$idtipe=$r['transportation_typeid'];
	$sql1="select * from transportation_type where id ='$idtipe'";
	$query1=mysqli_query($koneksi,$sql1);
	$r1=mysqli_fetch_array($query1);
	echo "<option value=$r1[id]>$r1[description]</option>";

	$sql2="select * from transportation_type";
	$query2=mysqli_query($koneksi,$sql2);
	while($r2=mysqli_fetch_array($query2)){
		echo "<option value=$r2[id]>$r2[description]</option>";
	}

?>				
				</select>
			</div>
			<div class="form-group">
				<label for="kapasitas">Kapasitas Penumpang Transportasi</label>
				<input type="number" value="<?= $r['seat_qty']; ?>" name="kapasitas" required="" id="kapasitas" placeholder="Masukkan Kapasitas Transportasi . . ." class="form-control">
			</div>			
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>