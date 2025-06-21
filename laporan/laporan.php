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
    <h1 class="mt-4" style="color:#ffff;">LAPORAN PENINJAUAN</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
        <li class="breadcrumb-item active" style="color:#ffff;">DATA LAPORAN</li>
    </ol>
<div class="card">
    <div class="card-header">
        <span class="h5 my-2" style="color:black;"><i class="fa-solid fa-truck"></i>LAPORAN PENINJAUAN</span>
 <a href="<?=$main_url?>status/add-status.php" class="btn btn-sm btn-primary float-end">
 <i class="fa-solid fa-square-plus"></i>Tambah Pesanan</a>  
    </div>
    <div class="card-body">
     <table class="table table-hover" id="datatablesSimple">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><center>jUMLAH PESANAN</center></th>
                <th scope="col"><center>STOK MEBEL</center></th>
                <th scope="col"><center>STOK ELEKTRONIK</center></th>
                <th scope="col"><center>JUMLAH PENJUALAN</center></th>               
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

require_once "../templat/footer.php";

?>