<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$text = $_POST['text'];

$query = mysqli_query($koneksi, "UPDATE services SET text='$text' WHERE id='$id'");


if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=service-data';
    </script>
<?php
}
?>