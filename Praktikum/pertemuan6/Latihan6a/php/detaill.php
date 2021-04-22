<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>

<?php 
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id']) ) {
    header("Location: ../index.php");
    exit;
}
require '../php/functions.php';

// mengambil id dari url 
$id = $_GET['id'];


//melakukan query dengan parameter id yang diambil dari url
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

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
        <link rel="stylesheet" href="css/style.css">
    <title>SmartPhone</title>
</head>
<body>
    <div class="container">
    <div class="gambar">
    <img src="../assets/image/<?= $brg["Foto"]; ?>" alt="">
    </div>
    <div class="keterangan">
    <p><?= $brg["Nama"]; ?></p>
    <p><?= $brg["Spesifikasi"]; ?></p>
    <p><?= $brg["Warna"]; ?></p>
    <p><?= $brg["Harga"]; ?></p>
    <p><?= $brg["Stok"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>