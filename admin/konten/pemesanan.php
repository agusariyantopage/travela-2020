<!-- Tampilan Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item active">
				Pemesanan
			</li>
		</ol>

		<!-- Isi Tabel -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
				Data Pemesanan
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<th>ID</th>
							<th>Kode Reservasi</th>
							<th>Pemesanan Dari</th>
							<th>Tanggal Reservasi</th>
							<th>Id Pelanggan</th>
							<th>Kode Kursi</th>
							<th>Id Rute</th>
							<th>Id Kedatangan</th>
							<th>Harga</th>
							<th>Id User</th>
							<th>Aksi</th>
						</thead>
						<tfoot>
							<th>ID</th>
							<th>Kode Reservasi</th>
							<th>Pemesanan Dari</th>
							<th>Tanggal Reservasi</th>
							<th>Id Pelanggan</th>
							<th>Kode Kursi</th>
							<th>Id Rute</th>
							<th>Id Kedatangan</th>
							<th>Harga</th>
							<th>Id User</th>
							<th>Aksi</th>
						</tfoot>
						<tbody>
<?php
	$sql="select * from reservation";
	$perintah=mysqli_query($koneksi,$sql);
	while ($r=mysqli_fetch_array($perintah)) {		
	
?>							
							<tr>
								<td><?= $r['id']; ?></td>
								<td><?= $r['reservation_code']; ?>
								<td><?= $r['reservation_at']; ?></td>
								<td><?= $r['reservation_date']; ?></td>
								<td><?= $r['customer_id']; ?></td>
								<td><?= $r['seat_code']; ?></td>
								<td><?= $r['ruteid']; ?></td>
								<td><?= $r['depart_id']; ?></td>
								<td><?= $r['price']; ?></td>
								<td><?= $r['userid']; ?></td>
								<td>
<a href="index.php?p=editpemesanan&id=<?= $r['id']; ?>"><span class="fas fa-edit"></span></a>
&nbsp;
<a href="aksi_pemesanan_hapus.php?id=<?= $r['id']; ?>"><span class="fas fa-trash"></span></a>
								</td>
							</tr>
<?php
	}
?>							
						</tbody>
					</table>
				</div>
			</div>
			<a href="index.php?p=addrute" class="btn btn-success">
				<span class="fas fa-fw fa-file" aria-hidden=true></span>Tambah
			</a>
			<div class="card-footer small text-muted">
				Terakhir Update Kemarin Jam 14:00
			</div>
		</div>

	</div>
</div>