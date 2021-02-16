<?php
    session_start();
    include "koneksi.php";

    $x1 = $_POST['username'];
    $x2 = $_POST['password'];
    
    $sql="select * from customer where username ='$x1' and password='$x2'";
    // echo $sql;
    $perintah=mysqli_query($koneksi,$sql);
    $ketemu=mysqli_num_rows($perintah);
    if($ketemu>=1){
        // echo "login customer sukses";
        $r=mysqli_fetch_array($perintah);  // Ambil Data Pelanggannya
        $_SESSION['namapelanggan']  =$r['name'];
        $_SESSION['idpelanggan']    =$r['id'];
        header('location:index.php?p=caritiket');
    } else {
        // echo "login customer gagal";
        header('location:index.php?p=login&status=gagallogin');
    }

    
?>