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
    <h1 class="mt-4" style="color:#ffff;"> DATA PERUBAHAN STOK BARANG </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;"></li>
    </ol>
<div class="card">
    <div class="card-header">
        <span class="h5 my-2"><i class="fa-solid fa-couch" ></i>Data </span>
 <a href="<?=$main_url?>mebel/add-mebel.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i> Data</a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">LOG_ID</th>
                <th scope="col"><center>ID</center></th>
                <th scope="col"><center>JUMLAH_STOK_LAMA</center></th>
                <th scope="col"><center>JUMLAH_STOK_BARU</center></th>
                <th scope="col"><center>WAKTU PERUBAHAN</center></th>
                <th scope="col"><center>OPERASI</center></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no =1;
            $querylogelektronik =mysqli_query($conn, "SELECT * FROM log_elektronik");
            while ($data =mysqli_fetch_array($querylogelektronik)){ ?>  
            <tr>
            <th scope="row"><?= $no++?></th>
            <td align="center"><?=$data['id'] ?></td>
            <td align="center"><?=$data['jumlah_stok_lama'] ?></td>
            <td align="center"><?=$data['jumlah_stok_baru'] ?></td>
            <td align="center"><?=$data['waktu_perubahan'] ?></td>
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