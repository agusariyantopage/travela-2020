<?php
  // Ambil Nilai ID Reservasi
  $idp=$_SESSION['idpelanggan'];

  
  $sql="select * from reservation where customer_id=$idp order by id desc limit 1";
  // echo $sql;
  $perintah=mysqli_query($koneksi,$sql);
  $data=mysqli_fetch_array($perintah);
  $id_pemesanan=$data['id'];
  // echo $id_pemesanan;

?>
<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">    
    <li class="breadcrumb-item active" aria-current="page">Pemesanan Sukses</li>
  </ol>
</nav>   
<h2>Selamat Proses Pemesanan Berhasil</h2>
<p align="justify">
    Langkah Selanjutnya silahkan melakukan pembayaran dengan nominal sebesar <b>Rp. <?= number_format($data['price']); ?></b> pada salah satu rekening yang ada dibawah ini.<br>
    <b>1 BCA</b><br>
    Nomor Rekening : 777 777 777<br>
    Atasa Nama : Agus Ariyanto<br>
    <b>2 Mandiri</b><br>
    Nomor Rekening : 888 888 888<br>
    Atasa Nama : Agus Ariyanto<br>
    <b>3 CIMB Niaga</b><br>
    Nomor Rekening : 555 555 5555<br>
    Atasa Nama : Agus Ariyanto<br>

    Setelah Melakukan Pembayaran Silahkan Upload Bukti Bayar Di Form DIbawah Ini
</p>

<form action="aksi_upload_bukti.php" enctype="multipart/form-data" method="post" >
  <input type="hidden" name="idpemesanan" value=<?= $id_pemesanan; ?> >
  <div class="form-group">
    <label for="namafile">Upload Bukti Bayar</label>
    <input type="file" name="namafile" class="form-control">
  </div>
  <div class="form-group">
    <button class="btn btn-success" type="submit"><i class="fas fa-disk"></i>Upload</button>
  </div>
</form>