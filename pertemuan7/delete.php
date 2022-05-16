<?php

require_once("config.php");

$nik = $_GET['nik'];

$result = mysqli_query($koneksi, "DELETE  FROM karyawan WHERE nik = $nik");

header("location:index.php");