<?php
	// Mengambil Data Pelanggan Sesuai ID Yang Dipilih
	$id=$_GET['id'];
	$sql="select reservation.*,rute.rute_from,rute.rute_to,transportation.description from reservation,rute,transportation where reservation.ruteid=rute.id and rute.transportationid=transportation.id and reservation.id=$id";
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
				<a href="index.php?p=pemesanan">Pemesanan</a>
			</li>
			<li class="breadcrumb-item active">
				Ubah Pemesanan
			</li>
		</ol>	

		<!-- Isian Form -->
		<form method="post" action="aksi_pemesanan_edit.php">
			<div class="form-group">
				<label for="id">ID Pemesanan</label>
				<input value="<?= $r['id']; ?>" id="id" name="id" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="np">Nama Perusahaan</label>
				<input value="<?= $r['description']; ?>" id="np" name="np" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="np">Nama Perusahaan</label>
				<input value="<?= $r['description']; ?>" id="np" name="np" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="np">Nama Perusahaan</label>
				<input value="<?= $r['description']; ?>" id="np" name="np" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="bd">Berangkat Dari</label>
				<input value="<?= $r['reservation_at']; ?>" id="bd" name="bd" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="tgl-psn">Tanggal Pemesanan</label>
				<input value="<?= $r['reservation_date']; ?>" id="tgl-psn" name="tgl-psn" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="ra">Rute Asal</label>
				<input value="<?= $r['rute_from']; ?>" id="ra" name="ra" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="rt">Rute Tujuan</label>
				<input value="<?= $r['rute_to']; ?>" id="rt" name="rt" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="tgl-brgkt">Tanggal Berangkat</label>
				<input value="<?= $r['tgl_berangkat']; ?>" id="tgl-brgkt" name="tgl-brgkt" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label for="jam-brgkt">Jam Berangkat</label>
				<input value="<?= $r['jam_berangkat']; ?>" id="jam-brgkt" name="jam-brgkt" class="form-control" readonly="">
			</div>						
			<div class="form-group">
				<label>Bukti Pembayaran</label>
				<img style="display:block;" src="../frontend/buktibayar/<?= $r['bukti_pembayaran']; ?>" height="300">
			</div>
			<div class="form-group">
				<label for="kr">Kode Reservasi</label>
				<input value="<?= $r['reservation_code']; ?>" id="kr" name="kr" class="form-control">
			</div>						
			<div class="form-group">
				<label for="kk">Kode Kursi</label>
				<input value="<?= $r['seat_code']; ?>" id="kk" name="kk" class="form-control">
			</div>						
			<div class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status">
				<option value="<?= $r['status']; ?>"><?= $r['status']; ?></option>
				<option value="Pending">Pending</option>
				<option value="Terbayar">Terbayar</option>
				<option value="Ditolak">Ditolak</option>
				</select>
			</div>
			<div class="form-group">
				<label for="alasan">Alasan Ditolak (* Hanya Diisi Jika Status Ditolak)</label>
				<textarea name="alasan" id="alasan" rows="3" class="form-control"><?= $r['alasan_ditolak']; ?></textarea>
			</div>						
									
			<button type="submit" class="btn btn-primary">Simpan</button>

		</form>	

	</div>
</div>