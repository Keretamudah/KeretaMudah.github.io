<?php
session_start();

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

    // Mencegah SQL Injection
    $stmt = $conn->prepare("SELECT id, username, password FROM tb_register WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            // Set session
            $_SESSION['username'] = $username;
            header("Location: tampilanberhasillogin.html");
            exit;
        } else {
            echo "password Salah";
        }
    } else {
        echo "Username tidak ditemukan.";
    }

    $stmt->close();
}

$conn->close    ();

?>

