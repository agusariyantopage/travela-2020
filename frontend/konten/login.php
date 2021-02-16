<!-- Komponen Breadcump / Navigasi -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">    
    <li class="breadcrumb-item active" aria-current="page">Login Customer</li>
  </ol>
</nav>   
<h2>Login Form</h2>
<p align="justify">
    <form action="aksi_login.php" method="post">
      <div class="form-group">
        <label for="username">Masukkan Username</label>
        <input class="form-control" type="text" name="username" required="" placeholde="Masukkan Username Anda . . .">
      </div>
      <div class="form-group">
        <label for="password">Masukkan Password</label>
        <input class="form-control" type="password" name="password" required="" placeholde="Masukkan Password Anda . . .">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    Belum Punya Akun Silahkan Daftar <a href="index.php?p=registrasi">Disini</a>
</p>