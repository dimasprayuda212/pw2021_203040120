<?php
require 'php/functions.php';
$barang = query("SELECT * FROM barang")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
    <title>SmartPhone</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered black-text">D3 Phone</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="orange lighten-1">
            <tr class="blue-grey lighten-2">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Spesifikasi</th>
                <th>Warna</th>
                <th>Harga</th>
                <th>Stok Barang</th>
                <th>Foto</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($barang as $brg) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $brg["Nama"]; ?></td>
                    <td><?= $brg["Spesifikasi"]; ?></td>
                    <td><?= $brg["Warna"]; ?></td>
                    <td><?= $brg["Harga"]; ?></td>
                    <td><?= $brg["Stok"]; ?></td>
                    <td><img src="assets/image/<?= $brg["Foto"]; ?>" alt=""></td>
                    <td>
                        <p class="Nama">
                            <a href="php/detaill.php?id=<?= $brg['id']; ?>">
                                <?= $brg["Nama"]; ?>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
    </div>
</body>

</html>





<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/Note6.jpeg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=2">
                    Xiaomi redmi note 6 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/Note7.jpeg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=3">
                    Xiaomi redmi note 7 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/Note8.jpeg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=4">
                    Xiaomi redmi note 8 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/Note9.jpeg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=5">
                    Xiaomi redmi note 9 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoY12.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=6">
                    Vivo Y12 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoY15.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=7">
                    Vivo Y15 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoY20.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=8">
                    Vivo Y20 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoY30.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=9">
                    Vivo Y30 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoY50.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=10">
                    Vivo Y50 </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>
<div class="container">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="assets/image/VivoZ1.jpg" alt="" class="circle">
            <span class="title"></span>
            <p class="nama">
                <a href="php/detaill.php?id=11">
                    Vivo Z1 Pro </a>
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>
</div>