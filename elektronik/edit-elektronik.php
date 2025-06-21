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

$id =$_GET['id'];
$elektronik = mysqli_query($conn, "SELECT * FROM elektronik WHERE id='$id'");
$data =  mysqli_fetch_array($elektronik);
?>
?>
<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
   <h1 class="mt-4">Update Data Elektronik</h1>
   <ol class="breadcrumb mb-4">
       <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
       <li class="breadcrumb-item"><a href="elektronik.php" style="color:#ffff;">Customer</a></li>
       <li class="breadcrumb-item active" style="color:#ffff;">Update Data Elektronik</li>
    </ol>
    <form action="proseselektronik.php" method="POST" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
    <span class="h-5 my-2"><i class="fa-solid fa-to-square"></i>Update Data Elektronik</span>
    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i>Update Data</button>
</div>
    <div class="card-body">
        <div class="row">
            <div class="col-8">
            <input type="hidden" name="id"  value="<?=$data['id']?>">
                         <div class="mb-3 row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">nama_barang</label>  
                      <label for="nama_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="nama_barang" name="nama_barang" class="form-control border-0 border-bottom ps-2" id="nama_barang" value="<?=$data['nama_barang']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="kode_barang" class="col-sm-2 col-form-label">kode_barang</label>  
                      <label for="kode_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="kode_barang" name="kode_barang" class="form-control border-0 border-bottom ps-2" id="kode_barang" value="<?=$data['kode_barang']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="merek" class="col-sm-2 col-form-label">merek</label>  
                      <label for="merek" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <select name="merek" id="merek" class="form-select border-0 border-bottom" id="merek" value="<?=$data['merek']?>">
                      <?php
                        $barangmebel=["PANASONIC","LG","SAMSUNG","MASPION","MIYAKO"];
                        foreach($barangmebel as $bm){
                            if($data['barangmebel']== $bm){ ?>
                            <option value="<?=$mb;?>" selected><?=$bm;?></option>
                            <?php } else{ ?>
                                <option value="<?=$bm;?>"><?=$bm;?></option>
                                <?php
                            }
                        }
                     ?>

                      </select>
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="harga" class="col-sm-2 col-form-label">harga</label>  
                      <label for="harga" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="harga" name="harga" class="form-control border-0 border-bottom ps-2" id="harga" value="<?=$data['harga']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="jumlah_stok" class="col-sm-2 col-form-label">jumlah_stok</label>  
                      <label for="jumlah_stok" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="jumlah_stok" name="jumlah_stok" class="form-control border-0 border-bottom ps-2" id="jumlah_stok" value="<?=$data['jumlah_stok']?>">
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