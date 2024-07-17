<?php
// Informasi koneksi database
$servername = "localhost";
$username = "u392320223_kelompok4pl";
$password = "?1hwvshGt";
$dbname = "u392320223_kelompok4pl";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 

?>
