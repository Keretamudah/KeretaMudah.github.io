register 

<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugaspwl";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password
    if ($password !== $confirm_password) {
        echo"Password tidak cocok.";
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Mencegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO tb_register (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        header("location: login.html");
        echo "Registrasi berhasil! Silakan login.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>