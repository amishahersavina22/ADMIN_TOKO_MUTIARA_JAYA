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
    <h1 class="mt-4" style="color:#ffff;">STATUS PESANAN CUSTOMER</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;">Status Pesanan</li>
    </ol>
<div class="card">
    <div class="card-header">
        <span class="h5 my-2" style="color:black;"><i class="fa-solid fa-truck"></i>Status Pesanan Barang</span>
 <a href="<?=$main_url?>status/add-status.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i>Tambah Pesanan</a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><center>NAMA</center></th>
                <th scope="col"><center>TANGGAL PESANAN</center></th>
                <th scope="col"><center>NAMA BARANG</center></th>
                <th scope="col"><center>ALAMAT</center></th>               
                <th scope="col"><center>STATUS</center></th>
                <th scope="col"><center>OPERASI</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
            $querystatus =mysqli_query($conn, "SELECT * FROM status_pesanan                                   ");
            while ($data =mysqli_fetch_array($querystatus)){ ?>  
            <tr>
            <th scope="row"><?= $no++?></th>
            <td align="center"><?=$data['nama'] ?></td>
            <td align="center"><?=$data['tanggal_pesanan'] ?></td>
            <td align="center"><?=$data['nama_barang'] ?></td>
            <td align="center"><?=$data['alamat'] ?></td>
            <td align="center"><?=$data['status'] ?></td>
            <td align="center">
                <a href="edit-status.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-warning" title="Update Status"><i class="fa-solid fa-pen"></i></a>
                <a href="hapus-status.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-danger" title="hapus mebel" onclick="return confirm('anda yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></a>
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