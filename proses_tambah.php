<?php

include 'koneksi.php';

$nama  = $_POST['nama_siswa'];
$mapel = $_POST['mata_pelajaran'];
$nilai = $_POST['nilai'];

mysqli_query($conn, "INSERT INTO nilai_siswa 
(nama_siswa, mata_pelajaran, nilai) 

VALUES

('$nama','$mapel','$nilai')");

header("Location: index.php");

?>