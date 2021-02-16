<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">    
    <li class="breadcrumb-item active" aria-current="page">Pendaftaran Akun Baru</li>
  </ol>
</nav>   
<h2>Registration Form</h2>
<p align="justify">
    <form method="post" action="aksi_registrasi.php">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" required="" placeholder="Masukkan Nama Anda . . .">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" required="" placeholder="Masukkan Alamat Lengkap Anda . . ." rows="4" ></textarea>
      </div>
      <div class="form-group">
        <label for="telepon">Nomor Kontak</label>
        <input class="form-control" type="text" name="telepon" required="" placeholder="Masukkan Nomor Telepon atau Handphone Anda . . .">
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-control" name="jk">
          <option value="Laki-Laki">Laki Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>        
      </div>
      <div class="form-group">
        <label for="username">Masukkan Username</label>
        <input class="form-control" type="text" name="username" required="" placeholder="Masukkan Username Anda . . .">
      </div>      
      <div class="form-group">
        <label for="password">Masukkan Password</label>
        <input class="form-control" type="password" name="password" required="" placeholder="Masukkan Password Anda . . .">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   
</p>