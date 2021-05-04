<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 4 - 01 Maret 2021
Mempelajari mengenai Function
*/
?>
<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE hmtl>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang", "Dimas"); ?></h1>
</body>
</html>