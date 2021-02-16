<!-- Tampilan Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Master</a>
			</li>
			<li class="breadcrumb-item active">
				Pengguna
			</li>
		</ol>

		<!-- Isi Tabel -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
				Data Pengguna
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<th>ID</th>
							<th>Username</th>
							<th>Password</th>
							<th>Nama Lengkap</th>
							<th>Level</th>
							<th>Aksi</th>
						</thead>
						<tfoot>
							<th>ID</th>
							<th>Username</th>
							<th>Password</th>
							<th>Nama Lengkap</th>
							<th>Level</th>
							<th>Aksi</th>
						</tfoot>
						<tbody>
<?php
	$sql="select * from user";
	$perintah=mysqli_query($koneksi,$sql);
	while ($r=mysqli_fetch_array($perintah)) {		
	
?>							
							<tr>
								<td><?= $r['id']; ?></td>
								<td><?= $r['username']; ?></td>
								<td><?= $r['password']; ?></td>
								<td><?= $r['fullname']; ?></td>
								<td><?= $r['level']; ?></td>
								<td>
<a href="index.php?p=editpengguna&id=<?= $r['id']; ?>"><span class="fas fa-edit"></span></a>
&nbsp;
<a href="aksi_pengguna_hapus.php?id=<?= $r['id']; ?>"><span class="fas fa-trash"></span></a>
								</td>
							</tr>
<?php
	}
?>							
						</tbody>
					</table>
				</div>
			</div>
			<a href="index.php?p=addpengguna" class="btn btn-success">
				<span class="fas fa-fw fa-file" aria-hidden=true></span>Tambah
			</a>
			<div class="card-footer small text-muted">
				Terakhir Update Kemarin Jam 14:00
			</div>
		</div>

	</div>
</div>