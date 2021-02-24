<?php
    include "koneksi.php";

    $id=$_GET['id'];

    $sql="delete from reservation where id=$id";
    mysqli_query($koneksi,$sql);

    header('location:index.php?p=daftarbooking');
    