<!-- Tampilan Tabel Pelanggan -->
<div id="content-wrapper">
	<div class=container-fluid>
		<!-- Judul Menu -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">
				<a href="#">Backup</a>
			</li>			
		</ol>

		<!-- Isi Tabel -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
				Pilih Tabel Yang Akan Di-Backup
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<th>No</th>
							<th>Tabel</th>
							<th>Aksi</th>
						</thead>
						<tfoot>
							<th>No</th>
							<th>Tabel</th>
							<th>Aksi</th>
						</tfoot>
						<tbody>
<tr>
	<td>1</td>
	<td>Tabel Pelanggan</td>
	<td><a href="aksi_backup.php?tabel=customer" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
<tr>
	<td>2</td>
	<td>Tabel Pemesanan</td>
	<td><a href="aksi_backup.php?tabel=reservation" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
<tr>
	<td>3</td>
	<td>Tabel Rute</td>
	<td><a href="aksi_backup.php?tabel=rute" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
<tr>
	<td>4</td>
	<td>Tabel Tipe Transportasi</td>
	<td><a href="aksi_backup.php?tabel=transportation_type" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
<tr>
	<td>5</td>
	<td>Tabel Transportasi</td>
	<td><a href="aksi_backup.php?tabel=transportation" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
<tr>
	<td>6</td>
	<td>Tabel Pengguna</td>
	<td><a href="aksi_backup.php?tabel=user" class="btn btn-success"><span class="fas fa-fw fa-hdd" aria-hidden=true></span> Backup</a></td>
</tr>
						</tbody>
					</table>
				</div>
			</div>			
		</div>

	</div>
</div>