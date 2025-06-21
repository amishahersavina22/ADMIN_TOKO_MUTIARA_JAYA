<?php
require_once "config.php";
$title ="customer -toko mutiara jaya";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=$title?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?=$main_url ?>asset/sb-admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?=$main_url ?>asset/img/profile.png">
    </head>

<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
 <body class="sb-nav-fixed" style="background-color:#fef8e3;">
        <nav class="sb-topnav navbar navbar-expand " style=" background-color: #BD8E8E;">
            <!-- Navbar Brand-->
            <img src="../asset/img/profile.png" class="mb-1" width="4%">
            <a class="navbar-brand  ps-4 " href="<?= $main_url ?>index.php">TOKO MUTIARA JAYA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <span class="text-white text-capitalize"><?="Admin"?></span>   
        </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?= $main_url ?>" role="button" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= $main_url ?>store/profile.php">Profile User</a></li>
                        <li><a class="dropdown-item" href="<?= $main_url ?>store/profile.php">Profile Toko</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
     <div id="layoutSidenav_content" style="margin-top:100px;">
<main >
<div class="container-fluid px-8">
<div class="card">
    <div class="card-header">
        <span class="h5 my-8"><i class="fa-solid fa-couch" ></i>Data Mebel</span>
 <a href="<?=$main_url?>mebel/add-mebel.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i>Tambah Data</a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><center>NAMA PELANGGAN</center></th>
                <th scope="col"><center>ALAMAT</center></th>
                <th scope="col"><center>PENGIRIMAN</center></th>
                <th scope="col"><center>NAMA BARANG</center></th>  
                <th scope="col"><center>JUMLAH</center></th>        
                <th scope="col"><center>TOTAL HARGA</center></th>                     
            </tr>
        </thead>
        <tbody>
    <?php
    $no = 1;

    // Eksekusi prosedur pertama untuk mendapatkan total pelanggan
    $queryTotalPelanggan = mysqli_query($conn, "CALL GetTotalCustomer()");
    $totalPelanggan = [];
    if ($queryTotalPelanggan) {
        $totalPelanggan = mysqli_fetch_assoc($queryTotalPelanggan); // Ambil data hasil
        mysqli_next_result($conn); // Membersihkan hasil query sebelumnya
    }

    // Eksekusi prosedur kedua untuk mendapatkan total stok
    $queryTotalStok = mysqli_query($conn, "CALL GetTotalStok()");
    $totalStok = [];
    if ($queryTotalStok) {
        $totalStok = mysqli_fetch_assoc($queryTotalStok);
        mysqli_next_result($conn);
    }

    // Eksekusi prosedur ketiga untuk mendapatkan total stok 1
    $queryTotalStok1 = mysqli_query($conn, "CALL GetTotalstok1()");
    $totalStok1 = [];
    if ($queryTotalStok1) {
        $totalStok1 = mysqli_fetch_assoc($queryTotalStok1);
        mysqli_next_result($conn);
    }

    // Eksekusi prosedur keempat untuk mendapatkan total debit
    $queryTotalDebet = mysqli_query($conn, "CALL GetTotalDebet()");
    $totalDebet = [];
    if ($queryTotalDebet) {
        $totalDebet = mysqli_fetch_assoc($queryTotalDebet);
        mysqli_next_result($conn);
    }

    // Gabungkan data dan tampilkan dalam tabel
    ?>
    <tr>
        <th scope="row"><?= $no++ ?></th>
        <td align="center"><?= $totalPelanggan['TotalPelanggan'] ?? 'N/A' ?></td>
        <td align="center"><?= $totalStok['TotalStok'] ?? 'N/A' ?></td>
        <td align="center"><?= $totalStok1['TotalStok'] ?? 'N/A' ?></td>
        <td align="center"><?= $totalDebet['TotalDebet'] ?? 'N/A' ?></td>
    </tr>
</tbody>

     </table>
    </div>
  </div>
</div>
    </div>
    </main>
</div>


<?php


?>