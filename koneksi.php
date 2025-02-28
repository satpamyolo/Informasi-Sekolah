<?php

$koneksi = mysqli_connect('localhost','root','','sma1');

if (!$koneksi){
    die('Gagal terkoneksi ke database' . mysqli_connect_error());
}
?>