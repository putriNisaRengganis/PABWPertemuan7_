<?php
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $mhs['gambar']; ?>"></li>
        <li>nim : <?= $mhs['nim']; ?></li>
        <li>nama : <?= $mhs['nama']; ?></li>
        <li>email : <?= $mhs['email']; ?></li>
        <li>jurursan : <?= $mhs['jurusan']; ?></li>
        <li><a href="">ubah</a> | <a href="">hapus</a></li>
        <li><a href="Latihan3.php">kembali ke daftar mahasiswa</a></li>
</body>
</html>