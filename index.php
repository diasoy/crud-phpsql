<?php
include "koneksi.php";
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Jenis Kelamin</th>
            <th>Hobby</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $result as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["npm"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["hobby"]; ?></td>
            <td>
                <button><a href="edit.php?id=<?= $row["id"]; ?>">Edit</a></button>
                <button><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <br>
    <button><a href="tambah.php">Tambah Data</a></button>
</body>
</html>