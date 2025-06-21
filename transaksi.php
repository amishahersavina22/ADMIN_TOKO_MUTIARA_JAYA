<?php
require_once "config.php";

// Cek jika form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $bank = $_POST['bank'];
    $totalPembayaran = $_POST['total_pembayaran'];
    
    // Ambil data pesanan yang disimpan di localStorage
    $orderData = json_decode($_POST['order_data'], true);

    // Periksa apakah ada data order
    if (!empty($orderData)) {
        // Mulai transaksi
        $conn->begin_transaction();
        
        try {
            // Masukkan data pembelian utama
            $stmt = $conn->prepare("INSERT INTO pembelian (metode_pembayaran, total_pembayaran) VALUES (?, ?)");
            $stmt->bind_param("ss", $bank, $totalPembayaran);
            $stmt->execute();
            $pembelianId = $stmt->insert_id; // Ambil ID pembelian yang baru dimasukkan

            // Masukkan data produk yang dibeli
            foreach ($orderData as $item) {
                $produkId = $item['id'];
                $jumlah = $item['quantity'];
                $harga = $item['price'];

                $stmt = $conn->prepare("INSERT INTO pesanan (pembelian_id, produk_id, jumlah, harga) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("iiii", $pembelianId, $produkId, $jumlah, $harga);
                $stmt->execute();
            }

            // Commit transaksi jika berhasil
            $conn->commit();

            // Redirect ke halaman sukses atau konfirmasi pembayaran
            header("Location: sukses.php?status=success");
            exit();
        } catch (Exception $e) {
            // Rollback jika terjadi error
            $conn->rollback();
            echo "Terjadi kesalahan: " . $e->getMessage();
        }
    } else {
        echo "Tidak ada produk yang dibeli.";
    }
}
?>

