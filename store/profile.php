<?php

require_once "../config.php";

$title ="Profile - MUTIARA JAYA";
require_once "../templat/header.php";
require_once "../templat/navbar.php";
require_once "../templat/sidebar.php";

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}else{
    $msg='';
}

$alert ='';
if ($msg =='cancel'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid triangel-exclamation"></i>  Tambah User Gagal, username sudah ada
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
    </button>
    </div>';
}

if ($msg =='notimage'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-triangel-exclamation"></i> UPDATE DATA TOKO GAGAL
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
    </button>
    </div>';
}

if ($msg =='oversize'){
    $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid triangel-exclamation"></i>  UPDATE DATA TOKO GAGAL
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
    </button>
    </div>';
}

if ($msg =='updated'){
    $alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-check"></i>  Data Toko berhasil diperbaharui
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
    </button>
    </div>';
}

$toko =mysqli_query($conn,"SELECT * FROM store WHERE id = 1");
$data =mysqli_fetch_array($toko)
?>

<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">
 <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TOKO MUTIARA JAYA</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">HOME</a></li>
                            <li class="breadcrumb-item active">Profile Sekolah </li>
                        </ol>
<form action="prosestoko.php" method="POST" enctype="multipart">
                    <div class="card">
                        <div class="card-header">
                            <span class="h5"><i class="fa-solid fa-pen-to"></i> Data Toko</span>
                        <button type="submit" name="simpan" class="btn btn-primary float-end" ><i class="fa-solid fa-floppy-disk"></i>UPDATE</button>
                      <botton type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i>Reset</botton> 
                    </div>
                        <div class="card-body">
                              <div class="row">
                                <div class="col-4 text-center px-5">
                                    <img src="../asset/img/img-default.png" alt="gambar toko" class="mb-3" width="100px">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                    <smal class="text-secondary">Pilih Gambar PNG, JPG, JPEG dengan ukuran maximal 1 MB</smal>
                                </div>
                            <div class="col-8">
                                <input type="hidden" name="id"  value="<?=$data['id']?>">
                            <div class="mb-3 row">
                      <label for="name" class="col-sm-2
                      col-form-label">NAMA</label> 
                      <label for="nama" class="col-sm-1
                      col-form-label">:</label>              
                      <div class="col-sm-9" style="margin-left:-50px";>
                      <input type="text"  class="form-control border-0 border-bottom" 
                      id="name" name="name" value="<?=$data['name']?>" placeholder="nama toko" required>
                                </div>
                         </div>   
                         <div class="mb-3 row">
                      <label for="email" class="col-sm-2
                      col-form-label">EMAIL</label> 
                      <label for="email" class="col-sm-1
                      col-form-label">:</label>              
                      <div class="col-sm-9" style="margin-left:-50px";>
                      <input type="text"  class="form-control border-0 border-bottom" 
                      id="email" name="email" value="<?=$data['email']?>" placeholder="email toko" required>
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="cabang" class="col-sm-2
                      col-form-label">CABANG</label> 
                      <label for="cabang" class="col-sm-1
                      col-form-label">:</label>              
                      <div class="col-sm-9" style="margin-left:-50px";>
                    <select id="cabang"  name="cabang" value="<?=$data['cabang']?>" class="form-select border-0 border-bottom">
                       <!-- <option value="kaliamantan">kalimantan</option>
                       <option value="jawa">jawa</option>
                        <option value="sulawesi">sulawesi</option>-->
                        <?php
                        $cabang =['jawa','sulawesi'];
                        foreach($cabang as $stt){
                            if($data['cabang']=$stt){
                                ?>
                                <option value="<?= $stt ?>"selected><?=$stt?></option>
                                <?php } else{
                                    ?>
                                  <option value="<?= $stt ?>"><?=$stt?></option>

                                ?>
                           <?php
                            }
                        }
                        ?>
                    </select>
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="alamat" class="col-sm-2
                      col-form-label">ALAMAT</label> 
                      <label for="alamat" class="col-sm-1
                      col-form-label">:</label>              
                      <div class="col-sm-9" style="margin-left:-50px";>
                      <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Domisili" required><?=$data['alamat']?></textarea>
                                </div>
                         </div>
                         <div class="mb-3 row">
                      <label for="visi misi" class="col-sm-2
                      col-form-label">VISI MISI</label> 
                      <label for="visimisi" class="col-sm-1
                      col-form-label">:</label>              
                      <div class="col-sm-9" style="margin-left:-50px";>
                      <textarea name="visimisi" id="visimisi" cols="30" rows="3" class="form-control" placeholder="Domisili" required><?=$data['visimisi']?></textarea>
                                </div>
                         </div>
                            </div>  
                    </div>
            </div>
            
        </div>
        </form>
</div>
</main>
<?php

require_once "../templat/footer.php";
?>