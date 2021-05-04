<?php
/*
Dimas Prayuda
203040120
https://github.com/dimasprayuda212/pw2021_203040120
Pertemuan 11 - 04 Mei 2021
Mempelajari mengenai Delete, Update & Searching Data
*/
?>
<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>";
} else {
    echo "data gagal ditambahkan!";
}



?>