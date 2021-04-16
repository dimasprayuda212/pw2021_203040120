<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
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
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/style.css">
    <title>SmartPhone</title>
</head>
<body>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
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
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
        </table>
    </div>
</body>
</html>