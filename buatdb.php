<?php
    include_once("Koneksiprosedural.php");
    $sql = "CREATE DATABASE ZKosmetik;";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan database sukses";
    }else{
        echo "Terjadi kesalahan dalam pembuatan database";
    }
    mysqli_close($cnn);