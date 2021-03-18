<?php 
    // Dimas Prayuda
    // 203040120
    // Jum'at 13.00-14.00
    // https://github.com/dimasprayuda212/pw2021_203040120
    // Tugas Praktikum PW
?>
<?php
$barang = [
    [
        "nama" => "Xiaomi redmi note 5",
        "spesifikasi" => "Ukuran Layar : 6 inci IPS LCD 1080 x 2160 pixels.
                        Chipset : Snapdragon 625 with processor Octa-core.
                        OS : Android OS v7.1.2 (Nougat)
                        RAM: 3GB.
                        Memori internal : 32GB.
                        Ukuran HP : 158.5 x 75.5 x 8.1 mm.
                        Berat HP : 180 gram.
                        Kamera depan : 12MP.",
        "warna" => "Hitam",
        "harga" => 1500000,
        "stok" => 25,
        "foto" => "Note5.jpg"
    ],
    [
        "nama" => "Xiaomi redmi note 6",
        "spesifikasi" => "Rilis: September 2018.
                        Chipset: Qualcomm SDM636 Snapdragon 636 (14 nm)
                        RAM: 3-6GB.
                        Memori internal: 32GB/64GB.
                        Ukuran HP: 157.9 x 76.4 x 8.3 mm (6.22 x 3.01 x 0.33 in)
                        Berat HP: 182 gram.
                        Ukuran layar: 6,26 inci, 1080 x 2280 piksel.",
        "warna" => "Pink",
        "harga" => 1900000,
        "stok" => 30,
        "foto" => "Note6.jpeg"
    ],
    [
        "nama" => "Xiaomi redmi note 7",
        "spesifikasi" => "Chipset : Qualcomm SDM660 Snapdragon 660 (14 nm)
                        RAM : 3 GB, 4 GB,
                        Memori Internal : 32 GB dan 64 GB.
                        Kamera Depan : 13 MP, f/2.0, 1.12µm.
                        Kamera Belakang : 48 MP, dan 5 MP.
                        Baterai : Non-Removable Li-Po 4000 mAh.",
        "warna" => "Hitam",
        "harga" => 2100000,
        "stok" => 25,
        "foto" => "Note7.jpeg"
    ],
    [
        "nama" => "Xiaomi redmi note 8",
        "spesifikasi" => "Chipset: Snapdragon 665
                        RAM: 3GB/4GB/6GB
                        Memori internal: 32GB/64GB/128GB
                        Ukuran HP: 158.3 x 75.3 x 8.4 mm
                        Berat HP: 190 gram
                        Ukuran layar: 6.3 inches, 1080 x 2340 pixels
                        Kamera depan: Single camera, 13MP
                        Kamera belakang: Quad camera, 48MP+8MP+2MP+2MP
                        Baterai: Non-removable Li-Ion 4000 mAh",
        "warna" => "Grey",
        "harga" => 2400000,
        "stok" => 15,
        "foto" => "Note8.jpeg"
    ],
    [
        "nama" => "Xiaomi redmi note 9",
        "spesifikasi" => "Rilis: 30 April 2020.
                        Berat: 199 gram (g)
                        Material: Kaca depan Gorilla Glass 5, bingkai plastik.
                        Jenis dan Ukuran Layar: IPS 6,53 inci (rasio layar ke bodi ~83,5%)
                        Resolusi Layar: 1.080 x 2.340 piksel (~395 piksel per inci)
                        Chipset: Mediatek Helio G85 (12 nm)",
        "warna" => "Biru",
        "harga" => 2700000,
        "stok" => 35,
        "foto" => "Note9.jpeg"
    ],
    [
        "nama" => "Vivo Y12",
        "spesifikasi" => "Sistem Operasi: Android 9 (Pie)
                        Prosesor: Mediatek MT6762 Helio P22 (12 nm)
                        GPU: PowerVR GE8320
                        Ukuran Layar: 6.35 inch
                        Tipe Layar: IPS LCD capacitive touchscreen, 16M colors
                        Resolusi Layar: 720 x 1544 pixels (~268 ppi density)
                        Kamera Belakang: Triple 13 MP,  8 MP,  2 MP.
                        Kamera Depan: 8 MP, f/1.8",
        "warna" => "Biru",
        "harga" => 2000000,
        "stok" => 25,
        "foto" => "VivoY12.jpg"
    ],
    [
        "nama" => "Vivo Y15",
        "spesifikasi" => "Chipset: Mediatek MT6762 Helio P22 (12nm)
                        RAM: 4GB
                        Memori internal: 64GB
                        Ukuran HP: 159,4 x 76,8 x 8,9 mm
                        Berat HP: 190 gram
                        Ukuran layar: 6,35 inci, 720 x 1544 piksel
                        Kamera depan: 16MP
                        Kamera belakang: Triple camera, 13MP+8MP+2MP
                        Baterai: Li-Po 5000 mAh",
        "warna" => "Merah",
        "harga" => 1700000,
        "stok" => 30,
        "foto" => "VivoY15.jpg"
    ],
    [
        "nama" => "Vivo Y20",
        "spesifikasi" => "Ukuran Layar: 6,5 inci
                        Chipset: Qualcomm SM4250 Snapdragon 460 (11 nm)
                        OS: Android 10, Funtouch 10.5
                        RAM: 4GB / 6GB
                        Memori internal: 64GB
                        Ukuran HP: 164.4 x 76.3 x 8.4 mm
                        Berat HP: 192.3 g
                        Kamera depan: 8 MP, f/1.8
                        Kamera belakang wide: 13 MP, f/2.2
                        Kamera belakang makro: 2 MP, f/2.4
                        Kamera belakang: 2 MP, f/2.4
                        Baterai: Li-Po 5000 mAh, non-removable",
        "warna" => "Putih",
        "harga" => 1500000,
        "stok" => 25,
        "foto" => "VivoY20.jpg"
    ],
    [
        "nama" => "Vivo Y30",
        "spesifikasi" => "Chipset: Mediatek MT6765 Helio P35
                        Kamera belakang: 13MP + 8MP + 2MP + 2MP
                        Kamera depan: 8MP
                        Ukuran layar: 6.47 Inch
                        Battery: 5000mAh
                        Sistem Operasi: Android 10
                        Funtouch 10.0
                        Layar Ultra O Screen, 6.47 inci dengan aspek rasio luas
                        4 kamera belakang, 13MP (Main) + 8MP (Ultrawide) + 2MP (Macro) + 2MP (Bokeh)
                        Storage besar 128 GB dengan 2 opsi RAM 4GB dan 6GB
                        Baterai 5000 mAh bisa untuk isi ulang baterai gadget lain",
        "warna" => "Hitam",
        "harga" => 2500000,
        "stok" => 30,
        "foto" => "VivoY30.jpg"
    ],
    [
        "nama" => "Vivo Y50",
        "spesifikasi" => "Chipset: Qualcomm SM6125 Snapdragon 665 (11 nm)
                        RAM: 8GB
                        Memori internal: 128GB
                        Ukuran HP: 162 x 76.5 x 9.1 mm
                        Berat HP: 197 gram
                        Ukuran layar: 6.53 inci, 1080 x 2400 piksel
                        Kamera depan: 16MP
                        Kamera belakang: 4 kamera, 13MP+8MP+2MP+2MP
                        Baterai: Li-Po 5000 mAh",
        "warna" => "Biru",
        "harga" => 3200000,
        "stok" => 40,
        "foto" => "VivoY50.jpg"
    ],
    [
        "nama" => "Vivo Z1 Pro",
        "spesifikasi" => "Chipset: Qualcomm SDM712 Snapdragon 712 (10 nm)
                        RAM: 4GB/6GB
                        Memori internal: 64GB/128GB
                        Ukuran HP: 162.4 x 77.3 x 8.9 mm
                        Berat HP: 201 gram
                        Ukuran layar: 6.53 inci
                        Kamera depan: 32MP
                        Kamera belakang: Triple camera, 16MP+8MP+2MP
                        Baterai: Li-Po 5000 mAh",
        "warna" => "Biru",
        "harga" => 3700000,
        "stok" => 30,
        "foto" => "VivoZ1.jpg"
    ],
];

function rupiahIDR($duit) {
    return "Rp" . number_format($duit,2,',','.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPhone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                    <tr>
                        <td><?= $dagang+1; ?></td>
                        <td><?= $barang["nama"]; ?></td>
                        <td><?= $barang["spesifikasi"]; ?></td>
                        <td><?= $barang["warna"]; ?></td>
                        <td><?= rupiahIDR($barang["harga"]) ?></td>
                        <td><?= $barang["stok"]; ?></td>
                        <td>
                            <figure class="image is=128x128">
                                <img src="img/<?= $barang["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#cari').DataTable();
        });
    </script>
    
</body>
</html>