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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container{
            margin: 50px;;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-primary">Tambah karyawan</a>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $tampil) :  ?>
                        <tr>
                            <td><?= $tampil["nik"]; ?></td>
                            <td><?= $tampil["nama"]; ?></td>
                            <td><?= $tampil["alamat"]; ?></td>
                            <td><?= $tampil["posisi"]; ?></td>
                            <td><img src="<?= $tampil["foto"]; ?>" alt="gambar" style="height: 50px;"></td>
                            <td><a href="edit.php?nik=<?php echo $tampil['nik'] ?>" class="btn btn-info">Edit</a> | <a href="delete.php?nik=<?php echo $tampil["nik"];?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
    
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>