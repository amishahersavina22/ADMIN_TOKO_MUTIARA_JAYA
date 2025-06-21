<?php 

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit();
}

require_once "../config.php";
      $id =$_GET['id'];
 
  
    mysqli_query($conn,"DELETE FROM mebel WHERE id='$id'");

    echo 
    "<script> 
    alert('Data Barang Mebel Berhasil Dihapus');
    document.location.href ='mebel.php';
    </script>";
  return;


?>