<?php

include 'koneksi.php';

$id    = $_POST['id'];
$nama  = $_POST['nama_siswa'];
$mapel = $_POST['mata_pelajaran'];
$nilai = $_POST['nilai'];

mysqli_query($conn, "UPDATE nilai_siswa SET

nama_siswa='$nama',
mata_pelajaran='$mapel',
nilai='$nilai'

WHERE id='$id'");

header("Location: index.php");

?>