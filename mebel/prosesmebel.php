<?php
require_once "../config.php";
session_start();

    if(isset($_session["ssLogin"])){
        header("Location:../auth/login.php");
        exit();
    }

    if (isset($_POST['simpan'])){
        $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
        $kode_barang = trim(htmlspecialchars($_POST['kode_barang']));
        $merek = trim(htmlspecialchars($_POST['merek']));
        $harga = $_POST['harga'];
        $jumlah_stok = trim(htmlspecialchars($_POST['jumlah_stok']));

        mysqli_query($conn,"INSERT INTO mebel VALUES (null,'$nama_barang','$kode_barang','$merek','$harga','$jumlah_stok')");

        echo 
        "<script> alert('Data pelanggan berhasil disimpan');
        document.location.href='mebel.php';
        </script>";
        return;
    } 

    else if (isset($_POST['update'])){
        $id = $_POST['id'];
        $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
        $kode_barang = trim(htmlspecialchars($_POST['kode_barang']));
        $merek = trim(htmlspecialchars($_POST['merek']));
        $harga = trim(htmlspecialchars($_POST['harga']));
        $jumlah_stok = trim(htmlspecialchars($_POST['jumlah_stok']));
        
        mysqli_query($conn," UPDATE mebel SET nama_barang = '$nama_barang', kode_barang ='$kode_barang', merek ='$merek', harga ='$harga', jumlah_stok ='$jumlah_stok' WHERE id ='$id'");

        echo 
        "<script> alert('Data barang Mebel berhasil diUpdate');
        document.location.href='mebel.php';
        </script>";
    return;
    }
?>
