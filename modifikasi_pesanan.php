<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pemesanan_paket";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifikasi Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-link.active {
            color: #ffbb00; /* Example active color */
        }
        .table th, .table td {
            text-align: center;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        /* Custom styles for submenu */
        .dropdown-menu .dropdown-submenu {
            position: relative;
        }
        .dropdown-menu .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="index.php">Lake Toba Tourism</a>
                <div class="logo-group ms-3 d-flex align-items-center">
                    <img src="gambar/logo wisata.png" alt="Bangga Berwisata di Indonesia" class="mx-2" style="height: 40px;">
                    <img src="gambar/pesonaindonesia.png" alt="Wonderful Indonesia" class="mx-2" style="height: 40px;">
                    <img src="gambar/sumut logo.jpeg" alt="Logo Pemerintah Bali" class="mx-2" style="height: 40px;">
                    <img src="gambar/pesonadanautoba.png" alt="Bali - The Island of Gods" class="mx-2" style="height: 40px;">
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="paketWisataDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Paket Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="paketWisataDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Transportasi</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" onclick="filterPackages('2d1n')">Paket Tour 2 Hari 1 Malam</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="filterPackages('3d2n')">Paket Tour 3 Hari 2 Malam</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="filterPackages('4d3n')">Paket Tour 4 Hari 3 Malam</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="filterPackages('5d4n')">Paket Tour 5 Hari 4 Malam</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#" onclick="filterPackages('kuliner')">Kuliner</a></li>
                            <li><a class="dropdown-item" href="#" onclick="filterPackages('olahraga')">Olahraga</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modifikasi_pesanan.php">Modifikasi Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Pesanan</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Nomor HP/Telp</th>
                    <th>Tanggal Pesan</th>
                    <th>Waktu Pelaksanaan</th>
                    <th>Pelayanan Paket</th>
                    <th>Jumlah Peserta</th>
                    <th>Harga Paket</th>
                    <th>Jumlah Tagihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".htmlspecialchars($row['nama_pemesan'])."</td>
                            <td>".htmlspecialchars($row['nomor_hp'])."</td>
                            <td>".htmlspecialchars($row['tanggal_pesan'])."</td>
                            <td>".htmlspecialchars($row['waktu_pelaksanaan'])."</td>
                            <td>".htmlspecialchars($row['pelayanan_paket'])."</td>
                            <td>".htmlspecialchars($row['jumlah_peserta'])."</td>
                            <td>".number_format($row['harga_paket'], 0, ',', '.')."</td>
                            <td>".number_format($row['jumlah_tagihan'], 0, ',', '.')."</td>
                            <td>
                                <a href='edit_pesanan.php?id=".$row['id']."' class='btn btn-primary btn-sm'>Edit</a>
                                <a href='hapus_pesanan.php?id=".$row['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus pesanan ini?\")'>Delete</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>Tidak ada data pesanan.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="form_pemesanan.php" class="btn btn-success mt-3">Tambah Pesanan Baru</a>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p class="mb-0">© 2024 Pesona Danau Toba. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to handle the dropdown-submenu
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    var submenu = this.nextElementSibling;
                    if (submenu && submenu.classList.contains('dropdown-menu')) {
                        submenu.classList.toggle('show');
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>
