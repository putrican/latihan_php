<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php for ($a = 1; $a <=5; $a++):?>
            <tr>
                <?php for($i = 1; $i <= 5; $i++):?>
                <td> <?php echo $i; ?></td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>    
        
          
    

<!-- <?php
for ($i = 1; $i <= 10; $i++ ){
?>
<h1>Selamat datang</h1>
<?php
}

?> -->
</body>
</html>