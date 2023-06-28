<?php
include('../../../conf/config.php');

$name = $_POST['name'];
$position = $_POST['position'];

//nama foto
$picture = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];
move_uploaded_file($file_tmp, '../../dist/img/team/' . $picture);

$query = mysqli_query($koneksi, "INSERT into team (id, name, position, picture) VALUES ('', '$name', '$position', '$picture')");
?>
<!--HTML-->
<script>
    alert('Your work has been saved!');
    document.location = '../../index.php?page=team-data';
</script>