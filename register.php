<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link rel="stylesheet" href="../asset/sb-admin/css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        #bol{
            background-image: url("../asset/img/p2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body id="bol">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg rounded-lg mt-5" style="border: 2px solid #BD8E8E;">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">🔗🔗 REGISTER 🔗🔗</h3></div>
                                <div class="card-body">
                                    <form action="loginproses.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" type="text" placeholder="Enter username" style="border: 2px solid #BD8E8E;" required />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Enter password" style="border: 2px solid #BD8E8E;" required />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" id="login" name="login"  style="margin:10px auto; background-color:#c48989; border:none; padding:7px 20px; border-radius:20px; ">REGISTER</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <footer style="background-color: #BD8E8E; margin-top:-70px; padding:24px;" >
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div style="color:white;  margin-left:580px;">Copyright &copy;TOKO MUTIARA JAYA.COM <?= date('Y')?></div>
                           </div>
                    </div>
                </footer>
</body>
</html>
