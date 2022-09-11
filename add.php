<?php

require "connection.php";
if ( isset($_POST["submit"])) {
    if( tambah($_POST) > 0 ) {
        echo " <script> alert('ADD SUSKES');
                        document.location.href = 'index.php';
                </script>";
    } else {
        echo " <script> alert('ADD SUSKES');
                        document.location.href = 'index.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    
    
    <form action="" method="post">
    <ul>
        <li>
            <label for="foto">email</label>
            <input type="text" name="foto" id="foto" 
                required value="<?= $sw["foto"]; ?>">
        </li>
        <li>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama"
            require value="<?= $sw["nama"]; ?>">
        </li>
        <li>
            <label for="nomer">nomer</label>
            <input type="text" name="nomer" id="nomer"
            required value="<?= $sw["nomer"]; ?>">
        </li>
        <li>
            <label for="email">email</label>
            <input type="text" name="email" id="email" 
            required value="<?= $sw["email"]; ?>">
        </li>
        <li>
            <label for="jurusan">email</label>
            <input type="text" name="jurusan" id="jurusan" 
            required value="<?= $sw["jurusan"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit"> Kirim </button>
        </li>
    </ul>





    </form>
</body>
</html>