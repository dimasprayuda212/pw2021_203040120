-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2021 pada 03.16
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040120`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Spesifikasi` text DEFAULT NULL,
  `Warna` varchar(20) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Stok` varchar(500) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `Nama`, `Spesifikasi`, `Warna`, `Harga`, `Stok`, `Foto`) VALUES
(1, 'Xiaomi redmi note 5', 'Ukuran Layar : 6 inci IPS LCD 1080 x 2160 pixels.\r\n                        Chipset : Snapdragon 625 with processor Octa-core.\r\n                        OS : Android OS v7.1.2 (Nougat)\r\n                        RAM: 3GB.\r\n                        Memori internal : 32GB.\r\n                        Ukuran HP : 158.5 x 75.5 x 8.1 mm.\r\n                        Berat HP : 180 gram.\r\n                        Kamera depan : 12MP.', 'Hitam', 'Rp1.500.000,00', '25', 'Note5.jpg'),
(2, 'Xiaomi redmi note 6', 'Rilis: September 2018.\r\n                        Chipset: Qualcomm SDM636 Snapdragon 636 (14 nm)\r\n                        RAM: 3-6GB.\r\n                        Memori internal: 32GB/64GB.\r\n                        Ukuran HP: 157.9 x 76.4 x 8.3 mm (6.22 x 3.01 x 0.33 in)\r\n                        Berat HP: 182 gram.\r\n                        Ukuran layar: 6,26 inci, 1080 x 2280 piksel. ', 'Pink', 'Rp1.900.000,00	', '30', 'Note6.jpeg'),
(3, 'Xiaomi redmi note 7', 'Chipset : Qualcomm SDM660 Snapdragon 660 (14 nm)\r\n                        RAM : 3 GB, 4 GB,\r\n                        Memori Internal : 32 GB dan 64 GB.\r\n                        Kamera Depan : 13 MP, f/2.0, 1.12µm.\r\n                        Kamera Belakang : 48 MP, dan 5 MP.\r\n                        Baterai : Non-Removable Li-Po 4000 mAh.', 'Hitam', 'Rp2.100.000,00	', '25', 'Note7.jpeg'),
(4, 'Xiaomi redmi note 8', 'Chipset: Snapdragon 665\r\n                        RAM: 3GB/4GB/6GB\r\n                        Memori internal: 32GB/64GB/128GB\r\n                        Ukuran HP: 158.3 x 75.3 x 8.4 mm\r\n                        Berat HP: 190 gram\r\n                        Ukuran layar: 6.3 inches, 1080 x 2340 pixels\r\n                        Kamera depan: Single camera, 13MP\r\n                        Kamera belakang: Quad camera, 48MP+8MP+2MP+2MP\r\n                        Baterai: Non-removable Li-Ion 4000 mAh', 'Grey', 'Rp2.400.000,00', '15', 'Note8.jpeg'),
(5, 'Xiaomi redmi note 9', 'Rilis: 30 April 2020.\r\n                        Berat: 199 gram (g)\r\n                        Material: Kaca depan Gorilla Glass 5, bingkai plastik.\r\n                        Jenis dan Ukuran Layar: IPS 6,53 inci (rasio layar ke bodi ~83,5%)\r\n                        Resolusi Layar: 1.080 x 2.340 piksel (~395 piksel per inci)\r\n                        Chipset: Mediatek Helio G85 (12 nm)', 'Biru', 'Rp2.700.000,00', '35', 'Note9.jpeg'),
(6, 'Vivo Y12', 'Sistem Operasi: Android 9 (Pie)\r\n                        Prosesor: Mediatek MT6762 Helio P22 (12 nm)\r\n                        GPU: PowerVR GE8320\r\n                        Ukuran Layar: 6.35 inch\r\n                        Tipe Layar: IPS LCD capacitive touchscreen, 16M colors\r\n                        Resolusi Layar: 720 x 1544 pixels (~268 ppi density)\r\n                        Kamera Belakang: Triple 13 MP,  8 MP,  2 MP.\r\n                        Kamera Depan: 8 MP, f/1.8', 'Biru', 'Rp2.000.000,00', '25', 'VivoY12.jpg'),
(7, 'Vivo Y15', 'Chipset: Mediatek MT6762 Helio P22 (12nm)\r\n                        RAM: 4GB\r\n                        Memori internal: 64GB\r\n                        Ukuran HP: 159,4 x 76,8 x 8,9 mm\r\n                        Berat HP: 190 gram\r\n                        Ukuran layar: 6,35 inci, 720 x 1544 piksel\r\n                        Kamera depan: 16MP\r\n                        Kamera belakang: Triple camera, 13MP+8MP+2MP\r\n                        Baterai: Li-Po 5000 mAh', 'Merah', 'Rp1.700.000,00', '30', 'VivoY15.jpg'),
(8, 'Vivo Y20', 'Ukuran Layar: 6,5 inci\r\n                        Chipset: Qualcomm SM4250 Snapdragon 460 (11 nm)\r\n                        OS: Android 10, Funtouch 10.5\r\n                        RAM: 4GB / 6GB\r\n                        Memori internal: 64GB\r\n                        Ukuran HP: 164.4 x 76.3 x 8.4 mm\r\n                        Berat HP: 192.3 g\r\n                        Kamera depan: 8 MP, f/1.8\r\n                        Kamera belakang wide: 13 MP, f/2.2\r\n                        Kamera belakang makro: 2 MP, f/2.4\r\n                        Kamera belakang: 2 MP, f/2.4\r\n                        Baterai: Li-Po 5000 mAh, non-removable', 'Putih', 'Rp1.500.000,00', '25', 'VivoY20.jpg'),
(9, 'Vivo Y30	', 'Chipset: Mediatek MT6765 Helio P35\r\n                        Kamera belakang: 13MP + 8MP + 2MP + 2MP\r\n                        Kamera depan: 8MP\r\n                        Ukuran layar: 6.47 Inch\r\n                        Battery: 5000mAh\r\n                        Sistem Operasi: Android 10\r\n                        Funtouch 10.0\r\n                        Layar Ultra O Screen, 6.47 inci dengan aspek rasio luas\r\n                        4 kamera belakang, 13MP (Main) + 8MP (Ultrawide) + 2MP (Macro) + 2MP (Bokeh)\r\n                        Storage besar 128 GB dengan 2 opsi RAM 4GB dan 6GB\r\n                        Baterai 5000 mAh bisa untuk isi ulang baterai gadget lain', 'Hitam', 'Rp2.500.000,00	', '30', 'VivoY30.jpg'),
(10, 'Vivo Y50', 'Chipset: Qualcomm SM6125 Snapdragon 665 (11 nm)\r\n                        RAM: 8GB\r\n                        Memori internal: 128GB\r\n                        Ukuran HP: 162 x 76.5 x 9.1 mm\r\n                        Berat HP: 197 gram\r\n                        Ukuran layar: 6.53 inci, 1080 x 2400 piksel\r\n                        Kamera depan: 16MP\r\n                        Kamera belakang: 4 kamera, 13MP+8MP+2MP+2MP\r\n                        Baterai: Li-Po 5000 mAh', 'Biru', 'Rp3.200.000,00', '40', 'VivoY50.jpg'),
(11, 'Vivo Z1 Pro', 'Chipset: Qualcomm SDM712 Snapdragon 712 (10 nm)\r\n                        RAM: 4GB/6GB\r\n                        Memori internal: 64GB/128GB\r\n                        Ukuran HP: 162.4 x 77.3 x 8.9 mm\r\n                        Berat HP: 201 gram\r\n                        Ukuran layar: 6.53 inci\r\n                        Kamera depan: 32MP\r\n                        Kamera belakang: Triple camera, 16MP+8MP+2MP\r\n                        Baterai: Li-Po 5000 mAh ', 'Biru', 'Rp3.700.000,00', '30', 'VivoZ1.jpg'),
(19, 'Vivo S1Pro', 'adawdawdawdawfawgfaw', 'Hitam', 'Rp.4.000.000', '20', 'hihihi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
