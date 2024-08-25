<?php
$koneksi = mysqli_connect('localhost','root','','crud');
$mahasiswa =query("SELECT * FROM tb_mhs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <h1>loop PHP</h1>

    <?php
    
    $hewan = ['cicak','kuda','kerbau','angsa'];
    echo $hewan[0];
    echo '<br>';
    echo $hewan[1];
    echo '<br>';
    echo $hewan[2];
    echo '<br>';
    echo $hewan[3];
    echo '<br>';

    for($i= 0; $i<count($hewan); $i++){
        echo'---------';
        echo $hewan[$i];
        echo'---------<br>';
    }
    foreach ($mahasiswa as $h) {
        echo'---------';
        echo $h;
        echo'---------<br>';
    }
    
    ?>
</body>
</html>