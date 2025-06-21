<?php
require_once "../config.php";
$title ="customer -toko mutiara jaya";
require_once "../templat/header.php";
require_once "../templat/navbar.php";
require_once "../templat/sidebar.php";

?>

<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
 <div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4" style="color:#ffff;">DATA BARANG ELEKTRONIK</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active"><a href=" stok-elek.php" style="color:#ffff;">JUMLAH STOK</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;"><a href="trigger.php" style="color:#ffff;">HISTORY PERUBAHAN STOK</a></li>
    </ol>
<div class="card">
    <div class="card-header">
        <span class="h5 my-2"><i class="fa-solid fa-tv" ></i>Data Barang Elektronik</span>
 <a href="<?=$main_url?>elektronik/add-elektronik.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i>Tambah Data Barang </a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><center>NAMA BARANG</center></th>
                <th scope="col"><center>KODE BARANG</center></th>
                <th scope="col"><center>MEREK</center></th>
                <th scope="col"><center>HARGA</center></th>
                <th scope="col"><center>JUMLAH STOK</center></th>
                <th scope="col"><center>OPERASI</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no =1;
            $queryelektronik =mysqli_query($conn, "SELECT * FROM elektronik");
            while ($data =mysqli_fetch_array($queryelektronik)){ ?>  
            <tr>
            <th scope="row"><?= $no++?></th>
            <td align="center"><?=$data['nama_barang'] ?></td>
            <td align="center"><?=$data['kode_barang'] ?></td>
            <td align="center"><?=$data['merek'] ?></td>
            <td align="center"><?=$data['harga'] ?></td>
            <td align="center"><?=$data['jumlah_stok'] ?></td>
            <td align="center">
                <a href="edit-elektronik.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-warning" title="Update Data Elektronik"><i class="fa-solid fa-pen"></i></a>
                <a href="hapus-elektronik.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-danger" title="hapus mebel" onclick="return confirm('anda yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></a>

            </td>
            </tr>
            <?php }  
            ?>
        </tbody>
     </table>
    </div>
  </div>
</div>
    </div>
    </main>
</div>

<?php

require_once "../templat/footer.php";

?>