<?php

require "connection.php";

function tambah($data){
    global $conn;

    $foto = htmlspecialchars($data["foto"]);
    $nama = htmlspecialchars($data["nama"]);
    $nomer = htmlspecialchars($data["nomer"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "INSERT INTO siswa VALUES ('','$foto,'$nama','$nomer','$email','$jurusan')";
    
    mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}
 ?>