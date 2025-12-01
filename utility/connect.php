<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "bimbel";

$port = "8111"; 
//khusus krn xampp laptopku 'berkebutuhan khusus', cuma bs port 8111
//klo buat org lain, hapus aja port 8111 ini

$koneksi = mysqli_connect($server, 
            $user, 
            $password, 
            $database, 
                    $port);
                    
if (!$koneksi) {
    die("failed to connect database: ".mysqli_connect_error());
}

?>