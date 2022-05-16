<?php
// $nama = ['arya','budi','cici','Dinda'];

// for($i = 0;$i <= count($nama); $i++){
//     echo $nama[$i];
// }

// foreach($nama as $tampil){
//     echo $tampil. " ";
// }

//array multidimensi

$karyawan = [
    [22345,"Arya","Bekasi","3000000","foto.png"],
    [22344,"Budi","Jakarta","4000000","foto1.png"],
    [22343,"Cici","Bogor","5000000","foto2.png"],
    [22342,"Krya","Tambun","6000000","foto3.png"],
];
foreach($karyawan as $muncul){
    echo "Nik : $muncul[0] <br>";
    echo "Nik : $muncul[1] <br>";
    echo "Nik : $muncul[2] <br>";
    echo "Nik : $muncul[3] <br>";
    echo "Nik : $muncul[4] <br>";
}
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
    <h1>Daftar karyawan PT ABC</h1>

    <?php foreach($karyawan as $identitas){ ?>
        <ul>
            <li>Nik : <?php echo $identitas[0]; ?></li>
            <li>Nik : <?php echo $identitas[1]; ?></li>
            <li>Nik : <?php echo $identitas[2]; ?></li>
            <li>Nik : <?php echo $identitas[3]; ?></li>
            <li>Nik : <?php echo $identitas[4]; ?></li>
        </ul>

    <?php } ?>
</body>
</html>