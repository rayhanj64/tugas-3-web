<?php
include 'utility/connect.php';

$sql = "SELECT id, nama, paket, total_biaya FROM pendaftar ORDER BY tanggal_daftar DESC";
$data = mysqli_query($koneksi, $sql);
?>

<!-- pake styling bawaan bootstrap aja -->

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
    <h1>Data Pendaftaran Bimbel</h1>
    <br><br>
    
    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <?php if(mysqli_num_rows($data) > 0) {
    $nomor = 0; ?>

    <table class="table table-striped">
    <tr>
        <th>Nomor</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Paket</th>
        <th>Total Biaya</th>
        <th>Aksi</th>
    </tr>

    <?php 

    while ($row = mysqli_fetch_assoc($data)) {
    $nomor++;
    $id = $row['id'];
    $nama = $row['nama'];
    if (!empty($row['paket'])) $paket = $row['paket'];
    else $paket = 'Undefined';
    $biaya = $row['total_biaya'];
    ?>

    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $id; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $paket; ?></td>
        <td><?php echo $biaya; ?></td>
        <td>
            <a href="detail.php?id=<?php echo $id; ?>"> Detail </a>
            <a href="edit.php?id=<?php echo $id; ?>"> Edit </a>
            <a href="logic/hapus_data.php?id=<?php echo $id; ?>"> Hapus </a>
        </td>
    </tr>

    <?php } ?>
</table>    
    <?php } else { ?>
    <tr colspan="6">Tidak Ada Data</tr>
    <?php } ?>
    
</body>
</html>