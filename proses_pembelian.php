<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .details {
            margin-bottom: 15px;
        }
        .details label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Pembayaran</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = htmlspecialchars($_POST['nama']);
                $email = htmlspecialchars($_POST['email']);
                $telepon = htmlspecialchars($_POST['telepon']);
                $jumlah = htmlspecialchars($_POST['jumlah']);
                $kereta = htmlspecialchars($_POST['kereta']);
                $tanggal = htmlspecialchars($_POST['tanggal']);
                $jam = htmlspecialchars($_POST['jam']);
                $kelas = htmlspecialchars($_POST['kelas']);
                $metode_pembayaran = htmlspecialchars($_POST['metode_pembayaran']);
                $tempat_duduk = htmlspecialchars($_POST['tempat_duduk']);
               
                // Daftar harga tiket berdasarkan jam keberangkatan
                $harga_tiket = [
                    "08:00" => 100000,
                    "12:00" => 120000,
                    "16:00" => 150000
                ];

                // Hitung total harga
                $total_harga = $harga_tiket[$jam] * $jumlah;

                // Simulasi proses pembayaran
                // Dalam aplikasi nyata, di sini akan ada proses untuk menghubungkan ke gateway pembayaran

                echo "<div class='details'><label>Nama Lengkap:</label> $nama</div>";
                echo "<div class='details'><label>Email:</label> $email</div>";
                echo "<div class='details'><label>Nomor Telepon:</label> $telepon</div>";
                echo "<div class='details'><label>Jumlah Tiket:</label> $jumlah</div>";
                echo "<div class='details'><label>Nama Kereta:</label> $kereta</div>";
                echo "<div class='details'><label>Dari:</label> $dari</div>";
                echo "<div class='details'><label>Tujuan:</label> $tujuan</div>";
                echo "<div class='details'><label>Tanggal Keberangkatan:</label> $tanggal</div>";
                echo "<div class='details'><label>Nama Lengkap:</label> $tujuan</div>";
                echo "<div class='details'><label>Jam Keberangkatan:</label> $jam</div>";
                echo "<div class='details'><label>Kelas:</label> $kelas</div>";
                echo "<div class='details'><label>Tempat Duduk:</label> $tempat_duduk</div>";
                echo "<div class='details'><label>Metode Pembayaran:</label> $metode_pembayaran</div>";
                echo "<div class='details'><label>Total Harga:</label> Rp " . number_format($total_harga, 0, ',', '.') . "</div>";

                echo "<p>Pembayaran berhasil! Terima kasih telah melakukan pembelian tiket. Silakan periksa email Anda untuk detail tiket.</p>";
            } else {
                echo "<p>Terjadi kesalahan dalam pemrosesan data.</p>";
            }
        ?>
    </div>
</body>
</html>
