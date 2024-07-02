<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
    $kereta = htmlspecialchars($_POST['kereta']);
    $dari = htmlspecialchars($_POST['dari']);
    $tujuan = htmlspecialchars($_POST['tujuan']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $jam = htmlspecialchars($_POST['jam']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $metode_pembayaran =htmlspecialchars($_POST['$metode_pembayaran']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $tempat_duduk = htmlspecialchars($_POST['tempat_duduk']);

    // Daftar harga tiket berdasarkan jam keberangkatan
    $harga_tiket = [
        "08:00" => 100000,
        "12:00" => 120000,
        "16:00" => 150000
    ];

    // Hitung total harga
    $total_harga = $harga_tiket[$jam] * $jumlah;

    // Simpan data dalam sesi
    $_SESSION['pemesanan'] = [
        'nama' => $nama,
        'email' => $email,
        'telepon' => $telepon,
        'kereta' => $kereta,
        'tanggal' => $tanggal,
        'dari' => $dari,
        'tujuan' => $tujuan,
        'jam' => $jam,
        'kelas' => $kelas,
        'metode_pembayaran' => $metode_pembayaran,
        'jumlah' => $jumlah,
        'tempat_duduk' => $tempat_duduk,
        'total_harga' => $total_harga
    ];

    // Redirect ke halaman pembelian
    header("Location: pembelian.php");
    exit();
} else {
    echo "<p>Terjadi kesalahan dalam pemrosesan data.</p>";
}
?>
