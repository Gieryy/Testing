<?php
session_start();
include('connection.php');

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    if (isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        header('location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Welcome</title>
</head>

<body class="background">

    <div class="topnav">
        <img class="logo" src="dukelogo2.jpg" alt="logo">
        <a href="welcome.php?logout=1" id="logout-btn" class="btn btn-danger" style="float : right" title="Kembali Ke Menu Login">Logout</a>

    </div>
    <center>
        <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Selamat Datang</h2>

        <table class="table">
            <thead>
                <tr>
                    <td colspan="4">Informasi Akun</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="4">
                        <img src="dahyun.jpg" alt="akun" width="333rem" height="300rem">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $_SESSION[('user_name')] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $_SESSION[('user_email')] ?></td>
                </tr>
                <tr>
                    <td>User Phone</td>
                    <td>:</td>
                    <td><?php echo $_SESSION[('user_phone')] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="footer">
            <p title="ISB - 202 PRAKTIKUM"> 162021051 - Christian Giery</p>
        </div>
    </center>
</body>
</html>