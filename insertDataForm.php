<?php
    if(isset($_POST["txNAMA"])){
        include_once("koneksiprosedural.php");
        $namaproduk= $_POST["txNAMA"];
        $jumlahproduk= $_POST["txJUPRO"];
        $kadaluarsa= $_POST["txKADALUARSA"];
        $hargaproduk= $_POST["txHARPRO"];
        $sql = "INSERT INTO kosmetik(Nama_Produk, Jumlah_Produk, Kadaluarsa, Harga_Produk) 
                values('$namaproduk','$jumlahproduk','$kadaluarsa','$hargaproduk')";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Insert Data ket tabel kosmetik sukses<br>";
        }else{
            echo "Insert Data Gagal<br>";
        }
    }else{
        header("location: ProsDataForm.php");
    }