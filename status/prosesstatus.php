<?php
require_once "../config.php";
session_start();

if(isset($_session["ssLogin"])){
    header("Location:../auth/login.php");
    exit();
}

if (isset($_POST['simpan'])){
    $nama = trim(htmlspecialchars($_POST['nama']));
    $tanggal_pesanan = trim(htmlspecialchars($_POST['tanggal_pesanan']));
    $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $status = trim(htmlspecialchars($_POST['status']));


    mysqli_query($conn,"INSERT INTO status_pesanan VALUES (null,'$nama','$tanggal_pesanan','$nama_barang','$alamat','$status')");

    echo 
    "<script> alert('Data pelanggan berhasil disimpan');
    document.location.href='status.php';
    </script>";

    return;
    } else if (isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = trim(htmlspecialchars($_POST['nama']));
        $tanggal_pesanan = trim(htmlspecialchars($_POST['tanggal_pesanan']));
        $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
        $alamat = trim(htmlspecialchars($_POST['alamat']));
        $status_pesanan = trim(htmlspecialchars($_POST['status_pesanan']));


        mysqli_query($conn,"UPDATE status_pesanan SET 
                                                    nama = '$nama',
                                                    tanggal_pesanan ='$tanggal_pesanan',
                                                    nama_barang ='$nama_barang',
                                                    alamat ='$alamat',
                                                    status_pesanan ='$status_pesanan'
                                                    WHERE id ='$id'
                                                    ");

        echo 
        "<script> alert('Status pesanan pelanggan berhasil diUpdate');
        document.location.href='status.php';
        </script>";
 return;
    }
    
?>
