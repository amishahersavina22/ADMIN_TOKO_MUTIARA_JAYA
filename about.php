<?php

require_once "config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <title>reader.com</title>   
 </head>
 
    <style>
    .body1{
    margin:0px;
    padding:0px;
    height:1610px;
    width:100%;
    background-color:#fef8e3;
    }
    .container{
    position:relative;
    padding:10px;
    z-index: 1;
    height:840px;
    background-image: url(img/top.avif);
    background-repeat: no-repeat;
    background-size: 1540px;
    background-color:#BD8E8E;
    }
    .hea{
        position: relative;
        background-color:#fef8e3;
        width: 1518px;
        margin-top:-10px;
        margin-left:-10px;
    }
    #navbar-text{
    position: relative;
    margin-top:0px;
    margin-left: 130px;;
    font-size:45px;
   
    }
    #nav-navi a{
    display:inline-block;
    font-size:20px;
    padding:0px;
    margin: -10px -890px -00px 950px;
    text-decoration:none;
    color:#BD8E8E;
    font-family: "DM Serif Text", serif;
    }
    .nav-navi a:hover{
      color: #f1c40f;
    }  
    p .caption{
        margin-left: -400px ;
    }
    .imgleft2{
    position:relative; 
    margin-top:30px;
    margin-left:365px; 
    width:800px;
    height:500px ;
    overflow: hidden;
   }
   .imgleft2 img{
      position:absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      background-size: cover;
      transition: 0.9s;
      border-radius: 50px;
   }
   .imgleft2:hover img:nth-child(2){
      transform: translateX(-50%) scale(2);
      opacity:0;
   }
   /* frame foto*/
   .wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -50px;
    width:40%;
    margin-left:470px;
    padding: 30px;
    position:sticky;
    display: inline-block;
    display:grid;
    grid-template-columns: 420px 420px 420px ;
     }   
     .image img{
    background-color: #efefef;
    padding:10px 10px;
    margin:20px 10px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    width:300px;
     }
     /* shadow*/
     .image{
     width: 380px;
     position: relative;
     }
     img{
      display: block;  
      margin: auto;
    }
      .content{
        width: 60%;
        height: 90%;
        position:absolute;
        top: 13px;
        left: 23px;
        background: rgba(0,0,0,0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        transition: 0.6s;
        border-radius: 30px;
      }
      /* .content:hover{
        opacity:1;
      } */
      .content h3{
        font-size: 25px;
        font-weight: bold;
        color: #fff;
        margin-left: 5px;
      }
      .content p{
         color:white;
      }
      .content >*{
        transform: translateY(35px);
        transition: transform 0.6s;
      }
      .content:hover >*{
        transform:translateY(0px);
      }
    .pp p {
      position:relative;
      margin:54px auto;
      font-size: 40px;
      font-family: Raleway-italic;
      }
      h5{
        margin-left:700px; 
        font-size:30px;     
      }
      .cbg{
        margin-top:240px;
      }
      h2{
        text-align:center;
      }
      .image2{
        width:400px;
        height:400px;
        margin-left:0px;
      }
 </style>

 <body class="body1"> 
<div class="container">
    <div class="hea">
    <div id="navbar-text">MUTIARA <span>JAYA</span>.</div>
        <div id="nav-navi">
           <a href="<?=$main_url ?>about.php">ABOUT US</a>
           <a href="<?=$main_url ?>home.php">HOME</a>
           <a href="<?=$main_url ?>keranjang.php">CART</a>
           <a href="<?=$main_url ?>testimony.php">TESTIMONY</a>
        </div>
    </div>
        <p class="caption">selamat datang di toko kami !</p>
         <div class="imgleft2">
            <img src="asset/img/a11.jpg"  alt="">
         </div>         
</div>
  <div class="pp"><p>PRODUK BERKUALITAS TINGGI </p><h5>see more</h5></div>  
     <div class="wrapper">
      <div class="image" ><img src="asset/img/ss.jpeg" alt="" style width="180px" height="205px"><div class="content"><h3>GADIS KRETEK</h3><p>2022</p></div></div>
      <div class="image" ><img src="asset/img/hh.jpeg" alt="" style width="180px" height="205px"><div class="content"><h3>GALAKSI</h3><p>2020</p></div></div>
      <div class="image" ><img src="asset/img/ggg.jpeg" alt="" style width="180px" height="205px"><div class="content"><h3>KKN DESA PENARI</h3><p>2019</p></div></div>
     </div>
</div>   
<section class="cbg">
<h2 > TOKO CABANG</h2>
<div class="wrapper">
      <div><img src="asset/img/a1.jpeg" alt="" class="image2"><div class="content"><h3>GADIS KRETEK</h3><p>2022</p></div></div>     
    </div><br>
    <div class="wrapper">
      <div><img src="asset/img/a1.jpeg" alt="" class="image2"><div class="content"><h3>GADIS KRETEK</h3><p>2022</p></div></div>     
    </div>
</section>

 </body>
 <footer style="position:static; background-color: #BD8E8E; margin-top:-70px; padding:24px;" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;  margin-left:580px;">Copyright &copy;TOKO MUTIARA JAYA.COM <?= date('Y')?></div>
                           </div>
                    </div>
                </footer>
</html>
