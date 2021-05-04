<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 10 - 30 April 2021
Mempelajari mengenai koneksi & Insert Data
*/
?>
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_203040120");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>
