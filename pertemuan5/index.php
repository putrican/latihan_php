<?php

$karyawan = [
    [
        "nik" => "012345",
        "nama" => "Arya",
        "bagian" => "Admin",
        "alamat" => "Bekasi",
        "gaji" => "4000000",
        "foto" => "gambar.png"
    ],
    [
        "nik" => "012346",
        "nama" => "Bima",
        "bagian" => "Marketing",
        "alamat" => "Jakarta",
        "gaji" => "5000000",
        "foto" => "gambar2.png"
    ],
    [
        "nik" => "012347",
        "nama" => "Dina",
        "bagian" => "Purchasing",
        "alamat" => "Depok",
        "gaji" => "3000000",
        "foto" => "gambar3.png"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Daftar karyawan PT DWI</h1>

        <?php foreach($karyawan as $tampil_karyawan); ?>
            <ul>
                <li>Nik : <?php echo $tampil_karyawan["nik"];?></li>
                <li>Nama : <?php echo $tampil_karyawan["nama"];?></li>
                <li>Bagian : <?php echo $tampil_karyawan["bagian"];?></li>
                <li>Alamat : <?php echo $tampil_karyawan["alamat"];?></li>
                <li>Gaji : <?php echo $tampil_karyawan["gaji"];?></li>
                <li>Foto : <?php echo $tampil_karyawan["foto"];?></li>
            </ul>
        <?php endforeach; ?>
          
     

   


</body>
</html>