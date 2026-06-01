<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM nilai_siswa WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Edit Data</h1>

<form action="proses_edit.php" method="POST">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <input type="text" name="nama_siswa" value="<?= $row['nama_siswa']; ?>" required>

    <input type="text" name="mata_pelajaran" value="<?= $row['mata_pelajaran']; ?>" required>

    <input type="number" name="nilai" value="<?= $row['nilai']; ?>" required>

    <button type="submit">Update</button>

</form>

</div>

</body>
</html>