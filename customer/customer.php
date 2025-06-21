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
    <h1 class="mt-4" style="color:#ffff;">Tambah Customer</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;"><a href="diskon.php" style="color:#ffff;">DISKON 5%</a></li>
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
                <th scope="col"><center>nama</center></th>
                <th scope="col"><center>tanggal_transaksi</center></th>
                <th scope="col"><center>alamat</center></th>
                <th scope="col"><center>jenis_barang</center></th>
                <th scope="col"><center>nama_barang</center></th>
                <th scope="col"><center>jumlah</center></th>
                <th scope="col"><center>harga</center></th>
                <th scope="col"><center>operasi</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no =1;
            $querycustomer =mysqli_query($conn, "SELECT * FROM customer");
            while ($data =mysqli_fetch_array($querycustomer)){ ?>    
            <tr>
            <th scope="row"><?= $no++?></th>
            <td align="center"><?=$data['nama'] ?></td>
            <td align="center"><?=$data['tanggal_transaksi']?></td>
            <td align="center"><?=$data['alamat']?></td>
            <td align="center"><?=$data['jenis_barang']?></td>
            <td align="center"><?=$data['nama_barang']?></td>
            <td align="center"><?=$data['jumlah']?></td>
            <td align="center"><?=$data['harga']?></td>
            <td align="center">
                <a href="edit-customer.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-warning" id="update" title="update customer"><i class="fa-solid fa-pen"></i></a>
                <a href="hapus-customer.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-danger" title="hapus customer" onclick="return confirm('anda yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></a>
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