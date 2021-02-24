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
    <li class="breadcrumb-item active" aria-current="page">Upload Bukti Pembayaran Sukses</li>
  </ol>
</nav>   
<h2>Selamat Proses Upload Berhasil</h2>
<p align="justify">
    Bukti pembayaran sedang diverifikasi oleh tim travela, proses verifikasi akan memakan waktu paling lama 30 Menit , Setelah bukti anda dinyatakan valid anda dapat mencetak E-Tiket pada Halaman <a href="index.php?p=daftarbooking">Ini</a> . Jika setelah 30 menint data anda belum diverifikasi silahkan hubungi nomor ini 08484784784784.
</p>

