<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'toko_mutiara_jaya');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// apache, root, '', 
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 //else{
  //   echo"koneksi dengan db ".DB_NAME." berhasil";
 //}
  $main_url ="http://localhost/UAS/";

  function uploadimg($url){
    $namafile =$_FILES['image']['name'];
    $ukuran =$_FILES ['image']['size']; 
    $error =$_FILES['image']['error'];
    $tmp =$_FILES ['image']['tmp_name']; 

    //cek file yang di upload
    $validExtension =['jpg','jpeg','png'];
    $fileExtension =explode ('.', $namafile);
    $fileExtension =strtolower(end($fileExtension));
    if (!in_array($fileExtension,$validExtension)){
      header ("location:" .$url.'?msg-notimage');
      die;
    }

    if ($ukuran >1000000){
      header("location:" .$url. '?msg-oversize');
      die;
    }

    $namafilebaru =rand(10,1000) .'-'.$namafile;

    move_uploaded_file($tmp,"..asset/img/".$namafilebaru);
    return $namafilebaru;
}
?>