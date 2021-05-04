<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 5 - 09 Maret 2021
Mempelajari mengenai Array
*/
?>
<?php
$mahasiswa = [
    ["Dimas Prayuda", "203040120", "Teknik Informatika", "dimassprayuda212@gmail.com"],
    ["Dimas Prayoga", "203040121", "Teknik Informatika", "dimassprayoga212@gmail.com"],
    ["Prasetyo", "203040122", "Teknik Informatika", "Prasetyo213@gmail.com"]
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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    



</body>
</html>