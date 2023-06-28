<?php
include('../../../conf/config.php');

$services = $_POST['services'];
$text = $_POST['text'];

$query = mysqli_query($koneksi, "INSERT into services (id, services, text) VALUES ('', '$services', '$text')");
?>
<!--HTML-->
<script>
    alert('Your work has been saved!');
    document.location = '../../index.php?page=service-data';
</script>