<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 7 - 21 Maret 2021
Mempelajari mengenai GET & POST
*/
?>
<?php
// $_GET
$mahasiswa = [
    [
        "nrp" => "203040120",
        "nama" => "Dimas Prayuda", 
        "email" => "dimassprayuda212@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.png"
    ],
    [
        "nama" => "Dimas Prayoga", 
        "nrp" => "203040130",
        "email" => "dimassprayoga222@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "6.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
<?php endforeach; ?>
</ul>
    
</body>
</html>