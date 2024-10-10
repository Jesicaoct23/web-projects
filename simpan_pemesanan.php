<?php
$servername = "localhost"; // Ganti dengan detail server Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "wisata_db"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama_pemesan = $_POST['nama_pemesan'];
$nomor_hp = $_POST['nomor_hp'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
$pelayanan_paket = implode(", ", $_POST['pelayanan_paket']);
$jumlah_peserta = $_POST['jumlah_peserta'];
$harga_paket = $_POST['harga_paket'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];

$sql = "INSERT INTO pemesanan_paket (nama_pemesan, nomor_hp, tanggal_pesan, waktu_pelaksanaan, pelayanan_paket, jumlah_peserta, harga_paket, jumlah_tagihan)
VALUES ('$nama_pemesan', '$nomor_hp', '$tanggal_pesan', '$waktu_pelaksanaan', '$pelayanan_paket', '$jumlah_peserta', '$harga_paket', '$jumlah_tagihan')";

// Menampilkan tampilan respons setelah penyimpanan data
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }
        h2 {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 20px;
        }
        .btn-group {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h2>Pemesanan berhasil disimpan!</h2>";
        } else {
            echo "<h2>Gagal menyimpan pemesanan.</h2>";
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
        $conn->close();
        ?>
        <div class="btn-group">
            <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
            <a href="form_pemesanan.php" class="btn btn-primary">Pesan Lagi</a>
        </div>
    </div>
</body>
</html>
