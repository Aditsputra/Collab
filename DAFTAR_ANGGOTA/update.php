<?php
require 'connection.php';

// ambil data di url
$id = $_GET["id"];
//query data siswa
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];






if( isset($_POST["submit"])) {
    
    if(edit($_POST) > 0) {
        echo "
        <script>
        alert('EDIT SUSKES');
           document.location.href = 'index.php';
        </script>
           
        ";
    } else {
        echo "
        <script>
        alert('EDIT GAGAL');
           document.location.href = 'index.php';
        </script>
        ";
    }   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <h1>Edit data siswa</h1>


    <form action="" method="post">
<input type="hidden" name="id" value="<?= $sw["id"]; ?>" >
    <ul>
    <li>
            <label for="foto">email</label>
            <input type="text" name="foto" id="foto" 
                required value="<?= $sw["foto"]; ?>" >
        </li>
        <li>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama"
            required value="<?= $sw["nama"]; ?>">
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