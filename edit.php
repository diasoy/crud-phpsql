<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobby = $_POST['hobby'];

    $sql = "UPDATE mahasiswa SET nama='$nama', npm='$npm', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', hobby='$hobby' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: index.php');
    } else {
        echo 'Gagal Edit Data';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="<?php echo $row['npm']; ?>" required><br>
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" value="<?php echo $row['jurusan']; ?>" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki" <?php if($row['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($row['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select><br>
        <label for="hobby">Hobby:</label><br>
        <input type="text" id="hobby" name="hobby" value="<?php echo $row['hobby']; ?>" required><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <br>
    <button><a href="index.php">Lihat Data</a></button>
</body>
</html>
