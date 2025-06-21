<?php 

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit();
}

require_once "../config.php";
      $id =$_GET['id'];
 
  
    mysqli_query($conn,"DELETE FROM elektronik WHERE id='$id'");

    echo 
    "<script> 
    alert('Data Barang elektronik Berhasil Dihapus');
    document.location.href ='elektronik.php';
    </script>";
  return;


?>