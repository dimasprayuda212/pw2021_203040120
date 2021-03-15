<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 6 - 15 Maret 2021
Mempelajari mengenai Array Associative
*/
?>
<?php
// $mahasiswa = [
// ["Dimas Prayuda", "203040120", "dimassprayuda212@gmail.com", "Teknik Informatika"],
// ["Dimas Prayoga", "203040130", "dimassprayoga222@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>







</body>
</html>