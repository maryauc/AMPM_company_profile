<?php
include 'conf/config.php';

$username = "Administrator_AMPM";
$password = "masyaallah_sukses.99";
$passwordenc = md5("AroundMePM" . md5('$password'));
$name = "AMPM";
$level = "admin";

$query = mysqli_query($koneksi, "INSERT into user (name, username, password, level) VALUES ('$name', '$username', '$passwordenc', '$level')");
