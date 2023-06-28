<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$koneksi = mysqli_connect('localhost', 'root', '', 'aroundme_db');

    //if(!$koneksi){
    //    die("Koneksi Gagal". mysqli_connect_error());
    //}else{
    //    echo "Koneksi Berhasil";
    //}
