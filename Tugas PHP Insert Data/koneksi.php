<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'classicmodel';
    $conn = mysqli_connect($host, $user, $pass);

    if(! $conn){
        die('koneksi gagal: '. mysqli_error($conn));
    }

    mysqli_select_db($conn,$db);

    mysqli_set_charset($conn, 'utf8');
?>
