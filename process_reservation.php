<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "guesthouse";

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama       = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$checkin    = $_POST['checkin'];
$checkout   = $_POST['checkout'];
$jumlah     = $_POST['jumlah_orang'];
$tipe       = $_POST['tipe_kamar'];
$pembayaran = $_POST['pembayaran'];

// Validasi sederhana
if (empty($nama) || empty($no_telepon)) {
    die("Nama dan Telepon wajib diisi.");
}

// Query insert
$sql = "INSERT INTO reservasi (nama, no_telepon, checkin, checkout, jumlah_orang, tipe_kamar, pembayaran) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssiss", $nama, $no_telepon, $checkin, $checkout, $jumlah, $tipe, $pembayaran);

if ($stmt->execute()) {
    echo "<script>alert('Reservasi berhasil disimpan!'); window.location.href='index.html';</script>";
} else {
    echo "Gagal menyimpan reservasi: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
