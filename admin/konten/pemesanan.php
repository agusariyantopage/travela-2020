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
							<th>Nama Perusahaan</th>
							<th>Pemesanan Dari</th>
							<th>Tgl Pesan</th>
							<th>Rute Asal</th>
							<th>Rute Tujuan</th>
							<th>Bukti Upload</th>
							<th>Status</th>
							<th>Aksi</th>
						</thead>
						<tfoot>
							<th>ID</th>
							<th>Nama Perusahaan</th>
							<th>Pemesanan Dari</th>
							<th>Tgl Pesan</th>
							<th>Rute Asal</th>
							<th>Rute Tujuan</th>
							<th>Bukti Upload</th>
							<th>Status</th>
							<th>Aksi</th>
						</tfoot>
						<tbody>
<?php
	$sql="select reservation.*,rute.rute_from,rute.rute_to,transportation.description from reservation,rute,transportation where reservation.ruteid=rute.id and rute.transportationid=transportation.id";
	$perintah=mysqli_query($koneksi,$sql);
	while ($r=mysqli_fetch_array($perintah)) {		
	
?>							
							<tr>
								<td><?= $r['id']; ?></td>
								<td><?= $r['description']; ?>
								<td><?= $r['reservation_at']; ?></td>
								<td><?= $r['reservation_date']; ?></td>
								<td><?= $r['rute_from']; ?></td>
								<td><?= $r['rute_to']; ?></td>
								<td><img height="100" src="../frontend/buktibayar/<?= $r['bukti_pembayaran']; ?>"></td>
								<td><?= $r['status']; ?></td>
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
			
			<div class="card-footer small text-muted">
				Terakhir Update Kemarin Jam 14:00
			</div>
		</div>

	</div>
</div>