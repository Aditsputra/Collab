<?php
require 'connection.php';
$id = $_GET["id"];
if ( hapus($id) > 0 ){
    echo "
    <script>
    alert('DELETE SUSKES');
       document.location.href = 'index.php';
    </script>
       
    ";
}  else {
    echo "
    <script>
    alert('DELETE FAIL');
       document.location.href = 'index.php';
    </script>
       
    ";
}

?>