<?php
include('../../../conf/config.php');

$name = $_POST['name'];

//nama foto
$pictureName = $_FILES['picture']['name'];

//lokasi foto
$file_tmp = $_FILES['picture']['tmp_name'];
move_uploaded_file($file_tmp, '../../dist/img/client/' . $pictureName);

$query = mysqli_query($koneksi, "INSERT into client (id, name, picture) VALUES ('', '$name', '$pictureName')");

if ($query) {
?>
    <!--HTML-->
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=client-data';
    </script>
<?php
}
?>