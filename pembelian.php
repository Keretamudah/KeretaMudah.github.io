<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket</title>
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
        .form-group,select{
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        .form-group button:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
    <class="container">
        <h2>Pembelian Tiket</h2>
        <form action="konfirmasi_pembelian.php" method="POST">
        <form action="#" method="post"></form>    
        <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                
            </div>
            <div class="form-group">
                <label for="nomor_kartu">Nomor Kartu Kredit/Debit:</label>
                <input type="text" id="nomor_kartu" name="nomor_kartu" required>
            </div>
            <div class="form-group">
                <label for="Dari">dari:</label>
                <input type="text" id="Dari" name="dari"required>
            </div>
            <div class="form-group">
                <label for="Tujuan">tujuan:</label>
                <input type="text" id="Tujuan"name="tujuan" required>
            </div>
            <div class="form-group">
                <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
                <input type="text" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="metode_pembayaran">Metode pembayaran:</label>
                <select id="metode_pembayaran" name="metode_pembayaran"required>
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BSI">BSI</option>
                    <option value="Indomaret,alfamart,pos indonesia">Indomaret,alfamart,pos indonesia</option>
                    <option value="Mandiri">Mandiri</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <button type="submit">Bayar Sekarang</button>
            </div>
        </form>
    </div>
</body>
</html>
