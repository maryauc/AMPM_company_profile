<?php
include('../../../conf/config.php');

$title = $_POST['title'];
$text = $_POST['text'];

$query = mysqli_query($koneksi, "INSERT into subtitle (id, title, text) VALUES ('', '$title', '$text')");
?>
<!--HTML-->
<script>
    alert('Your work has been saved!');
    document.location = '../../index.php?page=subtitle-data';
</script>