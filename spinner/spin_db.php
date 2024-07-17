<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Koneksi ke database
$servername = "localhost";
$username = "u392320223_kelompok4pl";
$password = "?1hwvshGt";
$dbname = "u392320223_kelompok4pl";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menyimpan hasil spin ke database
function simpanHasilSpin($conn, $selectedTask, $userId) {
    // Escape string untuk menghindari SQL Injection
    $selectedTask = $conn->real_escape_string($selectedTask);
    
    // Mendapatkan tanggal saat ini
    $tanggal = date("Y-m-d"); // Format tanggal: Tahun-Bulan-Tanggal

    // Query untuk menyimpan hasil spin ke database
    $sql = "INSERT INTO spin (dataspin, tanggal, userid) VALUES ('$selectedTask', '$tanggal', '$userId')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Anda mendapatkan tugas: $selectedTask');</script>";
        echo "<script>window.location.href = '../home2/index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fungsi untuk memeriksa apakah pengguna telah melakukan spin hari ini
function sudahSpinHariIni($conn, $userId) {
    $today = date("Y-m-d");
    $sql = "SELECT * FROM spin WHERE tanggal = '$today' AND userid = '$userId'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
}

// Pastikan session user_id sudah diset
if (!isset($_SESSION['user_id'])) {
    die("User ID tidak ditemukan di session.");
}

$userId = (int) $_SESSION['user_id']; // Escape user_id untuk menghindari SQL Injection

// Jika tombol spin diklik
// Lakukan spin dan tampilkan hasil
$selectedTask = isset($_GET['data']) ? $_GET['data'] : ''; // Anda perlu mengganti ini dengan hasil spin yang sebenarnya

if (!empty($selectedTask)) {
    // Periksa apakah pengguna sudah spin hari ini
    if (!sudahSpinHariIni($conn, $userId)) {
        // Simpan hasil spin ke database
        simpanHasilSpin($conn, $selectedTask, $userId);
    } else {
        echo "<script>alert('Anda sudah melakukan spin hari ini.');</script>";
        echo "<script>window.location.href = '../home2/index.php';</script>";
    }
} else {
    echo "Data spin tidak ditemukan.";
}
?>
