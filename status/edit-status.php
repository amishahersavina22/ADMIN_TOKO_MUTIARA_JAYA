<?php

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit;
}

require_once "../config.php";
$title ="Update Status Pesanan User - MUTIARA JAYA";
require_once "../templat/header.php";
require_once "../templat/navbar.php";
require_once "../templat/sidebar.php";

$id =$_GET['id'];
$statu = mysqli_query($conn, "SELECT * FROM status_pesanan WHERE id='$id'");
$data =  mysqli_fetch_array($statu);
?>
<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
   <h1 class="mt-4">Update Status Pesanan</h1>
   <ol class="breadcrumb mb-4">
       <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
       <li class="breadcrumb-item"><a href="status.php" style="color:#ffff;">Cutomer</a></li>
       <li class="breadcrumb-item active" style="color:#ffff;">Update status pesanan</li>
    </ol>
    <form action="prosesstatus.php" method="POST" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
    <span class="h-5 my-2"><i class="fa-solid fa-pen-to-square"></i>Update Pesanan</span>
    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i>SIMPAN UPDATE</button>
   </div>
    <div class="card-body">
        <div class="row">
            <div class="col-8">
            <input type="hidden" name="id"  value="<?=$data['id']?>">
                         <div class="mb-3 row">
                      <label for="nama" class="col-sm-2 col-form-label">nama</label>  
                      <label for="nama" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  name="nama" class="form-control border-0 border-bottom ps-2" id="nama" value="<?=$data['nama']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="tanggal_pesanan" class="col-sm-2 col-form-label">tanggal</label>  
                      <label for="tanggal_pesanan" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="date"  name="tanggal_pesanan" class="form-control border-0 border-bottom ps-2" id="tanggal_pesanan" value="<?=$data['tanggal_pesanan']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">nama_barang</label>  
                      <label for="nama_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text" name="nama_barang" class="form-control border-0 border-bottom ps-2" id="nama_barang" value="<?=$data['nama_barang']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="alamat" class="col-sm-2 col-form-label">alamat</label>  
                      <label for="alamat" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="alamat" name="alamat" class="form-control border-0 border-bottom ps-2" id="alamat" value="<?=$data['alamat']?>">
                                </div>
                         </div>
                        
                         <div class="mb-3 row">
                      <label for="status_pesanan" class="col-sm-2 col-form-label">status_pesanan</label>  
                      <label for="status_pesanan" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <select name="status_pesanan" id="status_pesanan" class="form-select border-0 border-bottom " id="status_pesanan" value="<?=$data['status_pesanan']?>">
                     <?php
                        $statusbarang=["Dikemas","Diantar","Selesai"];
                        foreach($statusbarang as $sb){
                            if($data['statusbarang']== $sb){ ?>
                            <option value="<?=$sb;?>" selected><?=$sb;?></option>
                            <?php } else{ ?>
                                <option value="<?=$sb;?>"><?=$sb;?></option>
                                <?php
                            }
                        }
                     ?>
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