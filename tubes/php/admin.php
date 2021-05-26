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

    // menghubungkan dengan file php lainnya
    require 'functions.php';

    // melakukan query
    $barang = query("SELECT * FROM barang");

    if (isset($_GET["cari"])) {
        $barang = cari($_GET["keyword"]);
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
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
        <!-- css style -->
        <link rel="stylesheet" href="../css/style.css">
        <title>D3 Store</title>
        <style>
            nav.background {
                background: linear-gradient(45deg, black, red, black);
            }

            body {
                background-image: url(../assets/img/nil.jpg);
            }

            .brand-logo {
                font-family: shrikhand;
                color: black !important;
            }

            img {
                width: 50%;
            }
        </style>
    </head>

    <body>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <div class="navbar-fixed">
            <nav class="background">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#home" class="brand-logo">D3 Store</a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <i class="large material-icons">search</i>
                            </li>
                            <li>
                                <form action="" method="GET">
                                    <input type="text" name="keyword" size="30" autofocus placeholder="Cari..." autocomplete="off" class="keyword">
                                    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
                                </form>
                            </li>
                            <li>
                                <div class="add">
                                    <a href="tambah.php" class="waves-effect waves-light teal btn-small">Tambah Data</a>
                                </div>
                            </li>
                            <li>
                                <div class="logout">
                                    <a href="logout.php" class="waves-effect waves-light pink btn-small">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="container my-container">
            <table class="centered highlight - black-text red darken-3">
                <tr class="z-depth-5 blue-grey darken-2 black-text">
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
                <?php if (empty($barang)) : ?>
                    <tr>
                        <td colspan="7">
                            <h1>Data tidak ditemukan</h1>
                        </td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1 ?>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $brg["Nama"]; ?></td>
                            <td><?= $brg["Spesifikasi"]; ?></td>
                            <td><?= $brg["Warna"]; ?></td>
                            <td><?= $brg["Harga"]; ?></td>
                            <td><?= $brg["Stok"]; ?></td>
                            <td><img src="../assets/imagee/<?= $brg["Foto"]; ?>" alt=""></td>
                            <td>
                                <p class="Nama">
                                    <a href="../php/detailll.php?id=<?= $brg['id']; ?>">
                                        <?= $brg["Nama"]; ?>
                            </td>
                            <td>
                                <div class="update"><a href="ubah.php?id=<?= $brg['id']; ?>" class="waves-effect waves-light green lighten-2 btn-small">Ubah</a></div>
                                <div class="delete"><a href="hapus.php?id=<?= $brg['id']; ?>" class="waves-effect waves-light pink darken-3 btn-small" onclick="return confirm('Hapus Data??')">Hapus</a></div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
        </div>

        <script src="../js/script.js"></script>

    </body>

    </html>