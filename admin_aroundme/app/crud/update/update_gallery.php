<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$title = $_POST['title'];
$picture = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];

if ($picture != '') {
    move_uploaded_file($file_tmp, '../../dist/img/gallery/' . $picture);

    $query = mysqli_query($koneksi, "UPDATE gallery SET title = '$title', picture='$picture' WHERE id='$id'");
} else {
    $query = mysqli_query($koneksi, "UPDATE gallery SET title = '$title' WHERE id='$id'");
}

if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=gallery-data';
    </script>
<?php
}
?>