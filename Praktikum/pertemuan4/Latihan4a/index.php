<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
<?php 
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040120");
    $result = mysqli_query($conn, "SELECT * FROM barang");
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
        <link rel="stylesheet" href="css/stylee.css">
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
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row["Nama Barang"]; ?></td>
                        <td><?= $row["Spesifikasi"]; ?></td>
                        <td><?= $row["Warna"]; ?></td>
                        <td><?= $row["Harga"]; ?></td>
                        <td><?= $row["Stok Barang"]; ?></td>
                        <td><img src="assets/image/<?= $row["Foto"]; ?>" alt=""></td>
                    </tr>
                    <?php $i++ ?>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>