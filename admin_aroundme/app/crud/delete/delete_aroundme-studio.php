<?php
include('../../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM aroundme_studio WHERE id = '$id'");
header('location: ../../index.php?page=aroundme_studio-data');
