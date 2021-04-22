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

// fungsi untuk menambahkan data didalam database
function tambah($barang)
{
    $conn = koneksi();

    $Nama = htmlspecialchars($barang['Nama']);
    $Spesifikasi = htmlspecialchars($barang['Spesifikasi']);
    $Warna = htmlspecialchars($barang['Warna']);
    $Harga = htmlspecialchars($barang['Harga']);
    $Stok = htmlspecialchars($barang['Stok']);
    $Foto = htmlspecialchars($barang['Foto']);

    $query = "INSERT INTO barang
                    VALUES
                    ('', '$Nama', '$Spesifikasi', '$Warna', '$Harga', '$Stok', '$Foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($barang)
{
    $conn = koneksi();

    $id = htmlspecialchars($barang['id']);
    $Nama = htmlspecialchars($barang['Nama']);
    $Spesifikasi = htmlspecialchars($barang['Spesifikasi']);
    $Warna = htmlspecialchars($barang['Warna']);
    $Harga = htmlspecialchars($barang['Harga']);
    $Stok = htmlspecialchars($barang['Stok']);
    $Foto = htmlspecialchars($barang['Foto']);

    $query = "UPDATE barang SET
    
            Nama = '$Nama',
            Spesifikasi = '$Spesifikasi',
            Warna = '$Warna',
            Harga = '$Harga',
            Stok = '$Stok',
            Foto = '$Foto'
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM barang WHERE
            Nama LIKE '%$keyword%' OR
            Spesifikasi LIKE '%$keyword%' OR
            Warna LIKE '%$keyword%' OR
            Harga LIKE '%$keyword%' OR
            Stok LIKE '%$keyword%'
            ";
            return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}






?>