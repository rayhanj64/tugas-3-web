<?php

$id = $_GET['id'];

include '../utility/connect.php';

$sql = "DELETE FROM pendaftar WHERE id = $id";
$hapus = mysqli_query($koneksi, $sql);

header("Location: ../index.php");