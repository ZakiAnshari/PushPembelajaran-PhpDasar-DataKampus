<?php
include '../../conf/config.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nobp = $_POST['nobp'];
$jurusan = $_POST['jurusan'];
//nama foto
$nama_file = $_FILES['foto']['name'];
// echo $nama_file;
//lokasi
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, '../foto/' . $nama_file);

$query = mysqli_query(
    $koneksi,
    "UPDATE tb_mahasiswa SET nama='$nama',nobp='$nobp',jurusan='$jurusan',foto='$nama_file' WHERE id ='$id'"
);
header('Location:../index.php?page=data-mahasiswa');
?>
