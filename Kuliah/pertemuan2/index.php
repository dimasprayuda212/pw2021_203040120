<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 2 - 17 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php
// Standar Output
// echo, print
?>


<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// var_dump
// echo"Dimas Prayuda <br>";
//             print "Dimas Prayuda <br>";
//             print_r ("Dimas PrayudaL <br>");
//             var_dump("Dimas Prayuda");''

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

        //  Variabel dan Tipe Data
        //  Variabel
        //  tidak boleh diawali dengan angka, tapi boleh mengandung angka

                //  Operator
                //  aritmatika
                    //  + - * / %
                    //  $x = 10;
                    //  $y = 20;
                    //  echo $x * $y;

//  penggabung string / concatenation / concat
//  .
// $nama_depan = "Dimas";
// $nama_belakang = "Prayuda";
// echo $nama_depan . $nama_belakang;
// echo $nama_depan . " " . $nama_belakang;

        // Assignment
        // =, +=, -=, *=, /=, %=, .=
        // $x = 1;
        // $x += 5;
        // echo $x;

        // $nama = "Dimas";
        // $nama .= " ";
        // $nama .= "Prayuda";
        // echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 > 5);
// var_dump(5 < 7);
// var_dump(1 == "1");

        // identitas
        // ===, !==
        // var_dump(5 === 7);

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

    // contoh PHP dalam HTML
    // contoh HTML dalam PHP
    $nama = "Dimas Prayuda";

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
            <meta charset="UTF-8">
            <title>Belajar PHP</title>    
    </head>

    <body>
        <h1>Hallo, Selamat Datang <?php echo $nama; ?></h1>  
        <p><?php echo "ini adalah paragraf"; ?></p>
    </body>
    </html>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>

        <?php 
        echo "<h1>Dimas Prayuda</h1>" //contoh html didalam php
        ?>


    </body>
    </html>