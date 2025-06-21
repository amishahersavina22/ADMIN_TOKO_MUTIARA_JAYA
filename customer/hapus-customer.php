<?php 

session_start();

if(isset($_SESSION['ssLogin'])){
    header("Location:../auth/login.php");
exit();
}

require_once "../config.php";
      $id =$_GET['id'];
 
  
    mysqli_query($conn,"DELETE FROM customer WHERE id='$id'");

    echo 
    "<script> 
    alert('Data pelanggan berhasil dihapus');
    document.location.href ='customer.php';
    </script>";
  return;


?>