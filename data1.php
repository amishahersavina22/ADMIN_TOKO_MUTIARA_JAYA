<?php
require_once "config.php";
session_start();

if(isset($_session["ssLogin"])){
    header("Location:../auth/login.php");
    exit();
}

if (isset($_POST['simpan'])){
    $nama = trim(htmlspecialchars($_POST['nama']));
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $metodekirim = trim(htmlspecialchars($_POST['metode pengiriman']));

    mysqli_query($conn,"INSERT INTO data_pelanggan VALUES (null,'$nama','$alamat','$metodekirim')");

    echo 
    "<script> alert('Data pelanggan berhasil disimpan');
    document.location.href='status.php';
    </script>";

    return;
    } 
    ?>