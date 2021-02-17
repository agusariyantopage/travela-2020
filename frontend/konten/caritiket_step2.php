<?php
    include "koneksi.php";   
?>
<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Cari Tiket Step 2</li>
  </ol>
</nav>
<?php
  // Mengecek Login Terlebih Dahulu
  if(empty($_SESSION['namapelanggan'])){

  // Konten Saat Belum Login
?>
<h2>Silahkan Login Terlebih Dahulu</h2>
<p>
    Untuk Melanjutkan Transaksi silahkan klik <a href='index.php?p=login'>disini</a> untuk melakukan proses login atau silahkan klik <a href='index.php?p=registrasi'>disini</a> bila anda belum memiliki akun.
</p>
<?php
  // -------------------  
} else {

  // Konten Saat Pengguna Sudah Login  
?>
<h2>Rincian Pemseanan Tiket</h2>
<form action="aksi_simpan_booking.php" method="post">
<?php
  // Mengambil Data Rute Sesuai ID
  $id = $_GET['id'];
  $sql1="select rute.*,transportation.description from rute,transportation where rute.transportationid=transportation.id 
  and rute.id=$id";
  $perintah1=mysqli_query($koneksi,$sql1);
  $kolom=mysqli_fetch_array($perintah1);

?>
  <div class="form-group">
      <input type="hidden" name="idrute" value="<?= $kolom['id']; ?>">
      <label for="namaperusahaan">Nama Perusahaan</label>
      <input readonly="" type="text" name="namaperusahaan" value="<?= $kolom['description']; ?>" class="form-control" name="keberangkatan" >
      <label for="keberangkatan">Keberangkatan Via</label>
      <input readonly="" value="<?= $kolom['depart_at']; ?>" type="text" class="form-control" name="keberangkatan" >
      <label for="ruteasal">Rute Asal</label>
      <input readonly="" value="<?= $kolom['rute_from']; ?>" type="text" class="form-control" name="ruteasal" >
      <label for="rutetujuan">Rute Tujuan</label>
      <input readonly="" value="<?= $kolom['rute_to']; ?>" type="text" class="form-control" name="rutetujuan" >
      <label for="harga">Harga Tiket</label>
      <input readonly="" value="<?= $kolom['price']; ?>" type="text" class="form-control" name="harga" >
      <label for="tgl_brgkt">Tanggal Berangkat</label>
      <input required="" type="date" name="tgl_brgkt" class="form-control">
      <label for="jam_brgkt">Jam Berangkat</label>
      <input required="" type="time" name="jam_brgkt" class="form-control">     
  </div>
  <div clas="form-group">
    <button type="submit" class="btn btn-success" ><i class="fas fa-book"></i> Pesan Sekarang</button>
  </div>
</form>

<?php
} // ------------------------------

?>

