<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemesan = $_POST['nama_pemesan'];
    $nomor_hp = $_POST['nomor_hp'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $waktu_pelaksanaan = $_POST['waktu_pelaksanaan'];
    $pelayanan_paket = $_POST['pelayanan_paket']; // No need for array handling
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $harga_paket = $_POST['harga_paket'];
    $jumlah_tagihan = $_POST['jumlah_tagihan'];

    $sql = "INSERT INTO pemesanan_paket (
            nama_pemesan, 
            nomor_hp, 
            tanggal_pesan, 
            waktu_pelaksanaan, 
            pelayanan_paket, 
            jumlah_peserta,  
            harga_paket, 
            jumlah_tagihan
            ) VALUES (
            '$nama_pemesan', 
            '$nomor_hp', 
            '$tanggal_pesan', 
            '$waktu_pelaksanaan', 
            '$pelayanan_paket', 
            '$jumlah_peserta',  
            '$harga_paket', 
            '$jumlah_tagihan'
            )";

    if ($conn->query($sql) === TRUE) {
        header("Location: success_page.php"); // Redirect to success page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Pesanan</h2>
        <form action="" method="POST">
            <!-- Form fields as previously defined -->
            <div class="mb-3">
                <label for="nama_pemesan" class="form-label">Nama Pemesan:</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP/Telp:</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan:</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
            </div>
            <div class="mb-3">
                <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                <input type="date" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required>
            </div>
            <div class="mb-3">
                <label for="pelayanan_paket" class="form-label">Pelayanan Paket:</label>
                <select class="form-select" id="pelayanan_paket" name="pelayanan_paket" required>
                    <option value="">Pilih Pelayanan</option>
                    <option value="Transportasi">Transportasi</option>
                    <option value="Kuliner">Kuliner</option>
                    <option value="Olahraga">Olahraga</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" required>
            </div>
            <div class="mb-3">
                <label for="harga_paket" class="form-label">Harga Paket:</label>
                <input type="number" class="form-control" id="harga_paket" name="harga_paket" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_tagihan" class="form-label">Jumlah Tagihan:</label>
                <input type="number" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
        </form>
    </div>
</body>
</html>
