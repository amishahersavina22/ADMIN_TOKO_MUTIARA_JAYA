<?php
require_once "../config.php";
session_start();

if(isset($_session["ssLogin"])){
    header("Location:../auth/login.php");
    exit();
}

if (isset($_POST['simpan'])){
    $nama = trim(htmlspecialchars($_POST['nama']));
    $tanggal_transaksi = trim(htmlspecialchars($_POST['tanggal']));
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $jenis_barang = $_POST['jenis_barang'];
    $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
    $jumlah = trim(htmlspecialchars($_POST['jumlah']));
    $harga = trim(htmlspecialchars($_POST['harga']));

    mysqli_query($conn,"INSERT INTO customer VALUES (null,'$nama','$tanggal_transaksi','$alamat','$jenis_barang','$nama_barang','$jumlah','$harga')");

    echo 
    "<script> 
    alert('Data pelanggan berhasil disimpan');
    document.location.href ='customer.php';
    </script>";
    return;

} else if (isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = trim(htmlspecialchars($_POST['nama']));
    $tanggal_transaksi = trim(htmlspecialchars($_POST['tanggal']));
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $jenis_barang = $_POST['jenis_barang'];
    $nama_barang = trim(htmlspecialchars($_POST['nama_barang']));
    $jumlah = trim(htmlspecialchars($_POST['jumlah']));
    $harga = trim(htmlspecialchars($_POST['harga']));


    mysqli_query($conn," UPDATE customer SET 
                                                nama = '$nama',
                                                tanggal_transaksi ='$tanggal_transaksi',                                              
                                                alamat ='$alamat',
                                                jenis_barang ='$jenis_barang',
                                                nama_barang ='$nama_barang',
                                                jumlah ='$jumlah',
                                                harga ='$harga'
                                                WHERE id ='$id'
                                                ");

    echo 
    "<script> alert('Data pelanggan berhasil diUpdate');
    document.location.href='customer.php';
    </script>";
return;
}


    ?>

