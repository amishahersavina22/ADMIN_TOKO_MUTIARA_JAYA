<?php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart = json_decode($_POST["cart"], true);

    foreach ($cart as $item) {
        $nama = $item["name"];
        $jumlah = $item["quantity"];
        $total_harga = $item["price"] * $jumlah;

        $sql = "INSERT INTO pesanan (id_pesanan,nama_pelanggan, produk, jumlah, total_harga) 
                VALUES (null,'Pelanggan', '$nama', '$jumlah', '$total_harga')";

        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    echo "Pesanan berhasil disimpan!";
}

$conn->close();
?>
