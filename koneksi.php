<?php
$servername = "localhost";
$username = "root";
$tabel = "data_mahasiswa";

$conn = mysqli_connect($servername, $username, '', $tabel);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>