<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="../css/style.css">
    <title>SmartPhone</title>
</head>
<body>
<script type="text/javascript" src="..js/materialize.min.js"></script>
    <div class="container">
<h3>Form Ubah Data SmartPhone</h3>
<form action="" method="post">
<input type="hidden" name="id" id="id" value="<?= $brg['id']; ?>">
    <ul>
        <li>
            <label for="Nama">Nama Barang :</label><br>
            <input type="text" name="Nama" id="Nama" required value="<?= $brg['Nama']; ?>">
        </li>
        <li>
            <label for="Spesifikasi">Spesifikasi :</label><br>
            <input type="text" name="Spesifikasi" id="Spesifikasi" required value="<?= $brg['Spesifikasi']; ?>">
        </li>
        <li>
            <label for="Warna">Warna :</label><br>
            <input type="text" name="Warna" id="Warna" required value="<?= $brg['Warna']; ?>">
        </li>
        <li>
            <label for="Harga">Harga :</label><br>
            <input type="text" name="Harga" id="Harga" required value="<?= $brg['Harga']; ?>">
        </li>
        <li>
            <label for="Stok">Stok Barang :</label><br>
            <input type="text" name="Stok" id="Stok" required value="<?= $brg['Stok']; ?>">
        </li>
        <li>
            <label for="Foto">Foto :</label><br>
            <input type="text" name="Foto" id="Foto" required value="<?= $brg['Foto']; ?>">
        </li>
        <br>
        <button type="submit" name="ubah" class="waves-effect waves-light red lighten-2 btn small">Ubah Data!</button>
        <button type="submit">
            <a href="../index.php" class="waves-effect waves-light red lighten-2 btn small">Kembali</a>
        </button>
    </ul>
</form>
</div>
</body>
</html>