<?php
// Dimas Prayuda
// 203040120
// Jum'at 13.00-14.00
// https://github.com/dimasprayuda212/pw2021_203040120
// Tugas Praktikum PW
?>
<?php
require 'php/functions.php';

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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
    <title>D3 Store</title>
    <style>
        nav.background {
            background: linear-gradient(45deg, black, red, black);
        }

        body {
            background: linear-gradient(45deg, black, red, black);
        }

        .brand-logo {
            font-family: shrikhand;
            color: #ff5252 !important;
        }

        .slider h3 {
            padding-top: 180px;
            text-shadow: 0px 0px 50px rgba(0, 0, 0, 1);
            font-family: Lobster;
        }
    </style>
</head>

<body id="home">
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- navbar -->
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
                                <input type="text" name="keyword" size="20" autofocus placeholder="Cari..." autocomplete="off" class="keyword">
                                <button type="submit" name="cari" class="tombol-cari">Cari!</button>
                            </form>
                        </li>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#produk">Produk</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li>
                            <div class="login">
                                <button type="submit" name="submit" class="btn  waves-effect waves-dark"><a href="php/login.php">LOGIN</a></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li>
            <div class="login">
                <button type="submit" name="submit" class="btn  waves-effect waves-dark"><a href="php/login.php" style="color: white;">LOGIN</a></button>
            </div>
        </li>
        <li>
            <form action="" method="GET">
                <input type="text" name="keyword" size="20" placeholder="Cari..." autocomplate="off" autofocus>
                <input type="hidden" name="cari">
            </form>
        </li>
        <li>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#contact">Contact</a>
        </li>
    </ul>

    <!-- slider -->
    <div class="slider">
        <div class="cotainer">
            <ul class="slides">
                <li>
                    <img src="assets/slider/son.jpg">
                    <div class="caption center-align">
                        <h3 class="light red-text text-accent-2">"Kegagalan itu urusan belakangan. Yang pertama adalah bagaimana kamu mencoba, yakin dengan pilihan bisnsimu, take action, jangan berlama-lama memikirkan sesuatu yang tidak akan pernah terjadi."</h3>
                    </div>
                </li>
                <li>
                    <img src="assets/slider/dan.jpg">
                    <div class="caption right-align">
                        <h3 class="light red-text text-accent-2">"Dalam bisnis, tidak ada kata kegagalan, Yang sesungguhnya merasa gagal adalah ketika kamu sudah berhenti berusaha dan memulai lagi."</h3>
                    </div>
                </li>
                <li>
                    <img src="assets/slider/3.png">
                    <div class="caption left-align">
                        <h3 class="light red-text text-accent-2">“Semua impian mu bisa terwujud menjadi kenyataan, jika kamu memiliki keberanian untuk mengejarnya.”-Walt Disney</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--produk-->
    <h3 class="center black-text text-lighten-3" id="produk">Produk</h3>

    <div class="container">
        <ul class="collection">
            <?php foreach ($barang as $brg) : ?>
                <li class="collection-item avatar">
                    <img src="assets/imagee/<?= $brg['Foto']; ?>" alt="<?= $brg['Nama']; ?>" class="circle">
                    <span class="title"></span>
                    <p class="nama">
                        <a href="php/detaill.php?id=<?= $brg['id']; ?>"><?= $brg['Nama']; ?></a>
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>



    <!-- contact -->
    <div class="container" id="contact">
        <h3 class="center black-text text-lighten-3"> CONTACT</h3>
        <br>
        <div class="row">
            <div class="col m12 s6">
                <div class="card-panel grey darken-3 center white-text">
                    <i class="material-icons"></i>
                    <h5>Contact</h5>
                    <p>Jika Anda ingin menghubungi saya, di Media Sosial.</p>
                    <p>instagram : @dimspryda_</p>
                    <p>facebook : Dimass Prayuda</p>
                    <img src="../tubes_203040120/assets/img/ig.png " width="50px">
                    <img src="../tubes_203040120/assets/img/fb.png " width="50px">
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <footer style="padding: 5px; height: 30px; color: white; text-align: center;">
        <p class="flow-text grey darken-3">&copy; 2021 D3 Store</p>
    </footer>


    <script src="js/script.js"></script>








    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            width: 300
        });
    </script>
</body>

</html>