<?php
    include_once("Koneksidb.php");
    $cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT) 
        or die("Terjadi kesalahan saat koneksi ke database");

    echo "Sukses Progress";