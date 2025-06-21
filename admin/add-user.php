
<?php
require_once "../config.php";
$title ="tambah User - MUTIARA JAYA";
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
       <i class="fa-solid fa-xmark"></i>  Tambah User Gagal, username sudah ada
       <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
       </button>
       </div>';
}

if ($msg =='notimage'){
       $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <i class="fa-solid fa-xmark"></i>  Tambah User Gagal, file yang anda upload bukan gambar
       <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
       </button>
       </div>';
}

if ($msg =='noversize'){
       $alert ='<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <i class="fa-solid fa-xmark"></i>  Tambah User Gagal, maksimal ukuran gambar 1 mb
       <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
       </button>
       </div>';
}

if ($msg =='added'){
       $alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
       <i class="fa-solid fa-circle-check"></i>  Tambah User berhasil, segera ganti password anda
       <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close">
       </button>
       </div>';
}
?>
<link rel="stylesheet" href="../asset/sb-admin/css/styles.css">
 <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color:#ffff;">DATA USER ADMIN</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item" ><a href="../index.php" style="color:#ffff; text-decoration:none;">HOME </a></li>
                            <li class="breadcrumb-item active" style="color:#ffff;">DATA USER ADMIN</li>
                        </ol>
                        <form action="proses-user.php" method="POST" enctype="multipart/form-data">
                        <?php
                        if ($msg !== ''){
                            echo $alert;
                        }
                        
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-user-tie"></i>tambah user</span>
                                <button type="submit" name="simpan" class="btn btn-primary float-end">
                                <i class="fa-solid fa-floppy-disk"></i>SIMPAN</button>
                                <button type="reset" name="reset" class="btn btn-danger float-end me-1">
                                <i class="fa-solid fa-xmark"></i>RESET</button>  
                            </div>
                            <div class="card-body">
                               <div class="row">
                                <div class="col-8">
                             <div class="mb-3 row">
                      <label for="username" class="col-sm-2 col-form-label">USERNAME</label>  
                      <label for="" class="col-sm-1 col-form-label">:</label>             
                      <div class="col-sm-9" >
                      <input type="text" pattern="[A-Za-z0-9]{3,}" title="minimal 3 karakter kombinasi huruf dan angka" class="form-control border-0 border-bottom" 
                      id="username" name="username" maxlength="20">
                                </div>
                         </div>
                   
                         <div class="mb-3 row">
                      <label for="password" class="col-sm-2
                      col-form-label">PASSWORD</label>  
                      <label for="" class="col-sm-1 
                      col-form-label">:</label>             
                      <div class="col-sm-9" >
                      <input type="text"  class="form-control border-0 border-bottom" 
                      id="nama" name="nama" maxlength="20" required>
                                </div>
                         </div>
                    <div class="mb-3 row">
                      <label for="nama" class="col-sm-2
                      col-form-label">NAMA</label>  
                      <label for="" class="col-sm-1 
                      col-form-label">:</label>             
                      <div class="col-sm-9" >
                      <input type="text"  class="form-control border-0 border-bottom" 
                      id="nama" name="nama" maxlength="20" required>
                                </div>
                         </div>                  
                         <div class="mb-3 row">
                      <label for="jabatan" class="col-sm-2
                      col-form-label">JABATAN</label>  
                      <label for="jabatan" class="col-sm-1 
                      col-form-label">:</label>             
                      <div class="col-sm-9" >
                   <select name="jabatan" id="jabatan"  class="form-select" required>
                    <option value="" selected>- pilih jabatan -</option>
                    <option value="ADMIN 1">ADMIN 1</option>
                    <option value="ADMIN 2">ADMIN 2</option>
                    <option value="STAFF">STAFF</option>
                   </select>
                                </div>
                         </div> 
                              
                    <div class="mb-3 row">
                      <label for="alamat" class="col-sm-2
                      col-form-label">ALAMAT</label>  
                      <label for="alamat" class="col-sm-1 
                      col-form-label">:</label>             
                      <div class="col-sm-9" >
                      <textarea name="alamat" id="alamat" cols="60" rows="5" class="form-control" placeholder="Domisili" required></textarea>
                                </div>
                         </div>
                       
                         </div>
                                <div class="col-4 text-center px-5">
                                <img src="../asset/img/pp.png" alt="gambar user" class="mb-3" width="40%">
                                <input type="file" name="image" class="form-control form-control-sm">
                                <small>Pilih foto png, jpg, atau jpeg maximal 1MB</small>
                                <small class="text-secondary"></small>
                                </div>
                                
                               </div>
                        </div>
</form>
</div>
</main>
<?php
require_once "../templat/foot.php";

?>