<?php

//koneksi database
$conn = mysqli_connect("localhost","root","Silver12.,3$##","D_YPM");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

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

function edit($data) {
    global $conn;
    
    $id = $data["id"];
    $foto = htmlspecialchars($data["foto"]);
    $nama = htmlspecialchars($data["nama"]);
    $nomer = htmlspecialchars($data["nomer"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);


    $query = "UPDATE siswa SET 
                foto = '$foto',
                nama = '$nama',
                nomer = '$nomer',
                email = '$email',
                jurusan = '$jurusan'
                WHERE id = $id 
                ";
    
    mysqli_query($conn, $query);

return mysqli_affected_rows($conn);


}

function hapus($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}



?>