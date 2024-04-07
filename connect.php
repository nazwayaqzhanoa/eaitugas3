<?php

// Konfigurasi koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "db_mahasiswa"; // Ganti dengan nama database Anda

// Membuat koneksi
$connect= new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}

?>