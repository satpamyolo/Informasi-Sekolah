<?php

$koneksi = mysqli_connect('localhost','root','','datasekolah');

if (!$koneksi){
    die('Gagal terkoneksi ke database' . mysqli_connect_error());
}
?>
