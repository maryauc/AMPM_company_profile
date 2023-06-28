<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$picture = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];

if ($picture != '') {
    move_uploaded_file($file_tmp, '../../dist/img/team/' . $picture);

    $query = mysqli_query($koneksi, "UPDATE team SET name = '$name', position = '$position', picture='$picture' WHERE id='$id'");
} else {
    $query = mysqli_query($koneksi, "UPDATE team SET name = '$name', position = '$position' WHERE id='$id'");
}
if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=team-data';
    </script>
<?php
}
?>