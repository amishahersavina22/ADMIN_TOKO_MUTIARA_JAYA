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
$customer = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id'");
$data =  mysqli_fetch_array($customer);
?>
<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">

<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
   <h1 class="mt-4">Update Customer</h1>
   <ol class="breadcrumb mb-4">
       <li class="breadcrumb-item"><a href="../index.php" style="color:#ffff;">HOME</a></li>
       <li class="breadcrumb-item"><a href="customer.php" style="color:#ffff;">CUSTOMER</a></li>
       <li class="breadcrumb-item active" style="color:#ffff;">Update Customer</li>
    </ol>
    <form action="prosescustomer.php" method="POST" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
    <span class="h-5 my-2"><i class="fa-solid fa-to-square"></i>Update Customer</span>
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
                      <input type="text"  id="nama" name="nama" class="form-control border-0 border-bottom ps-2" id="nama" value="<?=$data['nama']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>  
                      <label for="tanggal" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="date"  id="tanggal" name="tanggal" class="form-control border-0 border-bottom ps-2" id="tanggal" value="<?=$data['tanggal_transaksi']?>">
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
                      <label for="jenis_barang" class="col-sm-2 col-form-label">jenis_barang</label>  
                      <label for="jenis_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <select name="jenis_barang" id="jenis_barang" class="form-select border-0 border-bottom ">
                      <?php
                        $mebel=["MEBEL","ELEKTRONIK"];
                        foreach($mebel as $mb){
                            if($data['statusbarang']== $mb){ ?>
                            <option value="<?=$mb;?>" selected><?=$mb;?></option>
                            <?php } else{ ?>
                                <option value="<?=$mb;?>"><?=$mb;?></option>
                                <?php
                            }
                        }
                     ?>
                      </select>
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="nama_barang" class="col-sm-2 col-form-label">nama_barang</label>  
                      <label for="nama_barang" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="nama_barang" name="nama_barang" class="form-control border-0 border-bottom ps-2" id="nama_barang" value="<?=$data['nama_barang']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>  
                      <label for="jumlah" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="jumlah" name="jumlah" class="form-control border-0 border-bottom ps-2" id="jumlah" value="<?=$data['jumlah']?>">
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="harga" class="col-sm-2 col-form-label">harga</label>  
                      <label for="harga" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" style="margin-left:-50px;">
                      <input type="text"  id="harga" name="harga" class="form-control border-0 border-bottom ps-2" id="harga" value="<?=$data['harga']?>">
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