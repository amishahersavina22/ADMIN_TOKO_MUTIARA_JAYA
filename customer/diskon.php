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
    <h1 class="mt-4" style="color:#ffff;">PELANGGAN DENGAN DISKON</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;">CUSTOMER</li>
    </ol>
<div class="card">
    <div class="card-header">
        <span class="h5 my-2" ><i class="fa-solid fa-users" ></i>Data Customer</span>
 <a href="<?=$main_url?>customer/add-customer.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i>Tambah Customer</a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><center>NAMA</center></th>
                <th scope="col"><center>NAMA BARANG</center></th>
                <th scope="col"><center>HARGA</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no =1;
            $querydiskon =mysqli_query($conn, "SELECT * FROM view2");
            while ($data =mysqli_fetch_array($querydiskon)){ ?>    
            <tr>
            <th scope="row"><?= $no++?></th>
            <td align="center"><?=$data['nama'] ?></td>
            <td align="center"><?=$data['nama_barang']?></td>
            <td align="center"><?=$data['harga'] ?></td>
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