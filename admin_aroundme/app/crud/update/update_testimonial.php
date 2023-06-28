<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$picture = $_FILES['picture']['name'];
$testimonial = $_POST['testimonial'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];

if ($picture != '') {
    move_uploaded_file($file_tmp, '../../dist/img/testimonial/' . $picture);
    $query = mysqli_query($koneksi, "UPDATE testimonial SET name = '$name', position='$position', picture='$picture',testimonial='$testimonial' WHERE id='$id'");
} else {
    $query = mysqli_query($koneksi, "UPDATE testimonial SET name = '$name', position='$position', testimonial='$testimonial' WHERE id='$id'");
}

if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=testimonial-data';
    </script>
<?php
}
?>