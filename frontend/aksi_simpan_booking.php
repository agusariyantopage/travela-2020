<?php
    session_start();
    include "koneksi.php";
    $x1 = $_POST['idrute'];
    $x2 = $_POST['namaperusahaan'];
    $x3 = $_POST['keberangkatan'];
    $x4 = $_POST['ruteasal'];
    $x5 = $_POST['rutetujuan'];
    $x6 = $_POST['harga'];
    $x7 = $_POST['tgl_brgkt'];
    $x8 = $_POST['jam_brgkt'];
    $x9 = date('Y-m-d');
    $x10 = $_SESSION['idpelanggan'];

    $sql="insert into reservation (reservation_at,reservation_date,customer_id,ruteid,depart_id,price,tgl_berangkat,jam_berangkat,status) values('$x3','$x9',$x10,$x1,$x1,$x6,'$x7','$x8',default)";
    //echo $sql;
    mysqli_query($koneksi,$sql);
    

    header('location:index.php?p=suksesbooking');
?>