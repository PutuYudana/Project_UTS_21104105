<?php
    include_once("Koneksiprosedural.php");
    $namaproduk="DOVE";
    $jumlahproduk= "12345";
    $sql = "UPDATE kosmetik set jumlah_Produk='$jumlahproduk' WHERE Nama_Produk='$namaproduk' ;";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Proses Update Berhasil";
    }else{
        echo "Proses Update Gagal";
    }