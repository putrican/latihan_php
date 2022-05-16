<?php

$koneksi = mysqli_connect("localhost","root","","koneksiphp");

$data = mysqli_query($koneksi, "SELECT * FROM karyawan");

// var_dump($data);

// if( !$data ){
//     mysqli_error($koneksi);
// }

// $karyawan = mysqli_fetch_row($data);
// var_dump($karyawan[1]);

// while($karyawan = mysqli_fetch_assoc($data)){
//     var_dump($karyawan);
// }


//mysqli_fetch_row() => mengambil data dari index ke 0 /array numerik
//mysqli_fetch_assoc() => array assosiative,mengambil data berdasarkan key
//mysqli_fetch_array() => assosiative dan numerik bisa

?>