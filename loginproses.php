<?php
require_once "config.php"; // Pastikan koneksi database sudah benar

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hash password sebelum disimpan
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $query = "INSERT INTO data_reg  VALUES (null,'$username', '$password_hashed')";
    if (mysqli_query($conn, $query)) {

        echo "<script>alert('Registrasi berhasil! Silakan login.');
         window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal, coba lagi!'); 
        window.location.href='home.php';</script>";
    }
}
?>
