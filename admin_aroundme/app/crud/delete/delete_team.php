<?php
include('../../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM team WHERE id = '$id'");
header('location: ../../index.php?page=team-data');
