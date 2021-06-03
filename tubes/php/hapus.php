<?php
// Dimas Prayuda
// 203040120
// Jum'at 13.00-14.00
// https://github.com/dimasprayuda212/pw2021_203040120
// Tugas Besar Praktikum

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!!');
            document.location.href = 'admin.php';
            </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus!!');
            document.location.href = 'admin.php';
            </script>";
}
