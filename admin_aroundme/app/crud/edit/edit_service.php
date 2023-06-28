<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM services where id = '$id'");
$view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Service Data - <?php echo $view['services']; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='POST' action='crud/update/update_service.php'>
                    <div class="row">
                        <div class="col-sm-10">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Text</label>
                                <input class="form-control" placeholder="Text" name="text" value="<?php echo $view['text']; ?>"></input>
                                <input class="form-control" placeholder="id" name="id" value="<?php echo $view['id']; ?>" hidden></input>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn tbn-sm btn-info">Save</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
<!-- /.card -->
<!-- general form elements disabled -->