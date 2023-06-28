<?php
include('../../../conf/config.php');

$id = $_POST['id'];
$text = $_POST['text'];

$query = mysqli_query($koneksi, "UPDATE subtitle SET text='$text' WHERE id='$id'");


if ($query) {
?>
    <script>
        alert('Your work has been saved!');
        document.location = '../../index.php?page=subtitle-data';
    </script>
<?php
}
?>