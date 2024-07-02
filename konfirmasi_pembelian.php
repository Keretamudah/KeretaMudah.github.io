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
        .buton{
            text-align: center;
            padding-top: 1px;
            margin-left: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Pembayaran</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = htmlspecialchars($_POST['nama']);
                $nomor_kartu = htmlspecialchars($_POST['nomor_kartu']);
                $dari = htmlspecialchars($_POST['dari']);
                $tujuan =htmlspecialchars($_POST['tujuan']);
                $metode_pembayaran =htmlspecialchars($_POST['metode_pembayaran']);
                $tanggal_kadaluarsa = htmlspecialchars($_POST['tanggal_kadaluarsa']);
                $cvv = htmlspecialchars($_POST['cvv']);

                // Untuk demo, kita akan langsung menganggap pembayaran berhasil
                // Dalam aplikasi nyata, proses pembayaran harus terintegrasi dengan gateway pembayaran

                echo "<p>Pembayaran berhasil! Terima kasih telah melakukan pembelian tiket. Silakan periksa email Anda untuk detail tiket.</p>";
                echo "<div class='details'><label>Nama Lengkap:</label> $nama</div>";
                echo "<div class='details'><label>Dari:</label> $dari</div>";
                echo "<div class='details'><label>Tujuan:</label> $tujuan</div>";
                echo "<div class='details'><label>Metode pembayaran:</label> $metode_pembayaran</div>";
                echo "<div class='details'><label>Nomor Kartu:</label> **** **** **** " . substr($nomor_kartu, -4) . "</div>";
                echo "<div class='details'><label>Tanggal Kadaluarsa:</label> $tanggal_kadaluarsa</div>";
            } else {
                echo "<p>Terjadi kesalahan dalam pemrosesan data.</p>";
            }
        ?>
         <div class="buton">
    <a href="tampilan.html"><button>Kembali</button></a>
    </div>
    </div>
   
            
</body>
</html>
