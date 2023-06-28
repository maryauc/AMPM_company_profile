<?php
include('../../../conf/config.php');

$pictureTitle = $_POST['pictureTitle'];

//nama foto
$pictureName = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];
move_uploaded_file($file_tmp, '../../dist/img/aroundme_id/' . $pictureName);

$query = mysqli_query($koneksi, "INSERT into aroundme_id (id, title, picture) VALUES ('', '$pictureTitle', '$pictureName')");

if ($query) {
?>
    <!--HTML-->
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=aroundme_id-data';
    </script>
<?php
}
?>