<?php
    include "koneksi.php";    
?>
<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Daftar Booking</li>
  </ol>
</nav>   
<h2>Daftar Booking Pelanggan <?= $_SESSION['namapelanggan']; ?></h2>
<table class="table">
  <tr>
    <th>No</th>
    <th>Berangkat Dari</th>
    <th>Tanggal Pemesanan</th>
    <th>Nama Perusahan</th>
    <th>Rute Asal</th>
    <th>Rute Tujuan</th>
    <th>Bukti Upload</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
<?php
  $id=$_SESSION['idpelanggan'];
  $sql="select reservation.*,rute.rute_from,rute.rute_to,transportation.description from reservation,rute,transportation where reservation.ruteid=rute.id and rute.transportationid=transportation.id and customer_id=$id";
  // echo $sql;
  $no=0;
  $perintah=mysqli_query($koneksi,$sql);
  while($r=mysqli_fetch_array($perintah)){
    $no=$no+1;
?>  
  <tr>
    <td><?= $no; ?></td>
    <td><?= $r['reservation_at']; ?></td>
    <td><?= $r['reservation_date']; ?></td>
    <td><?= $r['description']; ?></td>
    <td><?= $r['rute_from']; ?></td>
    <td><?= $r['rute_to']; ?></td>
    <td><img height="100" src="buktibayar/<?= $r['bukti_pembayaran']; ?>"></td>
    <td><?= $r['status']; ?></td>
    <td>
<?php
  if($r['status']!='Terbayar'){
?>    
    <a onclick="return confirm('Yakin Akan Membatalkan Booking?')" href="aksi_hapus_booking.php?id=<?= $r['id']; ?>"><button class="btn btn-outline-primary"><i class="fas fa-window-close"></i> Cancel</button></a>
    <a href="index.php?p=reupload&id=<?= $r['id']; ?>"><button class="btn btn-outline-primary"><i class="fas fa-file-upload"></i> Upload</button></a>
<?php
  }
?>
<?php
  if($r['status']=='Terbayar'){
?>    
    <a href="pdf/cetak_tiket.php?id=<?= $r['id']; ?>" target="blank"><button class="btn btn-outline-primary"><i class="fas fa-ticket-alt"></i> E-Ticket</button></a>
<?php
  }
?>
    </td>
  </tr>
<?php
  }
?>  
</table>
