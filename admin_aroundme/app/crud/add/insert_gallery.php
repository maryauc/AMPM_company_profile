<?php
include('../../../conf/config.php');

$title = $_POST['title'];

//nama foto
$pictureName = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];
move_uploaded_file($file_tmp, '../../dist/img/gallery/' . $pictureName);

$query = mysqli_query($koneksi, "INSERT into gallery (id, title, picture) VALUES ('', '$title', '$pictureName')");


?>
<!--HTML-->
<script>
    alert('Your work has been saved!');
    document.location = '../../index.php?page=gallery-data';
</script>