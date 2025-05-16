<?php
$host     = "localhost";
$username = "root";      // Ganti jika username MySQL berbeda
$password = "";          // Ganti jika ada password
$database = "guesthouse"; // Pastikan nama database sesuai

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Optional: untuk debugging sukses
// echo "Koneksi berhasil";
?>
