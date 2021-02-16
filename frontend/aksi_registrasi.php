<?php
    include "koneksi.php";

    $x1 = $_POST['nama'];
    $x2 = $_POST['alamat'];
    $x3 = $_POST['telepon'];
    $x4 = $_POST['jk'];
    $x5 = $_POST['username'];
    $x6 = $_POST['password'];
    
    $sql="insert into customer (name,address,phone,gender,username,password) values('$x1','$x2','$x3','$x4','$x5','$x6')";
    mysqli_query($koneksi,$sql);
    // echo $sql;

    header('location:index.php?p=suksesregistrasi');
?>