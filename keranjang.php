<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
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
        .cart-container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .cart-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }
        .cart-item button {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: auto;
        }
        .checkout-btn {
            width: 100%;
            background: #BD8E8E;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">Pembelian Produk</div>
    <div class="cart-container">
        <h2>Daftar Belanja</h2>
        <div id="cart-list"></div>
        <h2>Data Pembeli</h2>
        <form action="keranjangproses.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Pembeli:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" required>
            </div>
            <div class="form-group">
            <label for="pengiriman">metode pengiriman:</label>
            <select name="pengiriman" id="pengiriman" class="form-select border-0 border-bottom ">
                        <option value="JNE">JNE</option>
                        <option value="EXPRESS">EXPRESS</option>
                        <option value="JNT">JNT</option>
                      </select>
            </div>
        <button class="checkout-btn" onclick="checkout()">Checkout</button>
    </div>
    <footer style="position:static; background-color: #BD8E8E; margin-top:56px; margin-left:-18px; padding:20px 10px; width:101%;" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;  margin-left:580px;">Copyright &copy;TOKO MUTIARA JAYA.COM <?= date('Y')?></div>
                           </div>
                    </div>
                </footer>
    <script>
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        function renderCart() {
    let cartList = document.getElementById("cart-list");
    cartList.innerHTML = "";

    if (cart.length === 0) {
        cartList.innerHTML = "<p>Keranjang kosong!</p>";
        return;
    }

    cart.forEach((item, index) => {
    let div = document.createElement("div");
    div.classList.add("cart-item");
    div.innerHTML = `
        <img src="${item.image}" alt="${item.name}" style="width:60px; height:60px;">
        <span>${item.name} - ${item.quantity} x Rp${item.price.toLocaleString()}</span>
        <button onclick="removeFromCart(${index})">Hapus</button>
    `;
    cartList.appendChild(div);
});

}


        function removeFromCart(index) {
            cart.splice(index, 1);
            localStorage.getItem("cart", JSON.stringify(cart));
            renderCart();
        }

        function checkout() {
    if (cart.length === 0) {
        alert("Keranjang kosong!");
        return;
    }

    // Simpan data pesanan ke LocalStorage agar bisa digunakan di halaman pembayaran
    localStorage.setItem("checkout", JSON.stringify(cart)); // Gunakan setItem bukan getItem
    
    // // Hapus data keranjang setelah checkout
    // localStorage.removeItem("cart");
    // cart = [];
    
    // Arahkan ke halaman pembayaran
    window.location.href = "pembayaran.php";
}


        renderCart();
    </script>
</body>
</html>
