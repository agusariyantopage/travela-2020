<?php
  session_start();
  include "koneksi.php";
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fa/css/all.css">

    <title>Traveloke Website Ticketing Nomor 1 Di Bali</title>
  </head>
  <body>
    <section>
    <!-- Bagian Navigasi -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">Traveloke</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">              
              <li class="nav-item">
                <a class="nav-link" href="index.php"> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=caritiket">Cari Tiket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=hubungikami">Hubungi Kami</a>
              </li>
<?php
   // Mengecek Apakah Pelanggan Sudah Login
   if(empty($_SESSION['namapelanggan'])){
    // Menu Ketika Belum Login
      
?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=login">Login</a>
              </li>
<?php 
   } else {
      // Menu Ketika Sudah Login
      
?>
              <li class="nav-item">
                <a class="nav-link" href="#"><?= $_SESSION['namapelanggan']; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
<?php
   }
?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>    
    </section>

    <section>
    <!-- Komponen Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Traveloke</h1>
            <p class="lead">Website nomor 1 di Bali untuk pemesanan tiket . dapatkan promo terbaik di website kami !!</p>
          </div>
        </div>
    </section>

    <section>
    <!-- Komponen Isi --> 
        <div class="container-fluid mb-5">
            <?php include "konten.php"; ?>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer class="navbar fixed-bottom bg-dark">
      <div class="container">
        <span class="text-success">Copyright Traveloke 2021 Design By Agus Ariyanto.</span>
      </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>