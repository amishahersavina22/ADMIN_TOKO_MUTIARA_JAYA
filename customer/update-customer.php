<?php

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $cabang = $_POST['cabang'];
    $alamat = trim(htmlspecialchars($_POST['alamat']));
    $visimisi = trim(htmlspecialchars($_POST['visimisi']));
  

    //update data
mysqli_query($conn,"UPDATE customer SET 
                            name ='$name',
                            email='$email', 
                            cabang='$cabang', 
                            alamat='$alamat', 
                            visimisi='$visimisi'
                            WHERE id=$id
                            ");
    header("location:profile.php?msg=updated");
    return;

   }

?>