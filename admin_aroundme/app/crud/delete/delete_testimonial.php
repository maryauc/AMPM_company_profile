<?php
include('../../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM testimonial WHERE id = '$id'");
header('location: ../../index.php?page=testimonial-data');
