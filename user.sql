CREATE DATABASE guesthouse;

USE guesthouse;

CREATE TABLE reservasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    no_telepon VARCHAR(20),
    checkin DATE,
    checkout DATE,
    jumlah_orang INT,
    tipe_kamar VARCHAR(50),
    pembayaran VARCHAR(50),
    tanggal_reservasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

