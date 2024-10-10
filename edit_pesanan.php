<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wisata_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pemesanan_paket WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Pesanan tidak ditemukan!";
        exit();
    }
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
    $modifikasi_pesanan_terbaru = date("Y-m-d H:i:s");

    $sql = "UPDATE pemesanan_paket SET 
            nama_pemesan='$nama_pemesan', 
            nomor_hp='$nomor_hp', 
            tanggal_pesan='$tanggal_pesan', 
            waktu_pelaksanaan='$waktu_pelaksanaan', 
            pelayanan_paket='$pelayanan_paket', 
            jumlah_peserta='$jumlah_peserta', 
            modifikasi_pesanan_terbaru='$modifikasi_pesanan_terbaru', 
            harga_paket='$harga_paket', 
            jumlah_tagihan='$jumlah_tagihan' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: modifikasi_pesanan.php");
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
    <title>Edit Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Pesanan</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama_pemesan" class="form-label">Nama Pemesan:</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="<?php echo htmlspecialchars($row['nama_pemesan']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">Nomor HP/Telp:</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="<?php echo htmlspecialchars($row['nomor_hp']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan:</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?php echo htmlspecialchars($row['tanggal_pesan']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="waktu_pelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                <input type="date" class="form-control" id="waktu_pelaksanaan" name="waktu_pelaksanaan" value="<?php echo htmlspecialchars($row['waktu_pelaksanaan']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="pelayanan_paket" class="form-label">Pelayanan Paket:</label>
                <select class="form-select" id="pelayanan_paket" name="pelayanan_paket" required>
                    <option value="Transportasi" <?php echo $row['pelayanan_paket'] == 'Transportasi' ? 'selected' : ''; ?>>Transportasi</option>
                    <option value="Kuliner" <?php echo $row['pelayanan_paket'] == 'Kuliner' ? 'selected' : ''; ?>>Kuliner</option>
                    <option value="Olahraga" <?php echo $row['pelayanan_paket'] == 'Olahraga' ? 'selected' : ''; ?>>Olahraga</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta:</label>
                <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" value="<?php echo htmlspecialchars($row['jumlah_peserta']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga_paket" class="form-label">Harga Paket:</label>
                <input type="number" class="form-control" id="harga_paket" name="harga_paket" value="<?php echo htmlspecialchars($row['harga_paket']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlah_tagihan" class="form-label">Jumlah Tagihan:</label>
                <input type="number" class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" value="<?php echo htmlspecialchars($row['jumlah_tagihan']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
