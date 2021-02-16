<!-- Tampilan Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item active">
				Pelanggan
			</li>
		</ol>

		<!-- Isi Tabel -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
				Data Pelanggan
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<th>ID</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor HP</th>
							<th>Jenis Kelamin</th>
							<th>Aksi</th>
						</thead>
						<tfoot>
							<th>ID</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor HP</th>
							<th>Jenis Kelamin</th>
							<th>Aksi</th>
						</tfoot>
						<tbody>
<?php
	$sql="select * from customer";
	$perintah=mysqli_query($koneksi,$sql);
	while ($r=mysqli_fetch_array($perintah)) {		
	
?>							
							<tr>
								<td><?= $r['id']; ?></td>
								<td><?= $r['name']; ?></td>
								<td><?= $r['address']; ?></td>
								<td><?= $r['phone']; ?></td>
								<td><?= $r['gender']; ?></td>
								<td>
<a href="index.php?p=editpelanggan&id=<?= $r['id']; ?>"><span class="fas fa-edit"></span></a>
&nbsp;
<a href="aksi_pelanggan_hapus.php?id=<?= $r['id']; ?>"><span class="fas fa-trash"></span></a>
								</td>
							</tr>
<?php
	}
?>							
						</tbody>
					</table>
				</div>
			</div>
			<a href="index.php?p=addpelanggan" class="btn btn-success">
				<span class="fas fa-fw fa-file" aria-hidden=true></span>Tambah
			</a>
			<div class="card-footer small text-muted">
				Terakhir Update Kemarin Jam 14:00
			</div>
		</div>

	</div>
</div>