<?php 

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit();
}

require_once "../config.php";
      $id =$_GET['id'];
 
  
    mysqli_query($conn,"DELETE FROM status_pesanan WHERE id='$id'");

    echo 
    "<script> 
    alert('Status Pelanggan  Berhasil Dihapus');
    document.location.href ='status.php';
    </script>";
  return;


?>