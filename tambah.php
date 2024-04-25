<?php
include "koneksi.php";

if (isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobby = $_POST['hobby'];
    $sql = "INSERT INTO mahasiswa (nama, npm, jurusan, jenis_kelamin, hobby) VALUES ('$nama', '$npm', '$jurusan', '$jenis_kelamin', '$hobby')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" required><br>
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label for="hobby">Hobby:</label><br>
        <input type="text" id="hobby" name="hobby" required><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <br>
    <button><a href="index.php">Lihat Data</a></button>
</body>
</html>
