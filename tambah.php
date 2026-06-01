<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>Tambah Data Nilai</h1>

<form action="proses_tambah.php" method="POST">

    <input type="text" name="nama_siswa" placeholder="Nama Siswa" required>

    <input type="text" name="mata_pelajaran" placeholder="Mata Pelajaran" required>

    <input type="number" name="nilai" placeholder="Nilai" required>

    <button type="submit">Simpan</button>

</form>

</div>

</body>
</html>