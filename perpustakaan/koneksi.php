<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "perpustakaan";

    $koneksi=mysqli_connect ($hostname, $user, $password, $database);
    if ($koneksi){
        echo "";
    }
    else{
        die("koneksi gagal").mysqli_connect_eror();
    }
?>