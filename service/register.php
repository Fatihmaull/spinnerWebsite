<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $notlpn = $_POST['notlpn'];
    $pass = $_POST['pass'];

    // Validasi input (tambahkan validasi sesuai kebutuhan)
    if (empty($name) || empty($email) || empty($notlpn) || empty($pass)) {
        echo "All fields are required!";
    } else {
        // Hash password
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Siapkan statement SQL untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO users (name, email, notlpn, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $notlpn, $hashed_password);

        // Eksekusi statement
        if ($stmt->execute()) {
            echo "Registration successful!";
            header("Location: ../login/index.php"); // Redirect to another page after registration
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
