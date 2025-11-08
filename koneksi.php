<?php
$host = "localhost";
$user = "root"; // user default
$pass = "";     // password default kosong
$db   = "db_mahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
