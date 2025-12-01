<?php

include '../utility/connect.php';

//deklarasi harga
$harga_fasilitas = [
    "Modul Cetak Lengkap" => 50000,
    "Modul PDF" => 25000,
    "Video Rekaman Kelas" => 75000,
    "Grup Diskusi Telegram" => 40000
];

$harga_paket = [
    "Paket Reguler" => 500000,
    "Paket Intensif" => 750000,
    "Paket Supercamp" => 1000000
];

$harga_cabang = [
    "Jakarta Pusat" => 100000,
    "Yogyakarta" => 80000,
    "Aceh" => 120000,
    "Surabaya" => 150000,
    "Makassar" => 115000
];

$harga_pembayaran = [
    "Transfer" => 3000,
    "E-Wallet" => 2000,
    "Tunai" => 0
];

//var yang bisa diisi user bebas harus di-anti injeksi-kan biar aman
//var yg dari radio checkbox dan select gk perlu di-anti injeksi-kan
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$gender = $_POST['gender'];
$paket = $_POST['paket'] ?? '';
$fasilitas_array = $_POST['fasilitas'] ?? [];
$cabang = $_POST['cabang'] ?? '';
$pembayaran = $_POST['metode_bayar'] ?? '';
$catatan = mysqli_real_escape_string($koneksi, $_POST['catatan']);

//hitung harga paket
$price1 = 0;
if(!empty($paket)) $price1 = $harga_paket[$paket];

//hitung total harga fasilitas
$price2 = 0;
foreach($fasilitas_array as $fasilitass) {
    if(isset($harga_fasilitas[$fasilitass])) {
        $price2 += $harga_fasilitas[$fasilitass];
    }
}

//hitung harga cabang
$price3 = 0;
$price3 = $harga_cabang[$cabang];

//hitung harga metode pembayaran
$price4 = 0;
$price4 = $harga_pembayaran[$pembayaran];

//tax gk jelas, tak samain harga pembayaran aja dh
$tax = $price4;

//hitung taxes 10%
$taxes = ($price1 + $price2 + $price3) * 0.1;

$total_biaya = $price1 + $price2 + $price3 + $price4 + $taxes;

if (empty($paket)) $total_biaya = 0;

//var fasilitas bentuknya array
//ubah ke string supaya bisa disimpen di database
$fasilitas_string = implode(',',$fasilitas_array);

$sql = "INSERT INTO pendaftar 
        (nama, email, gender, paket, fasilitas, cabang, metode_pembayaran, catatan, 
        price1, price2, price3, price4, tax, taxes, total_biaya) VALUES 
        ('$nama', '$email', '$gender', '$paket', '$fasilitas_string', '$cabang', '$pembayaran', '$catatan',
        $price1, $price2, $price3, $price4, $tax, $taxes, $total_biaya)";
$tambah = mysqli_query($koneksi, $sql);


header("Location: ../index.php");