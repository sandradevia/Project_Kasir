<?php
error_reporting(0);
session_start();
include "configuration/config_etc.php";
include "configuration/config_include.php";
include 'configuration/config_connect.php';

$queryback = "SELECT * FROM data";
$resultback = mysqli_query($conn, $queryback);
$rowback = mysqli_fetch_assoc($resultback);
$footer = $rowback['nama'];
$bg = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM backset"));
$bgi = $bg['loginbg'];
connect();
timing();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="page/images/icons/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="page/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="page/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="page/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="page/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="page/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="page/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="page/css/util.css">
    <link rel="stylesheet" type="text/css" href="page/css/main.css">
    <link rel="stylesheet" href="page/css/styles.css">
    <title>Login Page</title>
</head>

<body>
        <form action="op.php" method="post">
            <div class="container">
                <section class="login">
                    <div class="login-left">
                        <h2>KASIRKU</h2>
                        <img src="dist/img/login.png" alt="Logo" class="centered-image">
                    </div>
                    <div class="login-right">
                        <img src="dist/img/logo.jpg" alt="Circle Logo" class="centered-image">
                        <div class="login-menu">
                            <h3>WELCOME</h3>
                        </div>

                        <div class="form-floating" data-validate="Masukan username">
                            <input class="form-control" type="text" id="floatingInput"  name="txtuser" placeholder="username">
                            <label for="floatingInput">Username</label>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="form-floating" data-validate="Masukan password">
                            <input class="form-control" type="password" id="floatingPassword"  name="txtpass" placeholder="password">
                            <label for="floatingPassword">Password</label>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-nowrap" style="width: 8rem;">
                            <strong>
                                &nbsp;&nbsp;&nbsp;
                            </strong>
                        </div>

                        <span class="login100-form-title p-b-37">
                            <p class="login-box-msg"> Point of Sales<br />Copyright © 2023</p>
                        </span>

                    </div>
                </section>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
