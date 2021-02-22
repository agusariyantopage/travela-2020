<?php
    include "koneksi.php";
    $x1 = $_POST['idpemesanan'];
    $x2 = basename($_FILES["namafile"]["name"]);


    $target_dir="buktibayar/";
    $target_file=$target_dir.basename($_FILES["namafile"]["name"]);
    echo $target_file;
    if(move_uploaded_file($_FILES["namafile"]["tmp_name"],$target_file)){
        // echo "File Berhasil Di Upload";
        $sql1="update reservation set bukti_pembayaran='$x2' where id=$x1";
        mysqli_query($koneksi,$sql1);

    } else {
        echo "File Gagal Di Upload";
    }





?>