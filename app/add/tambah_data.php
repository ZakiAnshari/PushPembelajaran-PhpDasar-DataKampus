<?php
include '../../conf/config.php';
$nama = $_GET['nama'];
$nobp = $_GET['nobp'];
$jurusan = $_GET['jurusan'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO tb_mahasiswa (id,nama,nobp,jurusan) VALUES ('','$nama','$nobp','$jurusan') "
);
header('Location:../index.php?page=data-mahasiswa');
?>
