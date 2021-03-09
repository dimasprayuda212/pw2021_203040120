<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
<?php 
    $jawabanIsset = "Isset adalah = digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum.<br><br>";
    $jawabanEmpty = "Empty adalah = merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong.";
    //Sumber : https://hot.liputan6.com/read/4061894/fungsi-isset-pada-php-untuk-pemrograman-penting-dalam-coding#:~:text=Fungsi%20isset%20pada%20PHP%20adalah%20Fungsi%20isset%20()%20digunakan%20untuk,variabel%20pengujian%20berisi%20nilai%20NULL./
    //Sumber : http://belajarmembikinwebsite.blogspot.com/2013/11/fungsi-empty-dan-trim-pada-php.html

    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <!-- Dimas Prayuda -->
    <style>
    .style{
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
</body>
</html>