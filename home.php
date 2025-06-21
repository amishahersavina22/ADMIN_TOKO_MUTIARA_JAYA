<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutiara Jaya - Toko Online</title>
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
            width:102%;
            padding: 5px;
            margin-top:-20px;
            margin-left:-20px;
            color: white;
            font-size: 24px;
        }
        .search-container {
            margin: 20px auto;
            text-align: center;
        }
        .search-input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top:60px;
            gap: 90px;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .product img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }
        .product h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product p {
            font-size: 14px;
            color: #555;
        }
        .product .price {
            font-size: 18px;
            color: #d0021b;
            font-weight: bold;
        }
        .hidden {
            display: none;
        }
        @media (max-width: 768px) {
            .search-input {
                width: 80%;
            }
            .product {
                width: 90%;
            }
        }
        .button{
            position:relative;
            margin-left:15px;
            width:223px;
            z-index: 7;
            background: #d6cece;
            border-color:transparent;
            border-radius: 5px;
            cursor: pointer;
            transition :background-color 0.3s;
          }
          
          .button:hover {
            background: #BD8E8E;
          }
    </style>
</head>
<body>
    <div class="header">
        <img style="position:flex; width:100px; margin-left :-1290px; margin-top:-85px;  margin-bottom:-85px;"src="asset/img/profile.png" alt="">
        <div class="search-container">MUTIARA JAYA. COM
            <input type="text" id="search" class="search-input" placeholder="Cari produk..." onkeyup="searchProduct()">
        </div></div>  
    
    <div id="product-container" class="product-container">
    <div class="product" data-name="tv panasonic">
    <img src="a1.jpeg" alt="tv panasonic" onerror="this.src='placeholder.jpg'" style="width:180px; height:205px">
    <h3>TV PANASONIC</h3>
    <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
    <p class="price">Rp4.200.000</p>
    <div class="button">
        <a href="<?=$main_url ?>keranjang.php" 
           style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;" 
           onclick="addToCart('TV PANASONIC', 4200000, 'a1.jpeg')">Beli</a>
    </div>
</div>
<div class="product" data-name="tv LG">
    <img src="a3.jpeg" alt="tv jadul" onerror="this.src='placeholder.jpg'" style="width:180px; height:205px">
    <h3>TV LG</h3>
    <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
    <p class="price">Rp4.200.000</p>
    <div class="button">
        <a href="<?=$main_url ?>keranjang.php" 
           style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;" 
           onclick="addToCart('TV LG', 8200000, 'a3.jpeg')">Beli</a>
    </div>
 </div>
 <div class="product" data-name="tv samsung">
    <img src="a2.jpeg" alt="tv samsung" onerror="this.src='placeholder.jpg'" style="width:180px; height:205px">
    <h3>TV SAMSUNG</h3>
    <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
    <p class="price">Rp4.200.000</p>
    <div class="button">
        <a href="<?=$main_url ?>keranjang.php" 
           style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;" 
           onclick="addToCart('TV SAMSUNG', 2200000, 'a2.jpeg')">Beli</a>
    </div>
   </div>
        <div class="product" data-name="tv lg 3">
            <img src="asset/img/a4.jpeg" alt="tv lg 3" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG 3</h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp4.200.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="tv lg 24 inchi">
            <img src="asset/img/a5.jpeg" alt="tv lg 24 inchi" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG  27 inchi</h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp6.500.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="tv retro">
            <img src="asset/img/a6.jpeg" alt="tv retro" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV RETRO</h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp5.800.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="smart tv lg">
            <img src="asset/img/a7.jpeg" alt="smart tv lg" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>SMART TV LG</h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp6.200.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="tv samsung">
            <img src="asset/img/a8.jpeg" alt="tv samsung" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV SAMSUNG</h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp4.500.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="tv lg 32 inchi">
            <img src="asset/img/a2.jpeg" alt="tv lg 32 inchi" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG 32 inchi </h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp3.800.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
        </div>
        <div class="product" data-name="tv lg 32 inchi">
            <img src="asset/img/a6.jpeg" alt="tv lg 32 inchi" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG 32 inchi </h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp3.800.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
     </div>
     <div class="product" data-name="tv lg 32 inchi">
            <img src="asset/img/a7.jpeg" alt="tv lg 32 inchi" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG 32 inchi </h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp3.800.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
            </div>
         <div class="product" data-name="tv lg 32 inchi">
            <img src="asset/img/a9.jpeg" alt="tv lg 32 inchi" onerror="this.src='placeholder.jpg'"  style width="180px" height="205px">
            <h3>TV LG 32 inchi </h3>
            <p>Rating: ⭐⭐⭐⭐☆ (4/5)</p>
            <p class="price">Rp3.800.000</p>
            <div class="button"><a href="<?=$main_url ?>keranjang.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; font-size: 18px; color: white; background: #BD8E8E; padding: 7px; border-radius: 5px;">Beli</a></div>
         </div>
        
    </div>
    <footer style="position:static; background-color: #BD8E8E; margin-top:-70px; padding:24px;" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;  margin-left:580px;">Copyright &copy;TOKO MUTIARA JAYA.COM <?= date('Y')?></div>
                           </div>
                    </div>
                </footer>
    <script>
        function searchProduct() {
            let input = document.getElementById('search').value.toLowerCase();
            let products = document.querySelectorAll('.product');
            
            products.forEach(product => {
                let name = product.getAttribute('data-name');
                if (name.includes(input)) {
                    product.classList.remove('hidden');
                } else {
                    product.classList.add('hidden');
                }
            });
        }

            // Ambil data dari LocalStorage jika ada
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Tambahkan event listener ke semua tombol "Beli"
    document.querySelectorAll(".button").forEach((button) => {
        button.addEventListener("click", function () {
            let product = this.closest(".product");
            let name = product.querySelector("h3").innerText;
            let price = product.querySelector(".price").innerText.replace("Rp", "").replace(".", "").trim();

            addToCart(name, parseInt(price));
        });
    });

    function addToCart(name, price, image) {
    let item = cart.find((product) => product.name === name);
    if (item) {
        item.quantity += 1;
    } else {
        cart.push({ name, price, quantity: 1, image });
    }

    // Simpan di LocalStorage
    localStorage.setItem("cart", JSON.stringify(cart));
    console.log(localStorage.getItem('cart'));  // Cek data yang tersimpan di localStorage
    alert("LANJUTKAN PEMBELIAN ?");
}

    </script>
</body>

</html>
