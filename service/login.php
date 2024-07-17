<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input (tambahkan validasi sesuai kebutuhan)
    if (empty($email) || empty($password)) {
        echo "Username and password are required!";
    } else {
        // Siapkan statement SQL untuk mencegah SQL injection
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password benar, set session dan redirect
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                header("Location: ../whatsnext/index.php"); // Ganti dengan halaman setelah login berhasil
            } else {
                echo "<script>alert('Invalid email or password!')</script>";
                echo "<script>window.location.href='../login/index.php'</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password!')</script>";
                echo "<script>window.location.href='../login/index.php'</script>";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
