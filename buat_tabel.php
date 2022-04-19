<?php
    include_once("koneksiprosedural.php");
    $sql = "CREATE TABLE kosmetik(
        Nama_Produk VARCHAR(30) PRIMARY KEY,
        Jumlah_Produk FLOAT(10),
        Kadaluarsa VARCHAR(20),
        Harga_Produk FLOAT(10)
    );";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan Tabel Berhasil";
    }else{
        echo "Pembuatan Tabel Galgal";
    }