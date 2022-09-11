<?php
  // fungsi koneksi Database
  require 'connection.php';
  $siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR SISWA</title>
</head>
<body>
    
    <h1>Daftar Siswa</h1>
<a href="add.php">Tambah Siswa</a>
<br>

<table border="1" cellpading="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Nomer</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
        
        <?php $i = 1; ?>
        <?php foreach( $siswa as $row ) : ?>
        
    </tr>



        <tr>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="<?= $row["foto"]; ?>"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nomer"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td>
                <a href="update.php?id=<?= $row["id"]; ?>">Edit</a>
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin');">Hapus</a>
                </td>
            </tr>
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>

</body>
</html>