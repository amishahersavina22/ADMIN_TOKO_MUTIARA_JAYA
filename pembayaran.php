<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color:#fef8e3;
        }
        .header {
            text-align: center;
            background-color: #BD8E8E;
            width:100%;
            padding: 20px;
            margin-top:-20px;
            margin-left:-20px;
            color: white;
            font-size: 24px;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .pay-btn {
            width: 100%;
            background: #BD8E8E;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">PESANAN SAYA</div>
    <div class="container">
        <h2>Detail Pembelian</h2>
        <div id="order-list"></div>
        <form id="payment-form" method="POST" action="transaksi.php">
    <h3>Pilih Metode Pembayaran</h3>
    <div class="form-group">
        <label for="bank">Bank:</label>
        <select id="bank" name="bank" required>
            <option value="BCA">BCA</option>
            <option value="Mandiri">Mandiri</option>
            <option value="BRI">BRI</option>
            <option value="BNI">BNI</option>
        </select>
    </div>

    <div class="total">
        Total Pembayaran: Rp <span id="total-price">0</span>
    </div>

    <button class="pay-btn" type="submit">Bayar Sekarang</button>
</form>


    </div>
  <footer style="position:static; background-color: #BD8E8E; margin-top:290px; margin-left:-19px; padding:22px 12px; width:101%;" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;  margin-left:580px;">Copyright &copy;TOKO MUTIARA JAYA.COM <?= date('Y')?></div>
                           </div>
                    </div>
                </footer>
                <script>
                let orderData = JSON.parse(localStorage.getItem("checkout")) || [];
let totalPrice = 0; // Deklarasi total harga

function renderOrder() {
    let orderList = document.getElementById("order-list"); // Gunakan id yang benar
    orderList.innerHTML = "";

    if (orderData.length === 0) {
        orderList.innerHTML = "<p>Tidak ada barang yang dipesan.</p>";
        return;
    }

    orderData.forEach(item => {
        let div = document.createElement("div");
        div.classList.add("item");
        div.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <span>${item.name} - ${item.quantity} x Rp${item.price.toLocaleString()}</span>
        `;
        orderList.appendChild(div);
        totalPrice += item.price * item.quantity;  // Menghitung total harga
    });

    // Update total harga di tampilan
    document.getElementById("total-price").textContent = totalPrice.toLocaleString();
}

renderOrder();
</script>
</body>
</html>
