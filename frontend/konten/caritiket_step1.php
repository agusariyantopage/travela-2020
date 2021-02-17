<?php
    include "koneksi.php";   
?>
<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Cari Tiket Moda Transportasi</li>
  </ol>
</nav>   
<h2>Silahkan Pilih Rute Yang Anda Inginkan</h2>
<table class="table">
  <tr>
    <th>Nama Perusahan</th>
    <th>Keberangkatan Via</th>
    <th>Rute Asal</th>
    <th>Rute Tujuan</th>
    <th>Harga Tiket</th>
    <th>Pilih</th>
  </tr>
<?php
  $id=$_GET['idtipe'];
  $sql="select rute.*,transportation.description from rute,transportation where rute.transportationid=transportation.id 
  and transportation_typeid=$id";
  // echo $sql;
  $perintah=mysqli_query($koneksi,$sql);
  while($r=mysqli_fetch_array($perintah)){
?>  
  <tr>
    <td><?= $r['description']; ?></td>
    <td><?= $r['depart_at']; ?></td>
    <td><?= $r['rute_from']; ?></td>
    <td><?= $r['rute_to']; ?></td>
    <td><?= $r['price']; ?></td>
    <td><a href="index.php?p=caritiket-step2&id=<?= $r['id']; ?>"><button class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i> Beli</button></a></td>
  </tr>
<?php
  }
?>  
</table>
