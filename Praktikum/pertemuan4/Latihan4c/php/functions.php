<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
    // Merubah Field "Nama Barang" menjadi "Nama" Alasannya agar mempermudah ketika memanggil di codingan pertemuan 5
    // Merubah Field "Stok Barang" menjadi "Stok" Alasannya agar mempermudah ketika memanggil di codingan pertemuan 5
    // Merubah Field No menjadi id Alasannya agar mempermudah kodingan karena error terus di pertemuan 5
?>
<?php
// fungsi untuk melakukan koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040120");

    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}