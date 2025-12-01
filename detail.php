<?php
include 'utility/connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM pendaftar WHERE id = $id";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

$nama = $data['nama'];
$email = $data['email'];
$gender = $data['gender'];
if (!empty($data['paket'])) $paket = $data['paket'];
else $paket = 'Undefined';
$fasilitas = $data['fasilitas'];
$cabang = $data['cabang'];
if (!empty($data['catatan'])) $catatan = $data['catatan'];
else $catatan = 'Tidak ada catatan';
$metode = $data['metode_pembayaran'];

if (!empty($data['total_biaya'])){ 
  $harga_paket = $data['price1'];
  $harga_fasilitas = $data['price2'];
  $harga_cabang = $data['price3'];
  $harga_metode = $data['price4'];
  $pajak = $data['taxes'];
  $total = $data['total_biaya'];
}
else $total_biaya = 0;
?>

<!-- styling bawaan bootstrap aja dh -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Data <?php echo $nama; ?></h1>
    <br><br>

<a href="index.php"> Kembali ke Daftar Pendaftar </a>

<table class="table table-striped">
    <tr>
        <th>Nama</th>
        <th><?php echo $nama; ?></th>
    </tr>
    <tr>
        <th>Email</th>
        <th><?php echo $email; ?></th>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <th><?php echo $gender; ?></th>
    </tr>
    <tr>
        <th>Paket Bimbingan</th>
        <th><?php echo $paket; ?></th>
    </tr>
    <tr>
        <th>Fasilitas</th>
        <th><?php echo $fasilitas; ?></th>
    </tr>
    <tr>
        <th>Cabang</th>
        <th><?php echo $cabang; ?></th>
    </tr>
    <tr>
        <th>Metode Pembayaran</th>
        <th><?php echo $metode; ?></th>
    </tr>
    <tr>
        <th>Catatan</th>
        <th><?php echo $catatan; ?></th>
    </tr>
    <tr>
        <th>Rincian Biaya</th>
        <th>
            <?php if ($paket != 'Undefined') { ?>
            Harga Paket: <?php echo $harga_paket; ?> <br>
            Harga Fasilitas: <?php echo $harga_fasilitas; ?> <br>
            Harga Cabang: <?php echo $harga_cabang; ?> <br>
            Harga Metode Pembayaran: <?php echo $harga_metode; ?> <br>
            Pajak (10%): <?php echo $pajak; ?> <br>
            <strong>Biaya: <?php echo $total; ?></strong> <br>
            <?php } else echo 0; ?>
        </th>
    </tr>
</table>      
</body>
</html>