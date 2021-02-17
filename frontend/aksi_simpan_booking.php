<?php
    include "koneksi.php";
    $x1 = $_POST['idrute'];
    $x2 = $_POST['namaperusahaan'];
    $x3 = $_POST['keberangkatan'];
    $x4 = $_POST['ruteasal'];
    $x5 = $_POST['rutetujuan'];
    $x6 = $_POST['harga'];
    $x7 = $_POST['tgl_brgkt'];
    $x8 = $_POST['jam_brgkt'];

    $sql="insert into reservation (reservation_at,reservation_date,customer_id,ruteid,depart_id,price) values()"
    

    // header('location:index.php?p=suksesregistrasi');
?>