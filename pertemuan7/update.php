<?php

require_once('config.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$posisi = $_POST['posisi'];
$foto = $_POST['foto'];

mysqli_query($koneksi,"UPDATE karyawan SET nama = '$nama', alamat= '$alamat', posisi = '$posisi',foto = '$foto' WHERE nik=$nik");

header("location:index.php?pesan.update");