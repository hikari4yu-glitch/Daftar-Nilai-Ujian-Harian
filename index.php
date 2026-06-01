<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM nilai_siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Ujian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Daftar Nilai Ujian Harian</h1>

    <a href="tambah.php" class="btn">+ Tambah Data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while($row = mysqli_fetch_assoc($data)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_siswa']; ?></td>
            <td><?= $row['mata_pelajaran']; ?></td>
            <td><?= $row['nilai']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                |
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

<script src="script.js"></script>
</body>
</html>