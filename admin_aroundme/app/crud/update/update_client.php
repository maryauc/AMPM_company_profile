<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$picture = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];

if ($picture != '') {
    move_uploaded_file($file_tmp, '../../dist/img/client/' . $picture);

    $query = mysqli_query($koneksi, "UPDATE client SET name = '$name', picture='$picture' WHERE id='$id'");
} else {
    $query = mysqli_query($koneksi, "UPDATE client SET name = '$name' WHERE id='$id'");
}

if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=client-data';
    </script>
<?php
}
?>