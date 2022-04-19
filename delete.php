<?php
    include_once("Koneksiprosedural.php");
    $sql = "DELETE FROM kosmetik WHERE Nama_Produk='Wardah' ;";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Proses Hpus Berhasil";
    }else{
        echo "Proses Hapus Gagal";
    }