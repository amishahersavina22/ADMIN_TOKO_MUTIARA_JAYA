<?php

require_once "../config.php";

if (isset($_POST['simpan'])) {
 $username = trim(htmlspecialchars($_POST['username']));
 $nama = trim(htmlspecialchars($_POST['nama']));
 $jabatan = $_POST['jabatan'];
 $alamat = trim(htmlspecialchars($_POST['alamat']));
 $gambar = trim(htmlspecialchars($_FILES['image']['name']));
 $password = 1234;
 $pass =password_hash($password, PASSWORD_DEFAULT);

 $cekUsername = mysqli_query($conn, "SELECT * FROM user_login WHERE username ='$username'");
if (mysqli_num_rows($cekUsername) > 0){
    header("location:add-user.php?msg-cancel");
    return;
}

if ($gambar !=null){
    $url ='add-user.php';
    $gambar = uploadimg($url);
} else{
    $gambar = 'pp.png';
}

mysqli_query($conn,"INSERT INTO user_login VALUES(null,'$username','$pass','$nama','$jabatan','$alamat','$gambar')");

header("location:add-user.php?msg-added");
return;
}
?>