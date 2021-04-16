<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
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
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/style.css">
    <title>SmartPhone</title>
</head>
<body>
<script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
    <h1 class="centered black-text">D3 Phone</h1>
    <div class="add">
        <a href="tambah.php" class="waves-effect waves-light teal btn-small">Tambah Data</a>
    </div>
    <table class="centered highlight - black-text orange lighten-1">
                <tr class="z-depth-5 blue-grey lighten-2 black-text">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                    <th>Detail</th>
                    <th>Opsi</th>
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
                        <td><img src="../assets/image/<?= $brg["Foto"]; ?>" alt=""></td>
                        <td>
                        <p class="Nama">
                   <a href="../php/detaill.php?id=<?= $brg['id']; ?>">
                   <?= $brg["Nama"]; ?>
                        </td>
                        <td>
                            <a href="" class="waves-effect waves-light green lighten-2 btn-small">Ubah</a>
                            <a href="hapus.php?id=<?= $brg['id']; ?>" class="waves-effect waves-light pink darken-3 btn-small" onclick="return confirm('Hapus Data??')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
    </div>
</body>
</html>