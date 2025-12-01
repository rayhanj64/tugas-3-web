<?php 

?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style_web.css"> <!--import file css-->

<head>
    <title>Pendaftaran Bimbel Mantap Keren Gokil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>

    <div class="kotak_judul">
    <h1>Bimbel Mantap Keren Gokil (BMKG)</h1>
    </div>

    <div class="kotak_background" id="halaman_form">
    <form action="logic/tambah_data.php" id="form" method="POST">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for = "gender">Jenis Kelamin:</label><br>
        
        <input type="radio" id="laki-laki" name="gender" value="Laki-laki" required>
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="gender" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>
        
        <label for = "paket">Paket Bimbingan:</label><br>
        
        <input type="radio" id="reguler" name="paket" value="Paket Reguler">
        <label for="reguler">Paket Reguler</label>
        <input type="radio" id="intensif" name="paket" value="Paket Intensif">
        <label for="intensif">Paket Intensif</label>
        <input type="radio" id="supercamp" name="paket" value="Paket Supercamp">
        <label for="supercamp">Paket Supercamp</label><br><br>

        <label for = "fasilitas[]">Fasilitas:</label><br>

        <input type="checkbox" id="fasilitas[]" name="fasilitas[]" value="Modul Cetak Lengkap">
        <label for="modul_cetak">Modul Cetak Lengkap</label><br>
        <input type="checkbox" id="fasilitas[]" name="fasilitas[]" value="Modul PDF">
        <label for="modul_pdf">Modul PDF</label><br>
        <input type="checkbox" id="fasilitas[]" name="fasilitas[]" value="Video Rekaman Kelas">
        <label for="vid_rekam">Video Rekaman Kelas</label><br>
        <input type="checkbox" id="fasilitas[]" name="fasilitas[]" value="Grup Diskusi Telegram">
        <label for="grup_tele">Grup Diskusi Telegram</label><br><br>

        <label for = "cabang">Cabang:</label>

        <select id = "cabang" name = "cabang">
        <option value="Jakarta Pusat">Jakarta Pusat</option>
        <option value="Surabaya">Surabaya</option>
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Makassar">Makassar</option>
        <option value="Aceh">Aceh</option>
        </select><br><br>

        <label for = "metode_bayar">Pembayaran:</label>

        <select id = "metode_bayar" name="metode_bayar">
        <option value="Transfer">Transfer Bank + 3.000</option>
        <option value="Tunai">Tunai</option>
        <option value="E-Wallet">E-Wallet + 2.000</option>
        </select><br><br>

        <label for="catatan">Catatan:</label><br>
        <textarea id="catatan" rows="5" cols="50" name="catatan" placeholder="Tulis catatan tambahanmu di sini. . ."></textarea><br><br>

        <input type="submit" id="submit" value="Daftar">
        <input type="reset" id="reset" value="Reset">

        <br><a href="index.php">Kembali ke Dashboard</a>
    </form>
        
    </div>


<!-- <script src="script_web.js"></script> -->

</body>
</html>