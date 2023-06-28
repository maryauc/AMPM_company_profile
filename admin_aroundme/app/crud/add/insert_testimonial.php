<?php
include('../../../conf/config.php');

$name = $_POST['name'];
$position = $_POST['position'];
$testimonial = $_POST['testimonial'];

//nama foto
$picture = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];
move_uploaded_file($file_tmp, '../../dist/img/testimonial/' . $picture);

$query = mysqli_query($koneksi, "INSERT into testimonial (id, name, position, picture, testimonial) VALUES ('', '$name', '$position', '$picture', '$testimonial')");

if ($query) {
?>
    <!--HTML-->
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=testimonial-data';
    </script>
<?php
}
?>