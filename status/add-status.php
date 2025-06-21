<?php

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit;
}

require_once "../config.php";
$title ="tambah User - MUTIARA JAYA";
require_once "../templat/header.php";
require_once "../templat/navbar.php";
require_once "../templat/sidebar.php";

?>
<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
   <h1 class="mt-4">Tambah customer</h1>
   <ol class="breadcrumb mb-4">
       <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
       <li class="breadcrumb-item"><a href="status.php" style="color:#ffff;">Cutomer</a></li>
       <li class="breadcrumb-item active" style="color:#ffff;">Tambah customer</li>
    </ol>
    <form action="prosesstatus.php" method="POST" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
    <span class="h-5 my-2"><i class="fa-solid fa-square-plus"></i>tambah customer</span>
    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i>SIMPAN</button>
    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i>RESET</button>    
</div>
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                         <div class="mb-3 row">
                      <label for="nama" class="col-sm-2 col-form-label">nama</label>  
                      <label for="nama" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="nama" name="nama" class="form-control border-0 border-bottom ps-2">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="tanggal_pesanan" class="col-sm-2 col-form-label">tanggal</label>  
                      <label for="tanggal_pesanan" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="date"  id="tanggal_pesanan" name="tanggal_pesanan" class="form-control border-0 border-bottom ps-2">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">nama_barang</label>  
                      <label for="nama_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="nama_barang" name="nama_barang" class="form-control border-0 border-bottom ps-2">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="alamat" class="col-sm-2 col-form-label">alamat</label>  
                      <label for="alamat" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="alamat" name="alamat" class="form-control border-0 border-bottom ps-2">
                                </div>
                         </div>
                        
                         <div class="mb-3 row">
                      <label for="status" class="col-sm-2 col-form-label">status_pesanan</label>  
                      <label for="status" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <select name="status" id="status" class="form-select border-0 border-bottom ">
                        <option value="diproses">diproses</option>
                        <option value="dikirim">dikirim</option>
                        <option value="selesai">selesai</option>
                      </select>
                                </div>
                         </div>
                    </div> 
                 </div>
              </div>
          </form>
      </div>
   </main>
  <div>

<?php 
require_once "../templat/footer.php";

?>